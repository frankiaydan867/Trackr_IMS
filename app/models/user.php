<?php

class User extends \DB\Cortex
{
    protected $fieldConf = [
            'first_name' => [
                'type' => 'VARCHAR128',
                'nullable' => false,
                'index' => true
            ],
            'last_name' => [
                'type' => 'VARCHAR128',
                'nullable' => true,
                'index' => true
            ],
            'email' => [
                'type' => 'VARCHAR128'
            ],
            'password' => [
                'type' => 'VARCHAR256'
            ],
            'created_dt' => [
                'type' => 'DATETIME'
            ]
        ],

        $db = 'DB',
        $table = 'users',
        $primary = 'id';
}
