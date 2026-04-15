<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{

    public function index()
    {
        echo "Ini adalah controller users dari folder admin dengan method index";
    }

    public function badmin(){
        echo "Ini adalah halaman badmin";
    }
}
