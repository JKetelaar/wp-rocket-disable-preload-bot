<?php
// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

/*
Plugin Name: Disable bot
Author: JKetelaar (Redkiwi)
Author URI: http://www.redkiwi.nl/
*/

add_filter( 'do_run_rocket_bot', '__return_false');