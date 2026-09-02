<?php
/*
Plugin Name: "Hello" on the Dashboard
Description: A custom plugin to showcase WordPress Blueprints
Version: 1.0
Author: WordPress Contributors
*/

function my_custom_plugin() {
    echo '<h1>This plugin is from GitHub!</h1>';
}

add_action('admin_notices', 'my_custom_plugin');