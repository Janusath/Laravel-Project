<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tbllastid;
use Illuminate\Http\Request;
use App\Http\Resources\TbllastidResource;


class TbllastidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Tbllastid::all();
        return TbllastidResource::collection($posts);
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
        $posts = Tbllastid::create($request->all());
        
        return new TbllastidResource($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tbllastid  $tbllastid
     * @return \Illuminate\Http\Response
     */
    public function show($id) //this will search particular id
    {
        $posts=Tbllastid::findOrFail($id);
        return new TbllastidResource($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tbllastid  $tbllastid
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbllastid $tbllastid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tbllastid  $tbllastid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'LastID'=>'required|max:191',
            'TranCode'=>'required|max:191',
            'CompID'=>'required|max:191',
            

        ]);

            $produt=Tbllastid::findOrFail($id);
            
            $produt->LastID=$request->input('LastID');
            $produt->TranCode=$request->input('TranCode');
            $produt->CompID=$request->input('CompID');
           
            $produt->save();
            return new TbllastidResource($produt);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tbllastid  $tbllastid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts=Tbllastid::findOrFail($id);
        if($posts->delete())
        {
         return new TbllastidResource($posts);
        }
    }
}
