@extends('layouts.app')
@section('content')
    

    <div class="container mt-3 ">



        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/storeee.jpg" class="d-block w-100 rounded-pill" style="height: 400px;"
                        alt="family trip">
                    <div class="carousel-caption">
                        <h3 class="text-dark font-italic" style="margin-bottom: 290px;"><b>Gold's Home</b></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/hands.jpg" class="d-block w-100 rounded-pill" style="height: 400px;"
                        alt="...">
                    <div class="carousel-caption active">
                        <h5 class="text-warning font-italic" style="margin-bottom: 310px;">Choose your Style</h5>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/cart.jpg" class="d-block w-100 rounded-pill" style="height: 400px;"
                        alt="...">
                    <div class="carousel-caption active">
                        <h4>Special Discounts</h4>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
        <script>
            $(document).ready(function () {
                $("#nec").click(function () {
                    $("#row1").show();
                    $("#row2").hide();
                    $("#row3").hide();
                    $("#row4").hide();
                });
                $("#ring").click(function () {
                    $("#row2").show();
                    $("#row1").hide();
                    $("#row3").hide();
                    $("#row4").hide();

                });
                $("#bra").click(function () {
                    $("#row3").show();
                    $("#row1").hide();
                    $("#row2").hide();
                    $("#row4").hide();

                });
                $("#ear").click(function () {
                    $("#row4").show();
                    $("#row1").hide();
                    $("#row2").hide();
                    $("#row3").hide();

                });

            });

        </script>
        <br>
        <h1 class="text-warning text-center my-4">Our Gold JEWELLERY</h1>
        <hr class="border border-secondary w-50 mb-5">
        <div class="ml-5">
            <button class="btn btn-outline-warning mr-1 rounded-pill" id="nec">Necklace</button>
            <button class="btn btn-outline-warning mr-1 rounded-pill" id="ring">Rings</button>
            <button class="btn btn-outline-warning mr-1 rounded-pill" id="bra">Bracelets</button>
            <button class="btn btn-outline-warning mr-1 rounded-pill" id="ear">Earrings</button>
        </div>

                        <!--product cards Start here-->
      
























    </div>

































    <div class="w-100 text-center font-weight-bold sticky-bottom" style="font-size: 10px;"><span
            class="copyright text-light" >Copyright 2024 by Abir baneh</span> </div>


            @stop