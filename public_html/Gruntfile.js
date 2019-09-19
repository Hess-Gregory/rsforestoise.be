module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

      // Concaténation
      concat: {
        options: {
          separator: ';',
        },
        dist: {
          src: ['vendor/**/*.js', 'js/main.js', '!vendor/tinymce/**/*.js'],
          dest: 'dist/js/main.js'
        }
      },

      // Compilation
      sass: {
        dist: {
          options: {
             style: 'compressed'
          },
          files: {
            'dist/css/main.css': 'scss/bootstrap.scss',
            'dist/css/main_back-end.css': 'scss/main_back-end.scss'
          }
        },
        prod: { // Started after PostCSS
          options: {
             style: 'compressed'
          },
          files: {
            'dist/css/main.min.css': 'dist/css/main.css',
            'dist/css/main_back-end.min.css': 'dist/css/main_back-end.css'
          }
        }
      },

      // Minification JS
      uglify: {
        options: {
          separator: ';',
        },
        dist: {
          src: ['dist/js/main.js'],
          dest: 'dist/js/main.min.js'
        }
      },

      // Watch
      watch: {
        options: {
          livereload: true,
        },
        src: {
          files: ['scss/*.scss', 'scss/**/*.scss', 'js/main.js', 'vendor/**/*.js'],
          tasks: ['default']
        }
      },

      // PostCSS - AutoPrefixer
      postcss: {
        options: {
          map: true,

          map: {
              inline: true,
              annotation: 'dist/css/'
          },

          processors: [
            require('pixrem')(), // add fallbacks for rem units
            require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
            require('cssnano')() // minify the result
          ]
        },
        dist: {
          src: 'dist/css/main.css'
        }
      }

    });
      
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-postcss');

    grunt.registerTask('default', ['sass:dist', 'concat:dist', 'uglify:dist']);
    grunt.registerTask('prod', ['postcss:dist', 'sass:prod']);
};