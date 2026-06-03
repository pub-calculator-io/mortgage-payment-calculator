<?php
/*
Plugin Name: Mortgage Payment Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/mortgage-payment-calculator/
Description: Estimate your monthly mortgage payments easily. Our free Mortgage Payment Calculator factors in extra payments, taxes, and insurance to help you save money.
Version: 1.0.0
Author: www.calculator.io / Mortgage Payment Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_mortgage_payment_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Mortgage Payment Calculator by www.calculator.io";

function calcio_mortgage_payment_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Mortgage Payment Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_mortgage_payment_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_mortgage_payment_calculator', 'calcio_mortgage_payment_calculator_shortcode' );