module.exports = function(grunt) {
	grunt.initConfig({
		jshint: {
			options: {
				curly: true,
				eqeqeq: true,
				eqnull: true,
				browser: true,
				globals: {
					jQuery: true
				}
			},
			files: ['source/wp-content/themes/edex/js/app/*.js']
		},
		uglify: {
			/*options: {
				mangle: {
			 		except: ['jQuery']
				}
			},*/
			script: {
				files: {
					'source/wp-content/themes/edex/js/plugins.min.js': ['source/wp-content/themes/edex/js/plugins/*.js'],
					'source/wp-content/themes/edex/js/lib.min.js': ['source/wp-content/themes/edex/js/lib/*.js'],
					'source/wp-content/themes/edex/js/global.min.js': ['source/wp-content/themes/edex/js/app/*.js']
				}
			}
		},
		compass: {
			development: {
				options: {
					sassDir: 'source/wp-content/themes/edex/sass',
					cssDir: 'source/wp-content/themes/edex/css'
				}
			}
		},
		csslint: {
			development:{
				options: {
					'box-sizing': false,
					'star-property-hack': false,
					'floats': false,
					'important': false,
					'font-sizes': false,
					'duplicate-background-images': false,
					'text-indent': false
				},
				src: ['source/wp-content/themes/edex/css/global.css']
			}
		},
		cssmin: {
			style: {
				options: {
					banner: '/*\
					\n\tTheme Name: EdeX\
					\n\tDescription: EdeX base on HTML5 Blank WordPress Theme\
					\n\tVersion: 0.1.0\
					\n\tAuthor: Jimmy Man (@JimmyMan2010)\
					\n\tAuthor URI: http://emeien.com\
					\n\tTags: HTML5, CSS3\
					\n\
					\n\tLicense: MIT\
					\n\tLicense URI: http://opensource.org/licenses/mit-license.php\
					\n*/'
				},
				files: {
					'source/wp-content/themes/edex/style.css': ['source/wp-content/themes/edex/css/global.css']
				}
			},
			plugins: {
				files: {
					'source/wp-content/themes/edex/css/plugins.min.css': ['source/wp-content/themes/edex/css/plugins/*.css']
				}
			}
		},
		less: {
			development: {
				options:{
					compress: true
				},
				files: {
					"source/wp-content/plugins/js_composer/assets/css/js_composer.css": "source/wp-content/plugins/js_composer/assets/less/js_composer.less",
					"source/wp-content/plugins/js_composer/assets/css/js_composer_backend_editor.css": "source/wp-content/plugins/js_composer/assets/less/js_composer_backend_editor.less",
					"source/wp-content/plugins/js_composer/assets/css/js_composer_frontend_editor.css": "source/wp-content/plugins/js_composer/assets/less/js_composer_frontend_editor.less",
					"source/wp-content/plugins/js_composer/assets/css/js_composer_frontend_editor_iframe.css": "source/wp-content/plugins/js_composer/assets/less/js_composer_frontend_editor_iframe.less",
					"source/wp-content/plugins/js_composer/assets/css/js_composer_settings.css": "source/wp-content/plugins/js_composer/assets/less/js_composer_settings.less",
					"source/wp-content/plugins/js_composer/assets/css/tpl_js_composer.css": "source/wp-content/plugins/js_composer/assets/less/tpl_js_composer.less"
				}
			}
		},
		watch: {
			script:{
				files: ['<%= jshint.files %>'],
				tasks: ['jshint', 'uglify']
			},
			css:{
				files: ['source/wp-content/themes/edex/sass/*.scss'],
				tasks: ['compass', 'csslint', 'cssmin']
			},
			less:{
				files: ['source/wp-content/plugins/js_composer/assets/less/*.less'],
				tasks: ['less']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-csslint');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-less');

	grunt.registerTask('default', ['jshint', 'uglify', 'compass', 'csslint', 'cssmin']);

};