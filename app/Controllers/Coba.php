<?php

namespace App\Controllers;

class Coba extends BaseController
{

    public function index()
    {
        echo "Hello";
    }

    public function about($nama = '')
    {
        echo "Hello nama saya $nama ";
    }
}
