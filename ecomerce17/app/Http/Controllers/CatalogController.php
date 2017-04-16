<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function listAll()
    {
        $catalogs = Catalog::all();
        return view('catalogs.listAll',['catalogs'=>$catalogs]);
    }
    public function create()
    {
        return view('catalogs.create');
    }
    public function save(Request $request)
    {
        /*
        Catalog::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        */
        $catalog =new Catalog();
        $catalog->name = $request->input('name');
        $catalog->description = $request->input('description');
        $catalog->save();
        $catalogs = Catalog::all();
        return view('catalogs.listAll',['catalogs'=>$catalogs]);

    }
    public function update()
    {

    }
    public function delete()
    {

    }
    public function show($idCatalog)
    {
        $catalog=Catalog::find($idCatalog);
        return view('catalogs.show',['catalog'=>$catalog]);

    }
}
