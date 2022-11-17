<?php

/*
Plugin Name: NK Frequently Asked Questions(FAQ)
Plugin URI: http://wp4.nkphpdev.tech/
Description: Custom plugin to add FAQs on wordpress website  
Version: 1.0.0
Author: Niranjan K.
Author URI: http://wp4.nkphpdev.tech/
Text Domain: nkfaq
License: MIT
*/


function nk_faq($attr, $content = null)
{
    $question = $attr['faq'];
    $out = <<<HTML
        <div class="faq-container">
            <div class="faq-question">{$question}</div>
            <div class="faq-answer hidden">
                <p>{$content}</p>
            </div>
        </div>

    HTML;

    return  $out;
}

add_shortcode('nk_faq', 'nk_faq');

function load_nk_faq_scripts()
{
    wp_enqueue_style('nk_faq', plugin_dir_url(__FILE__) . '/css/nk_faq.css');
    wp_enqueue_script('nk_faq', plugin_dir_url(__FILE__) . '/js/nk_faq.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'load_nk_faq_scripts', 10);
