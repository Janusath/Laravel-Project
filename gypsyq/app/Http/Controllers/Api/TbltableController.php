<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tbltable;
use Illuminate\Http\Request;
use App\Http\Resources\TbltableResource;

class TbltableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Tbltable::all();
        return TbltableResource::collection($posts);
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
        $posts = Tbltable::create($request->all());
        
        return new TbltableResource($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tbltable  $tbltable
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Tbltable::findOrFail($id);
        return new TbltableResource($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tbltable  $tbltable
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbltable $tbltable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tbltable  $tbltable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tbltable)
    {
        $request->validate([
            'Code'=>'required|max:191',
            'NameOF'=>'required|max:191',
            'IsActive'=>'required|max:191',
            'DescriptionOf'=>'required|max:191',
            'AreaId'=>'required|max:191',
            'MaximumSeats'=>'required|max:191',
           

        ]);
        $produt=Tbltable::findOrFail($tbltable);
            
        $produt->Code=$request->input('Code');
        $produt->NameOF=$request->input('NameOF');
        $produt->IsActive=$request->input('IsActive');
        $produt->DescriptionOf=$request->input('DescriptionOf');
        $produt->AreaId=$request->input('AreaId');
        $produt->MaximumSeats=$request->input('MaximumSeats');
        $produt->save();
        return new TbltableResource($produt);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tbltable  $tbltable
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts=Tbltable::findOrFail($id);
        if($posts->delete())
        {
         return new TbltableResource($posts);
        }
    }
}
