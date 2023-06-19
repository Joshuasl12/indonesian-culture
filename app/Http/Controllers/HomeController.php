<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Province;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexProvince()
    {
        $data = Province::all();

        return view('province.index', ['data' => $data]);
    }

    public function createProvince()
    {
        return view('province.create');
    }

    public function indexCollection()
    {
        $data = Collection::all();
        return view('collection.index', ['data' => $data]);
    }

    public function createCollection()
    {
        $data = Province::all();

        return view('collection.create', ['data' => $data]);
    }

    public function Home()
    {
        $province = Province::all();
        $provinceCount = $province->count();
        
        $collection = Collection::all();
        $collectionCount = $collection->count();

        return view('home', ['provinceCount' => $provinceCount, 'collectionCount' => $collectionCount]);
    }

    public function dashboard(){
        return view('client.dashboard');
    }
}
