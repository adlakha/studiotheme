module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'../css/edgtf-options.css': '../css/scss/edgtf-options.scss',
					'../css/edgtf-forms.css': '../css/scss/edgtf-forms.scss',
					'../css/edgtf-meta-boxes.css': '../css/scss/edgtf-meta-boxes.scss',
					'../css/edgtf-meta-boxes.css': '../css/scss/edgtf-meta-boxes.scss',
					'../css/edgtf-ui/edgtf-ui.css': '../css/scss/edgtf-ui/edgtf-ui.scss'
				}
			}
		},
		watch: {
			css: {
				files: [ '../css/scss/*.scss', '../css/scss/*/*.scss', '../css/scss/*/*/*.scss', '../css/scss/*/*/*/*.scss'],
				tasks: ['sass'],
				options: {
					spawn: false
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
};