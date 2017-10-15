const gulp = require('gulp');
const sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('default', function () {
    gulp.watch('css/*.scss', function () {
        gulp.src('css/*.scss')
            .pipe(sass())
            .pipe(autoprefixer())
            .pipe(sass({outputStyle: 'expended'}).on('error', sass.logError))
            .pipe(gulp.dest('css'))
    });
});



// gulp.task('default', function(){
//     gulp.src('css/style.scss')
//         .pipe(sass())
//         .pipe(gulp.dest('css'))
// });


// gulp.task('default', function(){
//     gulp.watch('css/style.scss', function(){
//         gulp.src('css/style.scss')
//             .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
//             .pipe(gulp.dest('css'));
//     });
// });


// gulp.task('default', function(){
//     gulp.watch('../../node_modules/bootstrap/scss/*.scss', function(){
//         gulp.src('../../node_modules/bootstrap/scss/bootstrap.scss')
//             .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
//             .pipe(gulp.dest('css'));
//     });
// });
//
// gulp.task('default', function(){
//     gulp.src('node_modules/bootstrap/scss/bootstrap.scss')
//         .pipe(sass())
//         .pipe(autoprefixer())
//         .pipe(gulp.dest('themes/paprikas/css'))
// });