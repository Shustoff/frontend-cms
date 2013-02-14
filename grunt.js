module.exports = function(grunt) {
    grunt.initConfig({
        concat: {
            main: {
                src: [
                    'frontend/js/libs/**/*.js',
                    'frontend/js/admin/**/*.js'
                ],
                dest: 'frontend/js/admin.js'
            }
        },

        min: {
            main: {
                src: ['<%= concat.main.desc %>'],
                dst: 'frontend/js/admin.min.js'
            }
        },

        watch: {
            concat: {
                files: '<%= concat.main.src %>',
                tasks: 'concat'
            }
        },

        imgo: {
            images: {
                files: 'frontend/img/**'
            }
        },

        server: {
            port: 8000,
            base: '.'
        }
    });

    grunt.registerTask('default', 'concat min imgo');
};