# Learning Wordpress Project

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

## Header, Footer, & Linking Things

* `get_header()` is a WP function that looks for a file named `header.php` in the themes folder and will include the contents of that file on the page.
* `get_footer()` is a WP function that looks for a file named `footer.php` in the themes folder and will include the contents of that file on the page.
* You'll have to call this function on all pages you want it included in. If you wanted to add the header & footer to all pages, remember that `index.php` is a fallback as well so don't worry about creating each of the designated files if you have no other reason to.
* `wp_head()` is a WP function that allows wordpress manage the head section, this is used to load plugin dependant scripts, styles, etc. 
    * You can tack on additional custom code by adding actions in the `functions.php` file.
* `functions.php` is **NOT** a template file like `page.php` or `single.php` it is a file that is private ( dev eyes only ) that allows us to communicate w/ the WP backend.
* `add_action()` is a WP function that takes two arguments: a `hook` and a `function name`.
* `wp_enqueue_style()` is a WP function that takes two arguments: `an alias name` ( name doesn't matter just needs to be meaningful ) and a `path to the stylesheet`.
    * The path can be a web address or local file path
* `wp_footer()` is a WP function that allows wordpress to manage injecting scripts at the bottom of the page. 
    * It also contains the necessary JS to load the black admin bar shown when logged in. 
* `get_theme_file_uri()` is a WP function that will return the absolute path to your theme folder, you can pass in a string argument to append onto the path.
* `wp_enqueue_script()` is a WP function that takes four arguments, `an alias name` ( name doesn't matter just needs to be meaningful ), a `path to the script`, an `array of dependencies` ( you can pass in NULL if no dependencies are required ), a `version` as a string ( can be anything you'd like ), a `boolean` to determine whether right before the closing body tag yes || no.

## Interior Page Template

* `after_theme_setup` is a WP hook that is called during each page load, after the theme is initialized.
* `add_theme_support()` is a WP function that takes one argument to add theme support features
    * An example is the `title-tag` argument that can add the page/post name and set the page `title` element to page/post name + | your site title.
* `site_url()` is a WP function that returns the root url of the current WP site the function is being executed at. It can be passed one argument which will automatically append it to the end or the URL.

## Parent / Child Pages

* When editing any page or post you can see in the query string of the url a `post id` this is identified as `post=24` for example.
* `get_the_ID()` is a WP function that allows you to pull the current ID of the post or page.
* `wp_get_post_parent_id()` is a WP function that takes one argument of the id of the post or page of which you want the parent's ID. 
    * Simple dynamic use case is to call the function like this `wp_get_post_parent_id( get_the_ID() );` to get the parent ID of the current page / post.
* `get_the_title()` is a WP function that takes one argument. That argument is the post id or post and returns that post's title. 
* `get_the_permalink()` is a WP function that takes one argument. That argument is the post id or post and returns that post's permalink.
    * There is also a `get_permalink()` WP function, it does the same thing, `get_the_permalink()` was added to make the naming convention of pulling data from a specified post id argument format.
