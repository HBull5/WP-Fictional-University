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