<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = ProductModel::paginate(2);
       // dd($list);
        return view("store.product.listing")->with("list",$list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("store.product.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            "name" => "required|Min:5",
            "price" => "required|unique:App\Models\ProductModel",
            "qty" => "required"
        ]);
        //dd($request->all());
        //dd($request->input());
        //dd($request->input("name"));

        $p = new ProductModel();
        $p->name = $request->name;
        $p->price = $request->price;
        $p->qty  = $request->qty;
        $p->img = "";

        $p->save();

        return redirect("store/product"); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = ProductModel::where("id",$id)->get();
        return view("store.product.listing")->with("list",$list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req,$id)
    {
        $obj = ProductModel::find($id);
        if($req->delete == 1 )
        {   
            return view("store.product.preview")->with("obj",$obj);
        }
        else
        {
            return view("store.product.edit")->with("obj",$obj);
        }
        
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
        $p = ProductModel::find($id);

        $p->name = $request->name;
        $p->price = $request->price;
        $p->qty = $request->qty;
        $p->save();
        return redirect("store/product"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        (ProductModel::find($id))->delete();
        return redirect("store/product"); 
    }
}
