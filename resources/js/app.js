require('./bootstrap');
import 'tw-elements';

// remix icons
import "remixicon/fonts/remixicon.css";

// Alpine.js
import "alpine-turbo-drive-adapter";
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Turbolinks
var Turbolinks = require("turbolinks");
Turbolinks.start();
