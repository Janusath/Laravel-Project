<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tblfloor;
use Illuminate\Http\Request;
use App\Http\Resources\TblfloorResource;

class TblfloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Tblfloor::all();
        return TblfloorResource::collection($posts);
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
        $posts = Tblfloor::create($request->all());
        
        return new TblfloorResource($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tblfloor  $tblfloor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Tblfloor::findOrFail($id);
        return new TblfloorResource($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tblfloor  $tblfloor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tblfloor $tblfloor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tblfloor  $tblfloor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tblfloor)
    {
        $request->validate([
            'Code'=>'required|max:191',
            'NameOF'=>'required|max:191',
            'IsActive'=>'required|max:191',
            'DescriptionOf'=>'required|max:191',
           

        ]);
        $produt=Tblfloor::findOrFail($tblfloor);
            
        $produt->Code=$request->input('Code');
        $produt->NameOF=$request->input('NameOF');
        $produt->IsActive=$request->input('IsActive');
        $produt->DescriptionOf=$request->input('DescriptionOf');
        $produt->save();
        return new TblfloorResource($produt);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tblfloor  $tblfloor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts=Tblfloor::findOrFail($id);
        if($posts->delete())
        {
         return new TblfloorResource($posts);
        }
    }
}
