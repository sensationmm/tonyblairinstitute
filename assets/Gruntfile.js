'use strict';

module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Watch for changes and trigger compass, jshint, uglify and livereload
    watch: {
      compass: {
        files: ['sass/*.{scss,sass}','sass/*/*.{scss,sass}'],
        tasks: ['compass:dev']
      },
      js: {
        files: ['js/src/*.js'],
        tasks: ['jshint', 'uglify:dev']
      },
      livereload: {
        options: {
          livereload: true
        },
        files: [
          '*.html',
          'css/tbi.css',
          'js/*.js',
          'images/{,**/}*.{png,jpg,jpeg,gif,webp,svg}'
        ]
      }
    },

    // Connect
    connect: {
      server: {
        options: {
          port: 8000
        }
      }
    },

    // Compass and scss
    compass: {
      options: {
        //bundleExec: true,
        httpPath: './',
        cssDir: 'css',
        sassDir: 'sass',
        imagesDir: '../../www/themes/custom/tbi/images',
        javascriptsDir: '../../www/themes/custom/tbi/compiled',
        fontsDir: 'fonts',
        assetCacheBuster: 'none',
        require: [
          'susy',
          'breakpoint'
        ]
      },
      dev: {
        options: {
          environment: 'development',
          outputStyle: 'expanded',
          relativeAssets: true,
          raw: 'line_numbers = :true\n'
        }
      },
      dist: {
        options: {
          environment: 'production',
          outputStyle: 'compact',
          force: true
        }
      }
    },
 
    // Javascript linting with jshint
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'js/src/*.js'
      ]
    },

    // Concat & minify
    uglify: {
      dev: {
        options: {
          mangle: false,
          compress: false,
          preserveComments: 'all',
          beautify: true
        },
        files: {
          '../../www/themes/custom/tbi/compiled/tbi.min.js': [
            'js/src/*.js'
          ]
        }
      },
      dist: {
        options: {
          mangle: true,
          compress: true
        },
        files: {
          '../../www/themes/custom/tbi/compiled/tbi.min.js': [
            'js/src/*.js'
          ]
        }
      }
    },

    //minify css
    cssmin: {
      dist: {
        options: {
          banner: '/*! MyLib.js 1.0.0 | Aurelio De Rosa (@AurelioDeRosa) | MIT Licensed */'
        },
        files: {
          '../../www/themes/custom/tbi/compiled/tbi.min.css': ['css/*.css']
        }
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('build', [
    'jshint',
    'uglify:dist',
    'compass:dist',
    'cssmin:dist'
  ]);

  grunt.registerTask('default', [
    'connect',
    'jshint',
    'uglify:dev',
    'compass:dev',
    'watch'
  ]);

};