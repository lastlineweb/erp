<?php

namespace App\Http\Controllers\sales\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sales\products\settings\Brand;
use App\Models\sales\products\settings\ProductCategory;
use App\Models\sales\products\settings\Unit;


class ProductSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['brands'] = Brand::all();
        $data['productcategories'] = ProductCategory::all();
        $data['units'] = Unit::all();
        return view('backend/sales/products/settings/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function unitStore(Request $request){
       $unit = new Unit();
       $unit->unit_name = $request->unit_name;
       $unit->company_id = company_id();
       $unit->save();
       return redirect()->back();
    }
    public function unitEdit(Request $request,$id)
    {
        $unit = Unit::where("id",$id)->where("company_id",company_id())->first();

		if(! $request->ajax()){
            return view('backend/sales/products/settings/modal.edit', compact('unit','id'));
		}else{
           return view('backend.accounting.product.modal.edit',compact('item','id'));
          

		}  
        
    }
    public function unitDelete($id){
      $del = Unit::find($id);
      $del->delete();
      return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
