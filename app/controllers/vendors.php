<?php

class Vendors
{
    private $f3;

    function __construct()
    {
        $this->f3 = \Base::instance();
        $this->f3->set('page', 'Vendors');
    }

    function beforeroute()
    {
    }

    function afterroute()
    {
    }

    function index()
    {
        echo \Template::instance()->render('settings/vendors.html');
    }
}
