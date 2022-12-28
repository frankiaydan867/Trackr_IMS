<?php

class Lazy
{
    function minify()
    {
        echo Web::instance()->minify(['main.js', 'script.js'], null, true, null);
    }
}
