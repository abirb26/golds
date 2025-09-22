@extends('layouts.app')
@section('content')

<body style="background-image: url('images/bg.jpg'); background-repeat: no-repeat; 
            background-attachment:fixed; background-size:cover ; background-position: center;">
            
  

    <script>
        $(document).ready(function () {
            $("#aa").click(function () {
                var div = $("a");
                div.animate({ fontSize: '2em' }, "2500");
                $("#aa").animate({
                   
                    opacity: '0',
                    
                    
                });
                setTimeout(() => {
                  //  location.assign(url='Home.html')//
                }, 800);
                
                
            });
        });
    </script>

    <center>
        <h1 class="font-italic" style="color:gold; margin-top: 10%;">Shine Here</h1>



        <a id="aa" href="{{url('/home')}}" class="btn btn-outline-warning  rounded-pill" style="margin-top: 250px"><b>Shop Now</b></a>




    </center>












    <div class="w-100 text-center text-light font-weight-bold fixed-bottom mb-3" style="font-size: 10px;"> Copyright
        2024 by Abir baneh </div>

        @stop


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>