<?php
require_once('Template.php');

// render a template
Template::view('index.html');
//OR
Template::view('index.html', [
    'title' => 'Home Page',
    'colors' => ['red','blue','green']
]);

// pass in variables
Template::view('error.html', [
    'error' => 'An Error Has Occured'
]);

// clear cache folder
Template::clearCache();