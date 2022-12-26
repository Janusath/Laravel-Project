<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tblsubcategory;
use Illuminate\Http\Request;
use App\Http\Resources\TblsubcategoryResource;

class TblsubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Tblsubcategory::all();
        return TblsubcategoryResource::collection($posts);
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
        $posts = Tblsubcategory::create($request->all());
        
        return new TblsubcategoryResource($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tblsubcategory  $tblsubcategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Tblsubcategory::findOrFail($id);
        return new TblsubcategoryResource($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tblsubcategory  $tblsubcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Tblsubcategory $tblsubcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tblsubcategory  $tblsubcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tblsubcategory)
    {
        $request->validate([
            'Code'=>'required|max:191',
            'NameOF'=>'required|max:191',
            'IsActive'=>'required|max:191',
            'DescriptionOf'=>'required|max:191',
           

        ]);
        $produt=Tblsubcategory::findOrFail($tblsubcategory);
            
        $produt->Code=$request->input('Code');
        $produt->NameOF=$request->input('NameOF');
        $produt->IsActive=$request->input('IsActive');
        $produt->DescriptionOf=$request->input('DescriptionOf');
        $produt->save();
        return new TblsubcategoryResource($produt);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tblsubcategory  $tblsubcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts=Tblsubcategory::findOrFail($id);
        if($posts->delete())
        {
         return new TblsubcategoryResource($posts);
        }
    }
}
