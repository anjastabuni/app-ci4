<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Hawai Kemiri. Pos 7',
                    'kota' => 'Jayapura'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Perumnas 3. no. 193',
                    'kota' => 'Jayapura'

                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
