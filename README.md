This is [Lift-off's](http://github.com/gvinter/lift-off) version of a WordPress theme. Hence: Lift-off WP!

This is my own flavor of a starting point for new WordPress projects that require a quick build and responsive design.


#### Get Started:
1. I'm assuming you've already installed [WordPress](https://wordpress.org/download/).
- clone repo into `/themes/` directory. [Network] activate it.
- [Install Twig](http://twig.sensiolabs.org/doc/installation.html)
- Install Timber: `git clone git@github.com:jarednova/timber.git` into your `/plugins/` directory. [Network] activate it.
- Activate this theme
- Add Grunt CLI to the project. `cd` into root directory and run `npm install -g grunt-cli` (assuming you have 'npm' installed).
- Add the Grunt task for compiling Sass: `npm install grunt-contrib-sass --save-dev`
- Add the Grunt task for Uglifying JS files: `npm install grunt-contrib-uglify`
- Add the Grunt task for watching file updates: `npm install grunt-contrib-watch --save-dev`
- Run `grunt watch`
- Add custom SASS to `css/sass/` files. For example, put home page sass in `_home.sass`. How you organize these files is a matter of preference.
- Add custom JS to `js/main.js`
- Make sure you have LiveReload running. If you don't, remove from footer in HTML pages.


##### SASS-MQ instead of RespondJS

I'm a fan of [The Guadrian's SASS-MQ]((https://github.com/guardian/sass-mq/)) library and I prefer to use it instead of [RespondJS](https://github.com/scottjehl/Respond) for 2 reasons. First, I like the `+mq($from: <mobile>, $to: <desktop>)` mixin because it's easier than typing out `@media (min...)`. Second, It takes care of IE8 when you're trying to build with a mobile-first strategy.


##### This a mixed recipe from:
- [Initializr](http://www.initializr.com/)
- [Bootstrap](http://www.getbootstrap.com/)
- [SASS-MQ](https://github.com/guardian/sass-mq/)
- [SASS](http://sass-lang.com/)
- [Timber](http://upstatement.com/timber/)

##### Recommended Libraries
- [SublimeText 2 / TextMate - Twig bundle](https://github.com/Anomareh/PHP-Twig.tmbundle)
- [Others that Twig endorses](http://twig.sensiolabs.org/doc/templates.html#ides-integration)


##### TODOs
- TODO: comments.php is still in Starker. Move to Timber-style