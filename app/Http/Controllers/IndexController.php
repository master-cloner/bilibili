<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $data = [
            'base_info' => [
                'report_eamil'     => 'test@gmail.com',
                'report_telephone' => '111',
                'keep_record'      => 'xxxxx',
            ]
        ];
        return view('index', $data);
    }
}
