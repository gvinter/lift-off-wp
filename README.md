This is my own flavor of a starting point for new WordPress projects that require a quick build and responsive design.


#### Get Started:
1. I'm assuming you've already installed [WordPress](https://wordpress.org/download/).
- clone repo into `/themes/` directory. Activate this theme.
- Install Timber plugin via `/wp-admin/plugins.php`. Activate it.
- Add Grunt CLI to the project. `cd` into root directory and run `npm install -g grunt-cli` (assuming you have 'npm' installed).
- Add the Grunt task for compiling Sass: `npm install grunt-contrib-sass --save-dev`
- Add the Grunt task for Uglifying JS files: `npm install grunt-contrib-uglify --save-dev`
- Add the Grunt task for watching file updates: `npm install grunt-contrib-watch --save-dev`
- Run `grunt watch`
- Add custom SASS to `css/sass/` files. For example, put home page sass in `_home.sass`. How you organize these files is a matter of preference.
- Add custom JS to `js/main.js`
- Make sure you have LiveReload running. If you don't, remove from footer in HTML pages.


##### This a mixed recipe from:
- [Initializr](http://www.initializr.com/)
- [Materialize](http://materializecss.com/)
- [Bower](https://bower.io)
- [Includ Media](http://include-media.com/)
- jQuery
- Modernizr
- [SASS](http://sass-lang.com/)
- [Timber](http://upstatement.com/timber/)

##### Recommended Libraries
- [SublimeText 2 / TextMate - Twig bundle](https://github.com/Anomareh/PHP-Twig.tmbundle)
- [Others that Twig endorses](http://twig.sensiolabs.org/doc/templates.html#ides-integration)


<<<<<<< HEAD
##### TODOs
- TODO: comments.php is still in Starker. Move to Timber-style
- Add `Advanced Custom Fields` plugin to theme.
- Add `Twitter Feed` plugin to theme.
- Add Timber CPT examples and pagination example.
- helper functions
    + short_text
- set image sizes
=======
#### Theming Guide
1. Update theme details in `style.css`
- change `screenshot.png` for theme screenshot
- add `favicon.cc` to `public/img`
- change `apple-touch-icon-precomposed.png`
- update RSS feed in `head.twig`


#### Recommended Plugins
- Yoast SEO
- W3 Total Cache
- ContactForm7
- MailChimp
- Advanced Custom Fields


## TODO

- update meta tags to be based on page attributes, not just the whole site
>>>>>>> f9c1dea650e020c4beeda46e69ec85f9ab2b35e1
