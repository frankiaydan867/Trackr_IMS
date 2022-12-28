<?php


class Setup
{




    function beforeroute()
    {
    }

    function afterroute()
    {
    }

    function index()
    {
        echo \Template::instance()->render('setup/_setup.html');
    }


    function initDB()
    {
        $f3 = \Base::instance();
        User::setup();
        Vendor::setup();
        $f3->reroute('@setup');
    }

    function nukeDB()
    {
        $f3 = \Base::instance();
        User::setdown();
        $f3->reroute('@setup');
    }
}
