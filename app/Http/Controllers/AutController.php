<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutController extends Controller
{
    public function me(){
        return [
        'NIS' => 3103120125,
        'Nama' => 'Koka Belva',
        'Phone' => '085668245571',
        'Class' => 'XII RPL 4'
        ];
    }
}
