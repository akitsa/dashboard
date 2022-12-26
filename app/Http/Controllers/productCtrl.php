<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
class productCtrl extends Controller
{
    //
    public function getData()
    {   
        $datas = products::join('categories','categories.id_cat','=','products.id_cat')->get();
        // dd($datas);
        $data = [
            'data'=>$datas
        ];
        return view('product.data',$data);
    }

    public function form()
    {
        $kategori = categories::get();
        return view('product.form',['kategori'=>$kategori]);
    }

    public function createData(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'prod_id'=>'required',
                'nm_prod'=>'required',
                'id_cat'=>'required',
                'harga'=>'required',
                'status'=>'required',
            ]
            );
        products::create($request->all());
        return redirect('/product');
    }
    public function destroy ($id_prod)
    {
        $data = products::where('id_prod',$id_prod)->first();
        $data->delete();
        return redirect('/product');
    }
}
