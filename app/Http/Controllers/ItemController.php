<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$items= Item::all();
        $items = Item::paginate(3);
        return view('Itemlist',compact('items'));
    }

    public function search(Request $request){
        
        $search = $request->get('search');
        $items = DB::table('items')->where('name','like','%'.$search.'%')->paginate(3);
        if($items){
        return view('Itemlist', compact('items'));
        }else{
            return redirect('/add-item')->with('message','Data Inserted Successfully');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-item');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item();
        $item->name = $request->name;
        $item->text = $request->text;
        $item->desc = $request->desc;
        $item->sell = $request->sell;
        $item->purchase = $request->purchase;
        $item->save();

        return redirect('/add-item')->with('message','Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = Item::find($id);
        return view('edit-item',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $item = Item::find($id);
        $item->name = $request->name;
        $item->text = $request->text;
        $item->desc = $request->desc;
        $item->sell = $request->sell;
        $item->purchase = $request->purchase;
        $item->save();

        return redirect('/add-item')->with('message','Data Inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $item = Item::find($id);
        $item->delete();
        return redirect('/add-item')->with('message','Data delete Successfully');
    }
}
