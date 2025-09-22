<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script>
        $(document).ready(function () {
            $("#checkbox").change(function () {
                var bd = document.body;
                $("nav").toggleClass("bg-light");
                $("#home").toggleClass("text-dark");
                $("#about").toggleClass("text-dark");
                $("#contact").toggleClass("text-dark");


                $("#eco").toggleClass("text-white border-light");
                $("#mid").toggleClass("text-white border-light");
                $("#lux").toggleClass("text-white border-light");
                $("#van").toggleClass("text-white border-light");




                bd.classList.toggle("dark-mode");



            });

        });




    </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body  class="bg-dark text-dark" >
<nav class="navbar navbar-expand-lg bg-secondary border-warning sticky-top mb-3">
        <div class="container-fluid">
        <a class="navbar-brand text-warning" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-start flex-grow-1">
                    <li class="nav-item active">
                        <a class="nav-link btn btn-outline-warning mr-sm-2 mb-2 " href="{{url('home')}}" id="home">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-outline-warning mr-sm-2 mb-2 " href="Product" role="button" data-toggle="dropdown" aria-expanded="false">
                          Product
                        </a>
                        <div class="dropdown-menu" style="background-color:rgba(249, 242, 242, 0.256)">
                            @role('admin')
                          <a class="dropdown-item text-warning" href="p/create">Create</a>
                            @endrole
                          <a class="dropdown-item text-warning" href="Product.html">Rings</a>
                          <a class="dropdown-item text-warning" href="Product.html">Bracelets</a>
                          <a class="dropdown-item text-warning" href="Product.html">Earrings</a>
                        </div>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warning  mr-sm-2 mb-2 " href="AboutUs.html" id="about">About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warning  mr-sm-2 mb-3 " href="Contact.html"
                            id="contact">Contact us</a>
                    </li>
                </ul>
                <div class="mb-2 justify-content-end">

                    <a class="mr-3 text-light" href="https://www.facebook.com/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>

                    <a class="mr-3 text-light" href="https://www.instagram.com/" id="inst">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                    </a>

                    <a class="mr-3 text-light" href="https://web.whatsapp.com/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                    </a>
  


                    @guest
                    
                            @if (Route::has('login'))
                                
                                <a class="mr-3 text-light" href="{{ route('login') }}/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle text-success" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                   <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                   </svg>
                    </a>
                    
                                
                            @endif
                            @if (Route::has('register'))
                                
                                    <a class="mr-3 text-light" href="{{ route('register') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg>
                                    </a>
                                
                            @endif
                            @else
                            
                                <a id="navbarDropdown" class="mr-3 text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <a class="mr-3 text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
  
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
       
                                @endguest

                            
                        
                   
                </div>
                
            </div>
            <!--dark and light mode start -->
           
            <!--dark and light mode end-->

            <!--translate button start here-->
            <button class="bg-light rounded-circle border-warning mb-2" onclick="myLang()" id="click" >TR</button>
            
            <script>
                
                function myLang() {
                    var b = document.getElementById("click");
                    var x = document.getElementById("home");
                    var y = document.getElementById("about"); 
                    var z = document.getElementById("contact");
                    var e = document.getElementById("eco");
                    var m = document.getElementById("mid");
                    var l = document.getElementById("lux");
                    var v = document.getElementById("van");

                    var q = document.querySelectorAll('*[id^="rent"]');
                    
                    
                    
                    if (b.innerHTML === "TR") {
                        b.innerHTML = "EN";
                        x.innerHTML = "Home";
                        y.innerHTML = "About";
                        z.innerHTML = "Contact Us";
                        e.innerHTML = "Economic";
                        m.innerHTML = "Middle";
                        l.innerHTML = "Luxury";
                        v.innerHTML = "Van";


                        for(var i = 0; i< q.length; i++)
                        q.item(i).innerHTML = "Rent Now";

                    } else if (b.innerHTML = "EN") {
                        b.innerHTML = "TR";
                        x.innerHTML = "Anasayfa";
                        y.innerHTML = "Biz Kimiz";
                        z.innerHTML = "İletişim";
                        e.innerHTML = "Ekonomik";
                        m.innerHTML = "Orta";
                        l.innerHTML = "Lüks";
                        v.innerHTML = "Vip";

                        for(var i = 0; i< q.length; i++)
                        q.item(i).innerHTML = "Kirala";

                    }


                }

            </script>


            <!--translet button end here-->


            <button class="navbar-toggler bg-light text-warning" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
     

   






    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
