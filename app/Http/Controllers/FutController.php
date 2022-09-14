<?php

namespace App\Http\Controllers;

use App\Models\fut;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Directory;
use App\Http\Requests\fut_request;

class FutController extends Controller
{
    public function index(Request $request)
    {
        $futs = Fut::all();
        return view ('fut.index', compact('futs'));
    }
    public function create()
    {
        return view('fut.create' );
    }

    public function store(fut_request $request)
    {
        $fut = new Fut();
        $fut -> title = $request-> title ;
        $fut -> body = $request -> body ;
        $fut -> save();
    }

    public function show( )
    {
        $futs = fut::onlyTrashed()-> get();
        return view ('fut.softDelete', compact ('futs')) ;
    }

    public function edit( $id)
    {
        $futs = Fut::findOrfail($id);
        return view ('fut.edit', compact('futs'));
    }

    public function update(fut_request $request,$id)
    {
        $futs = Fut::findOrfail ($id);
        $futs -> title = $request -> title ;
        $futs -> body = $request -> body ;
        $futs -> save();
        return redirect () -> route ('fut.index');
    }
    public function restore ($id ){
        Fut::onlyTrashed()-> where ('id', $id)-> restore();
        return redirect()->back();
    }

    public function destroy( $id)
    {
        $futs = fut::findOrFail($id)->delete();
        return redirect()->route('fut.index');
    }

    public function product ($id){

        $futs = fut::where('id', $id)-> first();
        return view ('fut.product', compact ('futs')) ;
    }
    //   function    forceDelete 
    public function forceDelete($id){
        $futs = fut::withTrashed()-> where('id', $id)-> forceDelete();
        return redirect()->back();
    }
}
