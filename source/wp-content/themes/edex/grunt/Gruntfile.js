module.exports = function(grunt) {
	grunt.initConfig({
		jshint: {
			files: ['../js/development/**/*.js'],
			options: {
				globals: {
					jQuery: true
				}
			}
		},
		uglify: {
			/*options: {
				mangle: {
			 		except: ['jQuery']
				}
			},*/
			script: {
				files: {
					'../js/plugins.min.js': ['../js/plugins/*.js'],
					'../js/global.min.js': ['../js/development/*.js']
				}
			}
		},
		compass: {                  		// Task
			dev: {                   		// Target
				options: {              	// Target options
					sassDir: '../css/scss',
					cssDir: '../css/development',
					fontsDir: '../fonts',
					imagesDir: '../images'
				}
			}
		},
		csslint: {
			dev:{
				options: {
					import: 2
				},
				src: ['../css/development/*.css']
			}
		},
		cssmin: {
			css: {
				files: {
					'../css/plugins.min.css': ['../css/plugins/*.css'],
					'../css/global.min.css': ['../css/development/*.css']
				}
			}
		},
		watch: {
			script:{
				files: ['<%= jshint.files %>'],
				tasks: ['jshint', 'uglify']
			},
			scss:{
				files: ['*.scss'],
				tasks: ['compass', 'csslint', 'cssmin']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-csslint');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('default', ['jshint', 'uglify', 'compass', 'csslint', 'cssmin']);

};