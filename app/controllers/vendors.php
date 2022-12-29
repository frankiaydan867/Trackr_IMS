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
        $vendors = new Vendor();
        $this->f3->set('vendors', $vendors->find());
        echo \Template::instance()->render('settings/vendors.html', 'text/html');
    }

    function add()
    {
        if ($this->f3->get('VERB') === 'GET') {
            $this->f3->set('action', 'add');
            echo \Template::instance()->render('settings/vendor_add_edit.html', 'text/html');
        } else if ($this->f3->get('VERB') === 'POST') {
            $vendor = new Vendor();
            $vendor->name = $this->f3->get('POST.name');
            $vendor->address_1 = $this->f3->get('POST.address_1');
            $vendor->address_2 = $this->f3->get('POST.address_2');
            $vendor->city = $this->f3->get('POST.city');
            $vendor->state = $this->f3->get('POST.state');
            $vendor->zip = $this->f3->get('POST.zip');
            $vendor->contact_name = $this->f3->get('POST.contact_name');
            $vendor->phone = $this->f3->get('POST.phone');
            $vendor->email = $this->f3->get('POST.email');
            $vendor->url = $this->f3->get('POST.url');
            $vendor->notes = $this->f3->get('POST.notes');
            $vendor->save();
            //Pending Uploads logic...
            $this->f3->reroute('@vendors');
        }
    }

    function edit()
    {
        $vendor = new Vendor();
        $vendor->load(['_id = ?', (int)$this->f3->get('PARAMS.vendorid')]);
        if ($this->f3->get('VERB') === 'GET') {
            $this->f3->set('action', 'edit');
            $this->f3->set('vendor', $vendor);
            echo \Template::instance()->render('settings/vendor_add_edit.html', 'text/html');
        } else if ($this->f3->get('VERB') === 'POST') {
            $vendor->name = $this->f3->get('POST.name');
            $vendor->address_1 = $this->f3->get('POST.address_1');
            $vendor->address_2 = $this->f3->get('POST.address_2');
            $vendor->city = $this->f3->get('POST.city');
            $vendor->state = $this->f3->get('POST.state');
            $vendor->zip = $this->f3->get('POST.zip');
            $vendor->contact_name = $this->f3->get('POST.contact_name');
            $vendor->phone = $this->f3->get('POST.phone');
            $vendor->email = $this->f3->get('POST.email');
            $vendor->url = $this->f3->get('POST.url');
            $vendor->notes = $this->f3->get('POST.notes');
            $vendor->save();
            //Pending Uploads logic...
            $this->f3->reroute('@vendors');
        }
    }

    function delete()
    {
        $vendor = new Vendor();
        $vendor->load(['_id = ?', $this->f3->get('PARAMS.vendorid')]);
        $vendor->erase();
        $this->f3->reroute('@vendors');
    }
}
