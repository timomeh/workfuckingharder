module.exports = function(grunt) {

  var config = {
    pkg: grunt.file.readJSON('package.json')
  };

  grunt.initConfig({

    compass: {
      dist: {
        options: {
          config: 'sass/config.rb',
          environment: 'production',
          sassDir: 'sass',
          cssDir: 'css/dist'
        }
      },
      dev: {
        options: {
          config: 'sass/config.rb',
          environment: 'development',
          sassDir: 'sass',
          cssDir: './'
        }
      }
    },

    svgstore: {
      options: {
        prefix: 'shape-',
        svg: {
          class: 'hide',
          xmlns: 'http://www.w3.org/2000/svg'
        }
      },
      default: {
        files: {
          'partial-svgmap.php': ['img/svg/*.svg'],
        },
      },
    },

    uglify: {
      build: {
        src: 'js/dist/scripts.js',
        dest: 'js/dist/scripts.min.js'
      }
    },

    jshint: {
      beforeconcat: ['Gruntfile.js','js/*.js']
    },

    concat: {
      dist: {
        src: 'js/*.js',
        dest: 'js/dist/scripts.js'
      }
    },

    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'img/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'img/'
        }]
      }
    },

    focus: {
      dev: {
        exclude: ['cssdist', 'scriptsdist']
      }
    },


    watch: {
      cssdev: {
        files: ['sass/*.scss', 'sass/**/*.scss'],
        tasks: ['compass:dev'],
        options: {
          spawn: false,
        }
      },

      cssdist: {
        files: ['sass/*.scss', 'sass/**/*.scss'],
        tasks: ['compass:dist'],
        options: {
          spawn: false,
        }
      },

      scriptsdist: {
        files: ['js/*.js'],
        tasks: ['jshint', 'concat', 'uglify'],
        options: {
          spawn: false,
        }
      },

      scriptsdev: {
        files: ['js/*.js'],
        tasks: ['jshint'],
        options: {
          spawn: false,
        }
      },

      grunt: {
        files: ['Gruntfile.js', 'package.json'],
        tasks: ['jshint']
      }
    }

  });

  require('load-grunt-tasks')(grunt);
  grunt.registerTask('default', ['compass:dev','compass:dist','watch']);
  grunt.registerTask('img', ['imagemin']);
  grunt.registerTask('svg', ['svgstore']);
  grunt.registerTask('dev', ['compass:dev', 'focus:dev']);
};