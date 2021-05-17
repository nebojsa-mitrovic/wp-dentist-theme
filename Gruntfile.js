
'use strict';

var path = require('path'),
    BOILERPLATE_VERSION = '1.2.0';

module.exports = function(grunt) {
  require('jit-grunt')(grunt, {
    'shell'         : 'grunt-shell-spawn',
    'scsslint'      : 'grunt-scss-lint',
    'browserSync'   : 'grunt-browser-sync',
    'notifiy_hooks' : 'grunt-notify'
  });

  grunt.initConfig({
    buildOptions: grunt.file.readJSON('manifest.json'),

    browserSync: {
      dev: {
        bsFiles: {
          src: [
            '*.php',
            'libs/*.php',
            'libs/**/*.php',
            '.tmp/*.css',
            'assets/images/*.{png,jpg,gif}',
            'assets/vendor/*.*',
            'assets/javascripts/*.js',
            'assets/fonts/*.*',
            'style.css',
            'style.ext.css'
          ]
        }
      },
      options: {
        watchTask: true,
        proxy: '<%= buildOptions.developmentURL %>'
      }
    },

    watch: {
      buildSystem: {
        files: [
          'Gruntfile.js',
          'manifest.json'
        ],
        options: {
          reload: true
        }
      },

      sass: {
        files: [
          'assets/sass/*.{scss,sass}',
          'assets/sass/*/*.{scss,sass}',
          'assets/sass/schema/*.{scss,sass}',
          'assets/sass/*/*.{scss,sass}',
        ],
        tasks: ['sass:dev'],
        options: {
          spawn: false
        }
      }
    },

    shell: {
      options: {
        stdout: true,
        stderr: true
      },
    },

    sass: {
      dev: {
        files: {
          'style.ext.css': 'assets/sass/main.scss'
        }
      }
    },

    scsslint: {
      allFiles: [
        'assets/sass/*.{scss,sass}'
      ]
    },

    csslint: {
      dist: {
        options: '<%= buildOptions.linting.css %>',
        src: ['style.css']
      }
    },

    jshint: {
      options: '<%= buildOptions.linting.js %>',
      dist: ['assets/js/*.js']
    },

    lintspaces: {
      all: {
        src: [
          '*.php',
          'assets/**/*',
          '!assets/vendor/*.*',
          '!assets/fonts/*.*',
          'libs/*.php',
          '*.json',
          '*.js'
        ],
        options: {
          editorconfig: '.editorconfig',
          ignores: [
            /\/\*[\s\S]*?\*\//g,
            /foo bar/g
          ]
        }
      }
    },

    clean: {
      all: {
        src: [
          'assets/vendor/vendor.js',
          'assets/vendor/vendor.css',
          'style.ext.css',
          'style.ext.css.map',
          'assets/fonts/*',
          '!assets/fonts/.gitkeep',
        ]
      }
    },

    concat: {
      options: {
        separator: ';',
      },
      jsDist: {
        src: "<%= buildOptions.npm_dependencies.js %>",
        dest: 'assets/vendor/vendor.js',
      },
      cssDist: {
        src: "<%= buildOptions.npm_dependencies.css %>",
        dest: 'assets/vendor/vendor.css',
      }
    },
    uglify: {
      my_target: {
        files: {
          'assets/vendor/vendor.js': ['assets/vendor/vendor.js']
        }
      }
    },
    cssmin: {
      target: {
        files: {
          'assets/vendor/vendor.css': ['assets/vendor/vendor.css']
        }
      }
    },



    'ftp-deploy': {
      live: {
        auth: {
          host:       '<%= buildOptions.ftp.live.host %>',
          port:       '<%= buildOptions.ftp.live.port %>',
          authKey:    'live-key'
        },
        src:        '<%= buildOptions.ftp.src %>',
        dest:       '<%= buildOptions.ftp.live.dest %>/' + '<%= buildOptions.projectname %>',
        exclusions: '<%= buildOptions.ftp.exclude %>'
      },

      stage: {
        auth: {
          host:       '<%= buildOptions.ftp.stage.host %>',
          port:       '<%= buildOptions.ftp.stage.port %>',
          authKey:    'stage-key'
        },
        src:        '<%= buildOptions.ftp.src %>',
        dest:       '<%= buildOptions.ftp.stage.dest %>/' + '<%= buildOptions.projectname %>',
        exclusions: '<%= buildOptions.ftp.exclude %>'
      }
    },
    'sftp-deploy': {
      stage: {
        auth: {
          host:       '<%= buildOptions.ftp.stage.host %>',
          port:       '<%= buildOptions.ftp.stage.port %>',
          authKey:    'stage-key'
        },
        src: "<%= buildOptions.ftp.src %>",
        dest: "<%= buildOptions.ftp.stage.dest %>/" + "<%= buildOptions.projectname %>",
        exclusions: "<%= buildOptions.ftp.exclude %>",
        serverSep: "/",
        localSep: "\\"
      }
    },

    copy: {
      icons: {
        files: [{
          expand: true,
          dot: true,
          cwd: 'node_modules/font-awesome/fonts',
          src: ['*.*'],
          dest: 'assets/fonts'
        }]
      }
    }
  });

  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  var buildSystemFiles = [
    'manifest.json',
    'style.css',
    'functions.php',
    'index.php',
    'package.json',
    'Gruntfile.js', // haha. looooool
    'assets/sass/main.scss'
  ];
  var builtFiles = [
    'assets/vendor/vendor.js',
    'style.ext.css',
    'assets/fonts/fontawesome-webfont.ttf'
  ];

  function checkBuildSystem() {
    var check = true;
    for(var i in buildSystemFiles) {
      if( ! grunt.file.exists(buildSystemFiles[i])) {
        grunt.log.error('File "' + buildSystemFiles[i] + '" is missing!');
        check = false;
      }
    }

    return check;
  }

  function checkIfBuilt() {
    var isBuilt = true;
    for(var n in builtFiles) {
      if( ! grunt.file.exists(builtFiles[n])) {
        isBuilt = false;
      }
    }
    return isBuilt;
  }

  grunt.registerTask('check', '', function() {
    if( ! grunt.file.exists('.editorconfig')) {
      grunt.log.warn('Editor configuration file (.editorconfig) missing!');
    }

    if( ! checkBuildSystem()) {
      grunt.fail.fatal('Build system corrupted! Call for help or run away!');
    }

    if( ! checkIfBuilt()) {
      grunt.log.warn('Theme not built. You should run `grunt build` or just `grunt`.');
    }
  });

  grunt.registerTask('validate', '', function() {
    grunt.task.run(['scsslint', 'jshint', 'csslint', 'lintspaces']);
  });

  grunt.registerTask('build', '', function() {
    grunt.task.run([
      'clean',
      'concat',
      'uglify',
      'cssmin',
      'copy:icons',
      'sass:dev'
    ]);
  });

  grunt.registerTask('default', '', function() {
    if( ! checkIfBuilt()) {
      grunt.log.warn('Running `build` task');
      grunt.task.run('build');
    }

    grunt.task.run(['browserSync', 'watch']);
  });

  grunt.registerTask('version', function() {
    grunt.log.ok(BOILERPLATE_VERSION);
  });
};
