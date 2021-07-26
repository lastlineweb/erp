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

    //    -------------- CONTROLLER FOR PRODUCT UNIT ------------
    public function unitStore(Request $request){
        $unit = new Unit();
        $unit->unit_name = $request->unit_name;
        $unit->company_id = company_id();
        $unit->save();
        return redirect()->back();
    }

    // Unit Edit
    public function unitEdit($id)
    {
        $units = Unit::find($id);
        if($units){
            return response()->json([
                'status'=>200,
                'units'=>$units,
            ]);
        }else {
            return response()->json([
                'status'=>404,
                'message'=>'Units Not Found',
            ]);
        }

    }
    //    unit Updated Data
    public function unitUpdate(Request $request){
        $id = $request->id;
        $unit = Unit::find($id);
        $unit->unit_name    = $request->unit_name;
        $unit->company_id   = company_id();
        $unit->save();
        return redirect()->back();
    }

    //    unit Deleted Data
    public function unitDelete(Request $request){

        $id = $request->id;
        if($id){
            $del = Unit::find($id);
            $del->delete();
            return redirect()->back();
        }else {
            return redirect()->back();
        }

    }

    //    -------------- CONTROLLER FOR PRODUCT BRAND ------------
    public function brandStore(Request $request){
        $brand = new Brand();
        $brand->band_name = $request->band_name;
        $brand->company_id = company_id();
        $brand->save();
        return redirect()->back();
    }

    //    -------------- CONTROLLER FOR PRODUCT CATEGORY START ------------

       // CATEGORY STORE
    public function categoryStore(Request $request){
        $category = new ProductCategory();
        $category->category_name = $request->category_name;
        $category->company_id = company_id();
        $category->save();
        return redirect()->back();
    }
       // CATEGORY EDIT
       public function categoryEdit($id)
       {
        // dd('con');
        $category = ProductCategory::find($id);
           if($category){
               return response()->json([
                   'status'=>200,
                   'category'=>$category,
               ]);
           }else {
               return response()->json([
                   'status'=>404,
                   'message'=>'Units Not Found',
               ]);
           }
   
       }
        // CATEGORY UPDATE
    public function categoryUpdate(Request $request){
        $id = $request->id;
        $category = ProductCategory::find($id);
        $category->category_name   = $request->category_name;
        $category->company_id   = company_id();
        $category->save();
        return redirect()->back();
    }
    public function categoryDelete(Request $request){
        $id = $request->id;
        if($id){
            $del = ProductCategory::find($id);
            $del->delete();
            return redirect()->back();
        }else {
            return redirect()->back();
        }

    }

    //    -------------- CONTROLLER FOR PRODUCT CATEGORY ENDS ------------

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
