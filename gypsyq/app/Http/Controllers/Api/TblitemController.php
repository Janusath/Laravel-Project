<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tblitem;
use Illuminate\Http\Request;
use App\Http\Resources\TblitemResource;

class TblitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Tblitem::all();
        // return TblitemResource::collection($posts);
        
        $data=Tblitem::all();
        return response()->json($data,200);
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

        $posts = Tblitem::create($request->all());
        return new TblitemResource($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tblitem  $tblitem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Tblitem::findOrFail($id);
        return new TblitemResource($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tblitem  $tblitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Tblitem $tblitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tblitem  $tblitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tblitem)
    {
        $request->validate([
            'Code'=>'required|max:191',
            'NameOF'=>'required|max:191',
            'SupplierID'=>'required|max:191',
            'CategoryID'=>'required|max:191',
            'ModelNo'=>'required|max:191',
            'SerialNo'=>'required|max:191',
            'BrandName'=>'required|max:191',
            'Cost'=>'required|max:191',
            'SellingPrice'=>'required|max:191',
            'WholeSalePrice'=>'required|max:191',
            'Discount'=>'required|max:191',
            'ProfitMargin'=>'required|max:191',
            'IsActive'=>'required|max:191',
            'BinID'=>'required|max:191',
            'ScaleID'=>'required|max:191',
            'ColorIDs'=>'required|max:191',
            'SizeIDs'=>'required|max:191',
            'SubCatId'=>'required|max:191',
            'SpecialCatId'=>'required|max:191',
            'sizeid'=>'required|max:191',
            'colorid'=>'required|max:191',
            'styleid'=>'required|max:191',
            'brandid'=>'required|max:191',
            'DisRate'=>'required|max:191',
            'VatRate'=>'required|max:191',
            'PackSize'=>'required|max:191',
            'ManufacturerID'=>'required|max:191',
            'Barcode'=>'required|max:191',
            'WarrantyPeriod'=>'required|max:191',
            'ImgPath'=>'required|max:191',
            'IsPrepItem'=>'required|max:191',
           

        ]);
        $produt=Tblitem::findOrFail($tblitem);
            
        $produt->Code=$request->input('Code');
        $produt->NameOF=$request->input('NameOF');
        $produt->SupplierID=$request->input('SupplierID');
        $produt->CategoryID=$request->input('CategoryID');
        $produt->ModelNo=$request->input('ModelNo');
        $produt->SerialNo=$request->input('SerialNo');
        $produt->BrandName=$request->input('BrandName');
        $produt->Cost=$request->input('Cost');
        $produt->SellingPrice=$request->input('SellingPrice');
        $produt->WholeSalePrice=$request->input('WholeSalePrice');
        $produt->Discount=$request->input('Discount');
        $produt->ProfitMargin=$request->input('ProfitMargin');
        $produt->IsActive=$request->input('IsActive');
        $produt->BinID=$request->input('BinID');
        $produt->ScaleID=$request->input('ScaleID');
        $produt->ColorIDs=$request->input('ColorIDs');
        $produt->SizeIDs=$request->input('SizeIDs');
        $produt->SubCatId=$request->input('SubCatId');
        $produt->SpecialCatId=$request->input('SpecialCatId');
        $produt->sizeid=$request->input('sizeid');
        $produt->colorid=$request->input('colorid');
        $produt->styleid=$request->input('styleid');
        $produt->brandid=$request->input('brandid');
        $produt->DisRate=$request->input('DisRate');
        $produt->VatRate=$request->input('VatRate');
        $produt->PackSize=$request->input('PackSize');
        $produt->ManufacturerID=$request->input('ManufacturerID');
        $produt->Barcode=$request->input('Barcode');
        $produt->WarrantyPeriod=$request->input('WarrantyPeriod');
        $produt->ImgPath=$request->input('ImgPath');
        $produt->IsPrepItem=$request->input('IsPrepItem');
        $produt->save();
        return new TblitemResource($produt);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tblitem  $tblitem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts=Tblitem::findOrFail($id);
        if($posts->delete())
        {
         return new TblitemResource($posts);
        }
    }
}
