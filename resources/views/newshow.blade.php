@extends('layouts.app')
@section('content')
    
        <h1 class="text-warning text-center">Our Gold JEWELLERY</h1>
        <br>
    <div>
        <ul class="items">

            <li class="item home">
                
                <a href="../Home.html" title="Go to Home Page"> Home </a> <span> >  </span>
                <a href="" title=""> Gold Necklaces  </a> <span> >  </span>
                <strong>Real Gold Compass Star Necklace 1235-YM CWP 1921</strong>
                <hr class="border-secondary w-75 ml-5">
                
            </li>
        
        </ul>

        <div class="container-fluid my-4">
            <div class="row">
                <div class="cols-sm-5 my-4 ml-5">
                 
                    <h4 class="card-title mb-4">{{$ng->name}}</h4>
              
                    <div class="card rounded-lg" style="width: 30rem; box-shadow: 0px 0px 10px 5px gold;">
                        <img src="{{asset('storage/'. $ng->image)}}" class="card-img-top rounded-lg">
                        
                     </div>
            </div>
                <div class="col-sm-7 my-4 text-light">
                    
                    <h4 class="ml-5 mt-5 "><u> Details :</u></h4>
                    <ul class="ml-5 mt-4">
                        
                        <li class="mt-2">  Jewelry Material: {{$ng->type}} </li>
                        <li class="mt-2"> Karat:  {{$ng->karat}}k</li>
                        <li class="mt-2">  Grams: {{$ng->grams}}G</li>
                        <li class="mt-2"> Thickness: {{$ng->thickness}} m.m</li>
                        <li class="mt-2">  Packing: In wooden box</li>
                        <li class="mt-2">  Color:{{$ng->color}}   </li>
                        <li class="mt-2">  Certificate:  {{$ng->certificate}}</li>
                        <li class="mt-2">  price:  {{$ng->price}}</li>
                        <li class="mt-2">  EX  price:  {{$ng->grams*100}}</li>
                        <li class="mt-2">  Created AT:  {{$ng->created_at->diffForhumans()}}</li>
                        <li class="mt-2">  Updated AT:  {{$ng->updated_at->diffForhumans()}}</li>
                    </ul>
                    <a type="button" href="https://wa.me/+905346777826?text= {{$ng->name}} هل يمكنني الحصول علي معلومات  عن هذا المنتج" class="btn btn-success ml-5 mt-5 btn-lg">Send Message!!</a>
                    <button type="button" class="btn btn-lg  ml-5 mt-5 "  style="color: gold;  box-shadow: 0px 0px 10px 5px gold;"disabled> {{($ng->price) +($ng->grams*100)}} TL</button>
                    @auth
                        
                 @role('adminiii')
                   <a href="/gs/public/p/{{$ng->id}}/edit"class="btn btn-info ml-5 mt-5 btn-lg">Edit</a>
                   @endrole
                   @endauth
                </div>
            </div>  
            @auth
            @role('adminii')
            <center>
                <form method="POST" action="{{action('App\Http\Controllers\NewgoldController@destroy',$ng->id )}}">
                    @csrf
                    @method('Delete')
           <button type="submit" class="btn btn-danger ml-5 mt-5 btn-lg">Delete</button>
        </form>
            </center>
            @endrole
            @endauth
        </div>
  @stop