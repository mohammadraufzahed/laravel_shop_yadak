<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product};

class HomeController extends Controller
{
    public function index()
    {

        return view('pages.index', [
            'products' => cache()->remember('latest-products-home', 60, function () {
                return Product::query()->orderByDesc('updated_at')->limit(5)->get();
            })
        ]);
    }
}
