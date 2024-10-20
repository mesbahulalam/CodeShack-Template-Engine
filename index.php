<?php
require_once('Template.php');

// render a template
Template::view('templates/index.html', [
    'title' => 'Home Page',
    'colors' => ['red','blue','green']
]);

// pass in variables
Template::view('templates/error.html', [
    'error' => 'An Error Has Occured'
]);

// clear cache folder
Template::clearCache();