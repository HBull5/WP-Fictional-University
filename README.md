# WP-Fictional-University

## Creating files in the public folder

* You can create php files here ( maybe HTML ) and then view by simply going to `{{ domain }}/name-of-file.php`
    * Unsure if this would actually be used, but interesting way to add completely coded pages to a WP site

## Creating Custom Themes 

* You must create a new folder w/ the name of your new theme
* In that folder you must have two files, `index.php` & `style.css`
    * You can name the theme whatever you like with a comment at the top, `Theme Name: {{ name }}`
    * You can author the theme, `Author Name: {{ name }}`
    * You can version the theme, `Version: {{ version number }}`
* You can add a theme thumbnail by adding the file `screenshot.png` or `screenshot.jpg`
    * Ideal dimensions are 1200 ( wide ) by 900 ( tall )
* You can delete themes by simply deleting the folders in the `themes` directory

## Functions Introduction 

* You can create php functions just as you would in any normal php project 
* `bloginfo()` is a built in WP function, you can pass in the argument `name` which will pull the site title 
    * You can view the site title in the WP dashboard by going to `settings > general > site title`
    * You can also pull tagline by calling `bloginfo( 'description' )`, this is based off the value at `settings > general > tagline`

## The Wordpress Loop

* `have_posts()` is a WP function that checks to see if there are additional posts to loop through 
* `the_post()` is a WP function that can be called to keep track of which post is currently being iterated over
* `the_title()` is a WP function that will pull the title for the current post being iterated over 
* `the_content()` is a WP function that will pull the content from the post that is currently being iterated over
* `the_permalink()` is a WP function that will return the link to the post page itself
* If you want to have the single post formatted differently, contain more content, etc. You can handle this by creating a file named `single.php` this page is for single/individual posts. This will apply to any single post page permalink
* `index.php` is designated in WP as the homepage, much like `single.php` is designated for individual posts. 
    * If you for instance view an individual post page, but you have not created a `single.php` file ( or any other example of this convention ) WP will default to the index.php file and execute that script
* `page.php` is designated in WP as the script to execute when a page is the permalink
* `THE LOOP` is the wordpress loop and is basically just a paradigm