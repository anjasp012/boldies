<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Produk;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data =  [
            'produks' => Produk::all(),
            'testimonies' => Testimoni::all(),
            'faqs' => Faq::all(),
        ];
        return view('home', $data);
    }

    public function listAgen()
    {
        $data =  [
            'produks' => Produk::all(),
        ];
        return view('list-agen', $data);
    }
}
