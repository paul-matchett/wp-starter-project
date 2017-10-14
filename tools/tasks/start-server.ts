/******************************************************************

  TASK - start-server
  Launching a localhost server using Browsersync
  Watching all sass, js, newly saved images to reload tasks 

  Packages:

  1.  Browsersync for localhost server
      browser-sync      - https://www.npmjs.com/package/browser-sync

*******************************************************************/

// import Gulp library
import { task } from 'gulp';

// Browsersync for localhost server
import {BROWSER_SYNC_OPTIONS} from '../constants';

// NPM Dev Dependencies

// Browsersync for localhost server
const browserSync = require('browser-sync');

// task
task('start-server', () => {

  browserSync(BROWSER_SYNC_OPTIONS);

});