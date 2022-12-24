<?php


class Main
{
    function index()
    {
        $f3 = \Base::instance();

        echo \Template::instance()->render('home.html', 'text/html');
    }
}
