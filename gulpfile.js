'use strict';

const gulp         = require("gulp");
const autoprefixer = require('autoprefixer');
const html         = require("gulp-htmlmin");
const gulpif       = require('gulp-if');
const imagemin     = require("gulp-imagemin");
const uglify       =  require("gulp-terser");
const concat       = require('gulp-concat');
const newer        = require("gulp-newer");
const notify       = require('gulp-notify'); 
const rename       = require('gulp-rename');
const sass         = require("gulp-sass");
const postcss      = require("gulp-postcss");   // O PostCSS move todo o código necessário para criar funções, utilidades e mixins fora de nossas folhas de estilo e os envolve como plugins.
const plumber      = require("gulp-plumber");   // substitui o pipemétodo e remove o onerrormanipulador padrão no errorevento, que despeja fluxos por erro por padrão.
const cssmin       = require('gulp-cssmin');    // minifica o css
const spritesmith  = require('gulp.spritesmith');
const del          = require("del"); 
const size         = require('gulp-size');
const tinypng      = require('gulp-tinypng-compress');
const browserSync  = require('browser-sync').create();

// sync
function sync() {
    browserSync.init({
        proxy: 'http://localhost/wordpress',
        notify: true,
        port: 8000 // definido a porta 8000, por default a porta é a 3000
    })

    //done();
}

// clear
function clean() {
    return del(["./assets/"]);
}

// sprites
function sprite() {
    gulp.src("./_src/images/*.png").pipe(spritesmith({
        imgName: 'sprite.png', // nome do arquivo sprite gerado.
        cssName: '_sprite.scss',
        imgPath: '../images/sprite.png',
        padding: 10
    }))  
    .pipe(gulpif('*.png', gulp.dest('./assets/images')))
    .pipe(gulpif('_sprite.scss', gulp.dest('./_src/scss')))
    .pipe(browserSync.stream())
}

// images
function images() {
    return gulp
    .src("./_src/images/**/*") 
    .pipe(tinypng({
        key: 'qB8lTb6tYVHxl5TJLRKsMqmjQ4JD8PDN',
        sigFile: 'images/.tinypng-sigs',
        log: true
    }))
    .pipe(newer("./assets/images"))
    .pipe(
        imagemin([
            imagemin.gifsicle({ interlaced: true }),
            imagemin.mozjpeg({ progressive: true }),
            imagemin.optipng({ optimizationLevel: 5 }),
            imagemin.svgo({
                plugins: [
                    {
                        removeViewBox: false,
                        collapseGroups: true
                    }
                ]
            })
        ])
    )
    .pipe(gulp.dest("./assets/images"))
    .pipe(size({
        title: '[ IMG  ] Tamanho do arquivo minificado ✔ :',
        gzip: false,  
        pretty: true,
        showFiles: true,
        showTotal: true
          
    }))   
    .pipe(browserSync.stream());
}

// fonts
function fonts() {
    return gulp
    .src('./_src/fonts/**/*')   
    .pipe(gulp.dest('./assets/fonts'))  
    .pipe(size({
        title: '[ FONT ] Tamanho do arquivo:',
        gzip: false,  
        pretty: true,
        showFiles: true,
        showTotal: true
          
    }))
    .pipe(browserSync.stream());
}

// scripts
function scripts() {
    return gulp
    .src([
        '!./_src/js/_excludes/**/*.js', // não pega o que tem dentro de _excludes
        './_src/js/_includes/**/*.js', 
        './_src/js/*.js'
    ])  
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js'))
    .pipe(size({
        title: '[  JS  ] Tamanho do arquivo minificado ✔ :',
        gzip: false,  
        pretty: true,
        showFiles: true,
        showTotal: true
          
    }))  
    .pipe(browserSync.stream());
}
  
// sass
function css() {
    
    var onError = function(err) {
        notify.onError({
            title:    "Gulp",
            subtitle: "Failure!",
            message:  "Error: <%= error.message %> +",
            sound:    "Beep"
        })(err);

        this.emit('end');
    };

    return gulp
    .src('./_src/scss/**/*.scss')                        
    .pipe(sass({ outputStyle: "expanded" })) // gera o arquivo main.css com o css expanded
    .pipe(postcss([autoprefixer()]))         // adc os autoprefixo nas propriedades css para suporte aos browser - atentar o browserslist no arquivo npm pois estamos utilizando o autoprefix direto do node.
    .pipe(gulp.dest('./assets/css/'))        // primeiro destino do arquivo main.css.
    .pipe(concat('main.css'))                // concatena tudo que for css(libs,seus arquivos css) no arquivo main.css.  
    .pipe(cssmin())                          // minifica tudo de css. 
    .pipe(rename("main.min.css"))            // renomeia o arquivo main.css para main.min.css, gerando um novo arquivo.
    .pipe(gulp.dest('./assets/css/'))        // adc o novo arquivo gerado chamado main.min.css para a pasta css.
    .pipe(plumber({errorHandler: onError}))  // notifica erro nos arquivos css e plugins. OBS: gulp-plumber pode ser usado para não interromper a execução e forçar você a reiniciar o gulp.
    .pipe(size({
        title: '[ CSS  ] Tamanho do arquivo minificado ✔ :',
        gzip: false,  
        pretty: true,
        showFiles: true,
        showTotal: true
          
    }))     
    .pipe(browserSync.stream());    
}

// html
function dom() {
    return gulp
    .src('./templates/dev/**/*.php')
    .pipe(size({
        title: '[ HTML ] Tamanho do arquivo:',
        gzip: false,  
        pretty: true,
        showFiles: true,
        showTotal: true
          
    }))   
    .pipe(html({collapseWhitespace:true})) // parametro para o arquivo ser minificado.
    .on("error", notify.onError({ message: "Error: <%= error.message %>"}))
    .pipe(gulp.dest('./templates/')) // manda o arquivo para o destino.
    .pipe(size({
        title: '[ HTML ] Tamanho do arquivo minificado ✔ :',
        gzip: false,  
        pretty: true,
        showFiles: true,
        showTotal: true
          
    }))  
    .pipe(browserSync.stream())
}

gulp.task("sass", css);
gulp.task("js", scripts);

// watch
function watch(){
    //gulp.watch('./front-page.php',dom);
    gulp.watch('./_src/scss/**/*', css);
    gulp.watch('./_src/images/*.png', sprite);
    gulp.watch('./_src/images/**/*', images);
    gulp.watch('./_src/fonts/**/*', fonts);
    gulp.watch('./_src/js/**/*', gulp.series(scripts));

}



// build - limpa primeiro e depois build o dom e css
gulp.task('build',gulp.series(clean,gulp.parallel(css,images,fonts,sprite,scripts)));

// default - observa os arquivos e syncroniza com o browser
gulp.task('default',gulp.parallel(watch,sync));