<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FullItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FullItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        return view('nav.category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function itemsform()
    {
        return view('admin.itemsform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function itemsstore(Request $request)
    {
        $request->validate([
            'image.*' => 'required|image|max:2048',
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);

        $iname = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $iname);
        FullItems::create([
            'filename' => $iname,
            'path' => $path,
            'name' => $request['name'],
            'category' => $request['category'],
            'price' => $request['price']
        ]);
        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FullItems  $fullItems
     * @return \Illuminate\Http\Response
     */
    public function itemshow(FullItems $items)
    {
        $items = FullItems::all();
        return view('admin.itemshow', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FullItems  $fullItems
     * @return \Illuminate\Http\Response
     */



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FullItems  $fullItems
     * @return \Illuminate\Http\Response
     */

    public function itemedit(Request $request, FullItems $fullItems, $id)
    {
        $items = FullItems::find($id);
        return view('admin.itemedit', compact('items'));
    }

    public function itemupdate(Request $request, FullItems $fullItems,$id)
    {
        $items = FullItems::find($id);
        $items->name = $request->get('name');
        $items->category = $request->get('category');
        $items->price = $request->get('price');
        $items->filename = $request->file('image')->getClientOriginalName();
        $items->path = $request->file('image')->storeAs('images', $items->filename);
        $items->update();

        return redirect('/itemshow')->with('success', 'Database Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FullItems  $fullItems
     * @return \Illuminate\Http\Response
     */
    public function itemsdestroy(FullItems $items, $id)
    {
        $items = FullItems::find($id);
        $items->delete($id);
        return back()->with('success', 'Image deleted');
    }

    // public function filterProduct(Request $request)
    // {
    //     $query = FullItems::query();
    //     $categories = Category::all();

    //     if($request->ajax()){
    //         if(empty($request->category)){
    //             $products = $query->get();
    //         }
    //         else{
    //             $products = $query->where(['category_id'=>$request->category])->get();

    //         }
    //                 return response()->json(['products'=>$products]);
    //             }

    //     $products = $query->get();
    //     return view('ajax_filter.products',compact('products','categories'));
    // }
}
