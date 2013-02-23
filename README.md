# Grunwell WordPress Theme Starter Kit

This project contains the basic foundation I use when creating new WordPress themes. It's not really meant to be used by itself but rather start as a base for building new custom themes. What I've given you should be flexible, organized, and ready for whatever you want to throw at it.

This theme starter makes a few assumptions based on my typical workflow; if yours is different, please feel free to modify this as you see fit. The assumptions are:

1. The theme will be responsive
2. Stylesheets will be written in SASS
3. [Elliot Condon's Advanced Custom Fields](http://advancedcustomfields.com) plugin will be used

## Features

* HTML5 markup with ARIA Landmark roles
* CSS reset with baseline typography and utility classes
* Google CDN-hosted copy of jQuery
* Ready to go with Elliot Condon's Advanced Custom Fields plugin
* Localization-ready

## Usage

Download/clone the repository into wp-content/themes/. From there, start building!

You may want to start with the following:

### Setup theme information

There are a number of variables throughout the theme files that are meant to be swapped out (find+replace, sed, etc.) with the appropriate information.:

* **%Author%** - Your name or your company's name
* **%Text_Domain%** - The theme's text domain (used for i18n)
* **%Theme_Name%** - The name of the theme
* **themename_** - Prefix on all theme-specific functions

### Generate stylesheets

By default there's nothing but a .gitkeep (placeholder) directory in css/generated. This theme started is setup to use [SASS](http://sass-lang.com/) where the site serves compiled stylesheets from css/generated.

To generate your first stylesheet install SASS on your system and run:

    sass sass:generated --style compressed

If you'd like your stylesheets to automatically re-compile upon save run:

    sass --watch sass:generated --style compressed

#### Resources

* [An Introduction to SASS in Responsive Design](http://stevegrunwell.com/blog/intro-to-sass-in-responsive-design)
* [Recompile SASS Upon Deployment Using Git Hooks](http://stevegrunwell.com/blog/recompile-sass-upon-deployment-using-git-hooks)

### Install Advanced Custom Fields

If you intend to use Advanced Custom Fields you'll want to download and activate the plugin.

#### New to ACF?

If you haven't been exposed to the awesome that is ACF yet I implore you to read the following blog posts:

* [Using Advanced Custom Fields for WordPress](http://stevegrunwell.com/blog/wordpress-advanced-custom-fields)
* [Using WordPress Advanced Custom Fields Exports](http://stevegrunwell.com/blog/wordpress-advanced-custom-fields-export)

### Delete this file

Once you're on your way to building the next awesome theme you probably don't need these setup instructions. You can keep the file around if you want but there's zero need or obligation for you to do so.

## Support this project

This starter kit is free for anyone to use but it is tailored towards my ever-changing personal workflow. If there's something you don't like about it please feel free to fork the project and create your own personal starter kit. I likely will not be accepting pull requests unless a) there's a bug or b) you introduce me to a feature so totally cool that I immediately adopt it as a default in my theme development workflow.

## License

This theme starter is dual-licensed under both the [Don't Be a Dick](http://www.dbad-license.org/) and [WTF](http://www.wtfpl.net/) Public Licenses, which are GPLv2, MIT, and pretty much every-other-license-ever compatible.

Please have fun and build something awesome!