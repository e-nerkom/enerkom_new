<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Image;

class PagesController extends Controller
{
    public function index()
    {
        $data = Content::all();
        $image = Image::all();        

        $title1 = $data->where('content','Title 1')->first()->value;
        $title2 = $data->where('content','Title 2')->first()->value;
        $title3 = $data->where('content','Title 3')->first()->value;
        $banner1 = $image->where('content','Banner 1')->first()->value;
        $banner2 = $image->where('content','Banner 2')->first()->value;
        $banner3 = $image->where('content','Banner 3')->first()->value;

        return view('home', compact('title1','title2','title3','banner1','banner2','banner3'));
    }
}
