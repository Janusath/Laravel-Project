<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tblsalebriefkot;
use Illuminate\Http\Request;
use App\Http\Resources\TblsalebriefkotResource;

class TblsalebriefkotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Tblsalebriefkot::all();
        return TblsalebriefkotResource::collection($posts);
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
        $posts = Tblsalebriefkot::create($request->all());
        
        return new TblsalebriefkotResource($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tblsalebriefkot  $tblsalebriefkot
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Tblsalebriefkot::findOrFail($id);
        return new TblsalebriefkotResource($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tblsalebriefkot  $tblsalebriefkot
     * @return \Illuminate\Http\Response
     */
    public function edit(Tblsalebriefkot $tblsalebriefkot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tblsalebriefkot  $tblsalebriefkot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'DateOn'=>'required|max:191',
            'BillNo'=>'required|max:191',
            'CustID'=>'required|max:191',
            'Add1'=>'required|max:191',
            'Add2'=>'required|max:191',
            'City'=>'required|max:191',
            'Tp1'=>'required|max:191',
            'Tp2'=>'required|max:191',
            'Tp3'=>'required|max:191',
            'DescriptionOf'=>'required|max:191',
            'GrossTotal'=>'required|max:191',
            'NetTotal'=>'required|max:191',
            'CNAmount'=>'required|max:191',
            'TotalPaid'=>'required|max:191',
            'ManAmount'=>'required|max:191',
            'NetAmount'=>'required|max:191',
            'CashTendered'=>'required|max:191',
            'Balance'=>'required|max:191',
            'PerformedOn'=>'required|max:191',
            'UserID'=>'required|max:191',
            'UserName'=>'required|max:191',
            'CompID'=>'required|max:191',
            'CompName'=>'required|max:191',
            'IsDeleted'=>'required|max:191',
            'DelUserID'=>'required|max:191',
            'DelUserName'=>'required|max:191',
            'DelCompID'=>'required|max:191',
            'DelCompName'=>'required|max:191',
            'IsActive'=>'required|max:191',
            'DisRate'=>'required|max:191',
            'DisAmount'=>'required|max:191',
            'VatRate'=>'required|max:191',
            'VatAmount'=>'required|max:191',
            'StockRoomID'=>'required|max:191',
            'SystemRefNo'=>'required|max:191',
            'DueDate'=>'required|max:191',
            'CSHPaidOn'=>'required|max:191',
            'CHQPaidOn'=>'required|max:191',
            'CCSPaidOn'=>'required|max:191',
            'CREPaidOn'=>'required|max:191',
            'MOP'=>'required|max:191',
            'TranCode'=>'required|max:191',
            'NameOf'=>'required|max:191',
            'AdvanceAmount'=>'required|max:191',
            'DueAmount'=>'required|max:191',
            'RefundedAmount'=>'required|max:191',
            'IsPaused'=>'required|max:191',
            'WaiterID'=>'required|max:191',
            'TableID'=>'required|max:191',
            'IsSent'=>'required|max:191',
            'IsPreparing'=>'required|max:191',
            'IsReady'=>'required|max:191',
            'IsDelivered'=>'required|max:191',
            'MaxGuest'=>'required|max:191',

        ]);

            $produt=Tblsalebriefkot::findOrFail($id);
            
            $produt->DateOn=$request->input('DateOn');
            $produt->BillNo=$request->input('BillNo');
            $produt->CustID=$request->input('CustID');
            $produt->Add1=$request->input('Add1');
            $produt->Add2=$request->input('Add2');
            $produt->City=$request->input('City');
            $produt->Tp1=$request->input('Tp1');
            $produt->Tp2=$request->input('Tp2');
            $produt->Tp3=$request->input('Tp3');
            $produt->DescriptionOf=$request->input('DescriptionOf');
            $produt->GrossTotal=$request->input('GrossTotal');
            $produt->NetTotal=$request->input('NetTotal');
            $produt->CNAmount=$request->input('CNAmount');
            $produt->TotalPaid=$request->input('TotalPaid');
            $produt->ManAmount=$request->input('ManAmount');
            $produt->NetAmount=$request->input('NetAmount');
            $produt->CashTendered=$request->input('CashTendered');
            $produt->Balance=$request->input('Balance');
            $produt->PerformedOn=$request->input('PerformedOn');
            $produt->UserID=$request->input('UserID');
            $produt->UserName=$request->input('UserName');
            $produt->CompID=$request->input('CompID');
            $produt->CompName=$request->input('CompName');
            $produt->IsDeleted=$request->input('IsDeleted');
            $produt->DelUserID=$request->input('DelUserID');
            $produt->DelUserName=$request->input('DelUserName');
            $produt->DelCompID=$request->input('DelCompID');
            $produt->DelCompName=$request->input('DelCompName');
            $produt->IsActive=$request->input('IsActive');
            $produt->DisRate=$request->input('DisRate');
            $produt->DisAmount=$request->input('DisAmount');
            $produt->VatRate=$request->input('VatRate');
            $produt->VatAmount=$request->input('VatAmount');
            $produt->StockRoomID=$request->input('StockRoomID');
            $produt->SystemRefNo=$request->input('SystemRefNo');
            $produt->DueDate=$request->input('DueDate');
            $produt->CSHPaidOn=$request->input('CSHPaidOn');
            $produt->CHQPaidOn=$request->input('CHQPaidOn');
            $produt->CCSPaidOn=$request->input('CCSPaidOn');
            $produt->CREPaidOn=$request->input('CREPaidOn');
            $produt->MOP=$request->input('MOP');
            $produt->TranCode=$request->input('TranCode');
            $produt->NameOf=$request->input('NameOf');
            $produt->AdvanceAmount=$request->input('AdvanceAmount');
            $produt->DueAmount=$request->input('DueAmount');
            $produt->RefundedAmount=$request->input('RefundedAmount');
            $produt->IsPaused=$request->input('IsPaused');
            $produt->WaiterID=$request->input('WaiterID');
            $produt->TableID=$request->input('TableID');
            $produt->IsSent=$request->input('IsSent');
            $produt->IsPreparing=$request->input('IsPreparing');
            $produt->IsReady=$request->input('IsReady');
            $produt->IsDelivered=$request->input('IsDelivered');
            $produt->MaxGuest=$request->input('MaxGuest');
            $produt->save();
            return new TblsalebriefkotResource($produt);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tblsalebriefkot  $tblsalebriefkot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts=Tblsalebriefkot::findOrFail($id);
        if($posts->delete())
        {
         return new TblsalebriefkotResource($posts);
        }
    }
}
