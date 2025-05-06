<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Tampilkan halaman Home.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Tampilkan halaman Portfolio dengan data contoh.
     *
     * @return \Illuminate\View\View
     */
    public function portfolio()
    {
        $projects = [
            [
                'title'       => 'Project A',
                'description' => 'Deskripsi singkat Project A.',
                'image'       => 'https://via.placeholder.com/400x250',
            ],
            [
                'title'       => 'Project B',
                'description' => 'Deskripsi singkat Project B.',
                'image'       => 'https://via.placeholder.com/400x250',
            ],
            [
                'title'       => 'Project C',
                'description' => 'Deskripsi singkat Project C.',
                'image'       => 'https://via.placeholder.com/400x250',
            ],
        ];

        return view('portfolio', compact('projects'));
    }
}
