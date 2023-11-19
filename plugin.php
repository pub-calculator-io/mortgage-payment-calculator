<?php
/*
Plugin Name: Mortgage Payment Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/mortgage-payment-calculator/
Description: Free mortgage payment calculator helps assess possibilities for paying off a mortgage sooner, such as additional payments, bi-weekly payments, or paying off the loan entirely.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_mortgage_payment_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Mortgage Payment Calculator by Calculator.iO";

function display_ci_mortgage_payment_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Mortgage Payment Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_mortgage_payment_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_mortgage_payment_calculator', 'display_ci_mortgage_payment_calculator' );