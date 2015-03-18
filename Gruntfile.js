module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Sass
    sass: {
      dist: {
        options: {
          style: 'compressed',
          sourcemap: 'none'
        },
        files: {
          'public/css/main.min.css': 'css/main.scss'
        }
      }
    },

    // Uglify
    uglify: {
      options: {
        banner: '/*! <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: [
          'bower_components/jquery/dist/jquery.min.js',
          // 'bower_components/materialize/js....'
          'js/plugins.js',
          'js/main.js',
        ],
        dest: 'public/js/main.min.js'
      }
    },

    // Watch
    watch: {
      // Watch this file
      configFiles: {
        files: 'Gruntfile.js',
        options: {
          reload: true
        }
      },
      sass: {
        files: 'css/**/*.sass',
        tasks: ['sass']
      },
      js: {
        files: 'js/**/*.js',
        tasks: ['uglify']
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', [
    'watch'
  ]);
};