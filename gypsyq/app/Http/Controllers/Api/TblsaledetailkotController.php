<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tblsaledetailkot;
use Illuminate\Http\Request;
use App\Http\Resources\TblsaledetailkotResource;

class TblsaledetailkotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Tblsaledetailkot::all();
        return TblsaledetailkotResource::collection($posts);
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
        $request->validate([
            'ItemId'=>'required|max:191',
            'SQty'=>'required|max:191',
            'FreeQty'=>'required|max:191',
            'UnitPrice'=>'required|max:191',
            'TotalAmount'=>'required|max:191',
            'Selling'=>'required|max:191',
            'Cost'=>'required|max:191',
            'LineDis'=>'required|max:191',
            'LineDisAmount'=>'required|max:191',
            'LineVatRate'=>'required|max:191',
            'LineVatAmount'=>'required|max:191',
            'IsReturn'=>'required|max:191',
            'CostOfSale'=>'required|max:191',
            'BriefID'=>'required|max:191',
            'SerialNo'=>'required|max:191',

        ]);
        $posts = Tblsaledetailkot::create($request->all());
        
        return new TblsaledetailkotResource($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tblsaledetailkot  $tblsaledetailkot
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Tblsaledetailkot::findOrFail($id);
        return new TblsaledetailkotResource($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tblsaledetailkot  $tblsaledetailkot
     * @return \Illuminate\Http\Response
     */
    public function edit(Tblsaledetailkot $tblsaledetailkot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tblsaledetailkot  $tblsaledetailkot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $tblsaledetailkot)
    {
        $request->validate([
            'ItemId'=>'required|max:191',
            'SQty'=>'required|max:191',
            'FreeQty'=>'required|max:191',
            'UnitPrice'=>'required|max:191',
            'TotalAmount'=>'required|max:191',
            'Selling'=>'required|max:191',
            'Cost'=>'required|max:191',
            'LineDis'=>'required|max:191',
            'LineDisAmount'=>'required|max:191',
            'LineVatRate'=>'required|max:191',
            'LineVatAmount'=>'required|max:191',
            'IsReturn'=>'required|max:191',
            'CostOfSale'=>'required|max:191',
            'BriefID'=>'required|max:191',
            'SerialNo'=>'required|max:191',

        ]);

            $produt=Tblsaledetailkot::findOrFail($tblsaledetailkot);
            
            $produt->ItemId=$request->input('ItemId');
            $produt->SQty=$request->input('SQty');
            $produt->FreeQty=$request->input('FreeQty');
            $produt->UnitPrice=$request->input('UnitPrice');
            $produt->TotalAmount=$request->input('TotalAmount');
            $produt->Selling=$request->input('Selling');
            $produt->Cost=$request->input('Cost');
            $produt->LineDis=$request->input('LineDis');
            $produt->LineDisAmount=$request->input('LineDisAmount');
            $produt->LineVatRate=$request->input('LineVatRate');
            $produt->LineVatAmount=$request->input('LineVatAmount');
            $produt->IsReturn=$request->input('IsReturn');
            $produt->CostOfSale=$request->input('CostOfSale');
            $produt->BriefID=$request->input('BriefID');
            $produt->SerialNo=$request->input('SerialNo');
            $produt->save();
            return new TblsaledetailkotResource($produt);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tblsaledetailkot  $tblsaledetailkot
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $posts=Tblsaledetailkot::findOrFail($id);
        if($posts->delete())
        {
         return new TblsaledetailkotResource($posts);
        }
    }
}
