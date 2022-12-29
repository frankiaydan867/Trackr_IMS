<?php

class Vendor extends \DB\Cortex
{
    protected $fieldConf = [
            'name' => [
                'type' => 'VARCHAR128',
                'nullable' => false,
                'index' => true
            ],
            'address_1' => [
                'type' => 'VARCHAR128',
                'nullable' => true,
            ],
            'address_2' => [
                'type' => 'VARCHAR128',
                'nullable' => true,
            ],
            'city' => [
                'type' => 'VARCHAR128',
                'nullable' => true,
            ],
            'state' => [
                'type' => 'VARCHAR128',
                'nullable' => true,
            ],
            'zip' => [
                'type' => 'VARCHAR128',
                'nullable' => true,
            ],
            'contact_name' => [
                'type' => 'VARCHAR128'
            ],
            'phone' => [
                'type' => 'VARCHAR128'
            ],
            'email' => [
                'type' => 'VARCHAR128'
            ],
            'url' => [
                'type' => 'VARCHAR256'
            ],
            'notes' => [
                'type' => 'VARCHAR256'
            ],
            'image' => [
                'type' => 'VARCHAR256'
            ]
        ],

        $db = 'DB',
        $table = 'vendors',
        $primary = 'id';
}
