<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return [
            'Nis' => 3103120225,
            'Name' => 'Velarina Nurmalakana',
            'Phone' => '088226540699',
            'Class' => 'XII RPL 7'
        ];
    }
}
