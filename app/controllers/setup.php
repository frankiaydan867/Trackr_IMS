<?php


class Setup
{

    function beforeroute()
    {
        echo \Template::instance()->render('_header.html');
    }

    function afterroute()
    {
        echo \Template::instance()->render('_footer.html');
    }

    function index()
    {
        echo \Template::instance()->render('setup/_setup.html');
    }


    function initDB()
    {
        $f3 = \Base::instance();
        User::setup();
        $f3->reroute('@home');
    }

    function nukeDB()
    {
        $f3 = \Base::instance();
        User::setdown();
        $f3->reroute('@home');
    }
}
