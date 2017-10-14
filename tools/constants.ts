// NPM Dev Dependencies

// decide if in development or production mode
const util = require('gulp-util');


// BrowserSync
const PROJECT_URL = "http://localhost:8888/";
export const BROWSER_SYNC_OPTIONS = {
  notify: true,
  logPrefix: 'Epworth',
  proxy: PROJECT_URL
}

// Sass Setting
export const sassConfig = {
  start: './src/sass/*.scss',
  end: './siteFiles/css',
  compiled: './siteFiles/css/*.css'
}

// HTML Minify Settings
export const HTMLConfig = './**/*.php';

// Vendor Config
export const VendorConfig = {
  libraries: [
    './node_modules/jquery/dist/jquery.slim.js',
    './node_modules/popper.js/dist/umd/popper.js',
    './node_modules/bootstrap/dist/js/bootstrap.js',
    './node_modules/slick-carousel/slick/slick.js'
  ],
  end: './siteFiles/js'
}

// TS settings
export const TSConfig = {
  start: './src/ts/main.ts',
  end: './siteFiles/js',
  fileName: 'main.min.js',
  compiled: './siteFiles/js/*.js',
  reload: true
}

export const ImageConfig = {
  start: 'src/images/**',
  end: './siteFiles/images',
  compiled: 'siteFiles/images/**'
}
