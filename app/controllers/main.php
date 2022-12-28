<?php


class Main
{
    private $f3;

    //Metrics
    private $startTime;
    private $endTime;
    private $totalTime;

    function __construct()
    {
        $this->f3 = \Base::instance();
        $this->f3->set('page', 'Home');
        $this->startTime = hrtime(true);
    }

    function beforeroute()
    {
    }

    function afterroute()
    {
        $this->endTime = hrtime(true);
        $this->totalTime = ($this->endTime - $this->startTime);
        $this->f3->set('executionTime', $this->totalTime);
    }

    function index()
    {
        echo \Template::instance()->render('home.html', 'text/html');
    }

    function settings()
    {
        echo \Template::instance()->render('settings/_settings.html', 'text/html');
    }
}
