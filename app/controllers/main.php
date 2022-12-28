<?php


class Main
{
    private $f3;
    private $page;

    //Metrics
    private $startTime;
    private $endTime;
    private $totalTime;

    function __construct()
    {
        $this->f3 = \Base::instance();
        $this->page = 'Home';
        $this->startTime = hrtime(true);
    }

    function beforeroute()
    {
        $this->f3->set('page', $this->page);
        // echo \Template::instance()->render('_header.html', 'text/html');
    }

    function afterroute()
    {
        $this->endTime = hrtime(true);
        $this->totalTime = ($this->endTime - $this->startTime);
        $this->f3->set('executionTime', $this->totalTime);
    }

    function index()
    {
        $this->f3->set('test', 'Franki');
        $this->f3->set('page_info', 'Main Dashboard Home Page');
        echo \Template::instance()->render('home.html', 'text/html');
    }
}
