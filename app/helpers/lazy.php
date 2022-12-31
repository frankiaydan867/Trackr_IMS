<?php


/**
 * Lazy - Utility Class
 */
class Lazy
{
    function minifyJS()
    {
        echo Web::instance()->minify(['main.js', 'script.js'], null, true, null);
    }

    function minifyCSS()
    {
        echo Web::instance()->minify(['bootstrap.min.css', 'style.css'], null, true, null);
    }
}
