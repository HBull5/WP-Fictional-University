# WP-Fictional-University

## Creating files in the public folder

* You can create php files here ( maybe HTML ) and then view by simply going to `{{ domain }}/name-of-file.php`.
    * Unsure if this would actually be used, but interesting way to add completely coded pages to a WP site.

## Creating Custom Themes 

* You must create a new folder w/ the name of your new theme.
* In that folder you must have two files, `index.php` & `style.css`.
    * You can name the theme whatever you like with a comment at the top, `Theme Name: {{ name }}`.
    * You can author the theme, `Author Name: {{ name }}`.
    * You can version the theme, `Version: {{ version number }}`.
* You can add a theme thumbnail by adding the file `screenshot.png` or `screenshot.jpg`.
    * Ideal dimensions are 1200 ( wide ) by 900 ( tall ).
* You can delete themes by simply deleting the folders in the `themes` directory.

## Functions Introduction 

* You can create php functions just as you would in any normal php project.
* `bloginfo()` is a built in WP function, you can pass in the argument `name` which will pull the site title.
    * You can view the site title in the WP dashboard by going to `settings > general > site title`.
    * You can also pull tagline by calling `bloginfo( 'description' )`, this is based off the value at `settings > general > tagline`.

## The Wordpress Loop

* `have_posts()` is a WP function that checks to see if there are additional posts to loop through.
* `the_post()` is a WP function that can be called to keep track of which post is currently being iterated over.
* `the_title()` is a WP function that will pull the title for the current post being iterated over.
* `the_content()` is a WP function that will pull the content from the post that is currently being iterated over.
* `the_permalink()` is a WP function that will return the link to the post page itself.
* If you want to have the single post formatted differently, contain more content, etc. You can handle this by creating a file named `single.php` this page is for single/individual posts. This will apply to any single post page permalink.
* `index.php` is designated in WP as the homepage, much like `single.php` is designated for individual posts. 
    * If you for instance view an individual post page, but you have not created a `single.php` file ( or any other example of this convention ) WP will default to the index.php file and execute that script.
* `page.php` is designated in WP as the script to execute when a page is the permalink.
* **THE LOOP** is the wordpress loop and is basically just a paradigm.

## Header & Footer

* `get_header()` is a WP function that looks for a file named `header.php` in the themes folder and will include the contents of that file on the page.
* `get_footer()` is a WP function that looks for a file named `footer.php` in the themes folder and will include the contents of that file on the page.
* You'll have to call this function on all pages you want it included in. If you wanted to add the header & footer to all pages, remember that `index.php` is a fallback as well so don't worry about creating each of the designated files if you have no other reason to.
* `wp_head()` is a WP function that allows wordpress manage the head section, this is used to load plugin dependant scripts, styles, etc. 
    * You can tack on additional custom code by adding actions in the `functions.php` file.
* `functions.php` is **NOT** a template file like `page.php` or `single.php` it is a file that is private ( dev eyes only ) that allows us to communicate w/ the WP backend.
* `add_action()` is a WP function that takes two arguments: a `hook` and a `function name`.
* `wp_enqueue_style()` is a WP function that takes two arguments: `an alias name` ( name doesn't matter just needs to be meaningful ) and a `path to the stylesheet`.
    * `get_stylesheet_uri()` is a WP function that returns a path string combining the current directory and style.css.
* `wp_footer()` is a WP function that allows wordpress to manage injecting scripts at the bottom of the page. 
    * It also contains the necessary JS to load the black admin bar shown when logged in. 