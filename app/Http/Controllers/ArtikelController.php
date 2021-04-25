<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategorie;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel ::Paginate(5);
        $kategorie = Artikel :: join ('kategories', 'kategories.id_kat','=','artikels.id_kat')
                    ->select('artikels.*')
                    ->orderBy('id_artikel','DESC')
                    ->Paginate(3); 
        return view('artikel/home', ['artikel'=>$artikel,'kategorie'=>$kategorie]);
    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug',$slug)->first();
        return view ('artikel/single', ['artikel'=>$artikel]);
    }
    
    public function show2($id_kat)
    {
        $kategorie = "SELECT artikels.title, artikels.content,kategories.kategori FROM artikels,kategories  WHERE artikels.id_kat=kategories.id_kat";
        return view ('artikel/kategori', ['kategorie'=>$kategorie]);
        
    }
}
