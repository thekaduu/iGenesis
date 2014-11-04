var gulp = require('gulp');
var concat = require('gulp-concat');

var bower_directory = 'bower_components';

var js_dependent = [
	bower_directory + '/jquery/dist/jquery.min.js',
	bower_directory + '/semantic-ui/build/packaged/javascript/semantic.min.js',
	bower_directory + '/angular/angular.min.js'
];


var css_dependent = [
	bower_directory + '/semantic-ui/build/packaged/css/semantic.min.css'	
];


var css_diretorio = 'app/webroot/css/min';
var js_diretorio  = 'app/webroot/js/min';

gulp.task('concatenarJS',function(){
	gulp.src(js_dependent)
	.pipe(concat('dependencias_js.js'))
	.pipe(gulp.dest(js_diretorio))
})

gulp.task('concatenarCSS',function(){
	gulp.src(css_dependent)
	.pipe(concat('dependencias_css.css'))
	.pipe(gulp.dest(css_diretorio))
});

//Usada para concatenar todas as dependencias do projeto
gulp.task('iniciar',function(){
	gulp.run('concatenarCSS','concatenarJS')
});



//Tarefas do projeto

