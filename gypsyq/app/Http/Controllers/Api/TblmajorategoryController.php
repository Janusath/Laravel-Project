<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tblmajorcategory;
use Illuminate\Http\Request;
use App\Http\Resources\TblmajorcategoryResource;

class TblmajorategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Tblmajorcategory::all();
        return TblmajorcategoryResource::collection($posts);
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
        
       
         $posts=new Tblmajorcategory();
         $posts->Code=$request->Code;
         $posts->NameOF=$request->NameOF;
         $posts->IsActive=$request->IsActive;
         $posts->DescriptionOf=$request->DescriptionOf;
         $posts->ImgPath=$request->ImgPath;
         $posts->save();
         return new TblmajorcategoryResource($posts);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tblmajorcategory  $tblmajorcategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Tblmajorcategory::findOrFail($id);
        return new TblmajorcategoryResource($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tblmajorcategory  $tblmajorcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Tblmajorcategory $tblmajorcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tblmajorcategory  $tblmajorcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tblmajorcategory)
    {
        $request->validate([
            'Code'=>'required|max:191',
            'NameOF'=>'required|max:191',
            'IsActive'=>'required|max:191',
            'DescriptionOf'=>'required|max:191',
            'ImgPath'=>'required|max:191',

        ]);

            $produt=Tblmajorcategory::findOrFail($tblmajorcategory);
            
            $produt->Code=$request->input('Code');
            $produt->NameOF=$request->input('NameOF');
            $produt->IsActive=$request->input('IsActive');
            $produt->DescriptionOf=$request->input('DescriptionOf');
            $produt->ImgPath=$request->input('ImgPath');
            $produt->save();
            return new TblmajorcategoryResource($produt);

           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tblmajorcategory  $tblmajorcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts=Tblmajorcategory::findOrFail($id);
        if($posts->delete())
        {
         return new TblmajorcategoryResource($posts);
        }
    }
}
