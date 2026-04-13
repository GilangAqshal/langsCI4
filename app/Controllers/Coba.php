<?php

namespace App\Controllers;

class Coba extends BaseController
{

    public function index()
    {
        echo "Ini adalah method index controller coba";
    }

    public function about($nama = '', $umur = 0)
    {
        echo "Hello nama saya adalah $nama Umur saya sekarang $umur";
    }
}
