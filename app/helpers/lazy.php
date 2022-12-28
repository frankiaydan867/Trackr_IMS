<?php

class Lazy
{
    function minify()
    {
        echo Web::instance()->minify('main.js', null, true, null);
    }
}
