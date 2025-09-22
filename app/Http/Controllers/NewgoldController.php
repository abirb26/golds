<?php

namespace App\Http\Controllers;

use App\Models\Newgold;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;

class NewgoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $newgolds=Newgold::all();
       $newgolds=Newgold::orderBy('id','DESC')->get();

       return view('Product',compact('newgolds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Newgold::create([
            'name'=> $request->name,
            'type'=> $request->type,
            'karat'=> $request->karat,
            'grams'=> $request->grams,
            'thickness'=> $request->thickness,
            'color'=> $request->color,
            'certificate'=> $request->certificate,
            'price'=> $request->price,
            'image'=> $request->image->store('image','public')
            

        ]);

        return redirect('p');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newgold  $newgold
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ng=Newgold::find($id);
        return view('newshow',compact('ng'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newgold  $newgold
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eng=Newgold::find($id);
        return view('newedit',compact('eng'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newgold  $newgold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $ngup=Newgold::find($id);

        $ngup->name=$request->input('name');
        $ngup->type=$request->input('type');
        $ngup->karat=$request->input('karat');
        $ngup->grams=$request->input('grams');
        $ngup->thickness=$request->input('thickness');
        $ngup->color=$request->input('color');
        $ngup->certificate=$request->input('certificate');
        $ngup->price=$request->input('price');
        if($request->hasFile('image'))
        {
            Storage::delete('public/'. $ngup->image);
            $image=$request->file('image');
            $imageName=time().'.'.
            $image->getClientOriginalExtension();
            $image->StoreAs('public/image', $imageName);
            $ngup->image='image/'.$imageName;


        }
         else{
            $ngup->image=$ngup->image;

         }

         $ngup->save();
         return redirect('p');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newgold  $newgold
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ngdel=Newgold::find($id);
        $ngdel->delete();
        return redirect('p');
    }
}
