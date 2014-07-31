Sass-Bootstrap Base Theme for WordPress
============================================================================================================================

Sass Boostrap 3.0.21: https://github.com/twbs/bootstrap-sass

## Repository Structure ##

This Sass-Boostrap Base theme should be placed in the themes folder of your project.

This section explains the organizational structure of this repository:

* **fonts/** contains the files for the fonts used for the sass-bootstrap theme

* **javascripts/** contains javascript files for sass-boostrap theme

* **Sass/** contains all the scss files that are 
	* **base/** contains boilerplate files
		* **_base.scss** imports all scss files in base folder to this file 
	* **components/** contains smaller components and specfic modules like slider, loader or widget
		* **_components.scss** imports all scss files in componenets folder to this file
	* **helpers/** contains all the sass tools, helpers, functions, and mixins
		* **_helpers.scss** imports all scss files in helpers folder to this file
	* **layout/** contains the main sections of the layout (header, footer, etc)
		* **_layout.scss** imports all scss files in layout folder to this file 
	* **themes/** contains all theme and design styles
	* **vendors/** contains all the CSS files from external libraries and frameworks
		* **_vendors.scss** imports all scss files in vendors folder to this file
	* **style.css.scss** imports _base.scss, _components.scss, _helpers.scss, _layout.scss, and _vendors.scss to this file

* **style.css** compiled scss file that contains all the declared styles imported into **style.css.scss* file in the **sass** folder
	* Compile the themes sass files into css: **compass compile [path/to/project]**

* **config.rb** compass configuration file: http://compass-style.org/help/tutorials/configuration-reference/

* **wp_bootstrap_navwalker.php** implements the Twitter Bootstrap 3.0+ navigation style using the WordPress built in menu manager: https://github.com/twittem/wp-bootstrap-navwalker

## Installing Compass and Sass ##

CSS Authoring Framework Compass: http://compass-style.org/

Sass: http://sass-lang.com/

Compass is a tool that runs on the command line on any system with ruby installed. 

Setting up Compass and Sass:
	
1. **gem install compass**

This will install Compass and Sass too. If you want to verify that compass is installed:

2. **compass version**

