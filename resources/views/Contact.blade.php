@extends('layouts.app')
@section('content')


<body class="bg-dark text-light" >
            
   

      
      <br>

      <div class="container">
        

        <div class="container">
          <div class="row">
            <div class="col-sm-8">
          
                
              <form class="was-validated" method="POST" enctype="multipart/form-data" action="{{action('App\Http\Controllers\NewgoldController@store')}}">
  
                @csrf
                
                <div class="form-row mt-4">
                  <div class="col-sm mb-3">
                    <input type="text" class="form-control" name="name" placeholder="name" required>
                    
                  </div>
                  <div class="col-sm mb-3">
                    <input type="text" class="form-control"  name="type" placeholder="type" required>
                    
                  </div>
                  <div class="col-sm mb-3">
                    <input type="number" class="form-control" name="karat" placeholder="karat" required>
                    
                  </div>
                  <div class="col-sm mb-3">
                    <input type="text" class="form-control" name="grams" placeholder="grams" required>
                    
                  </div>
                </div>
                <div class="form-row mt-4">
                  <div class="col-sm mb-3">
                    <input type="text" class="form-control" name="thickness" placeholder="thickness" required>
                    
                  </div>
                  <div class="col-sm mb-3">
                    <input type="text" class="form-control" name="color"placeholder="color" required>
                    
                  </div>
                  <div class="col-sm mb-3">
                    <input type="text" class="form-control" name="certificate"placeholder="certificate" required>
                    
                  </div>
                  <div class="col-sm mb-3">
                    <input type="text" class="form-control" name="price"placeholder="price" required>
                    
                  </div>
                </div>


                <div class="col-sm mb-3 bg-light">
                <input type="file" class="custom-file-input bg" name="image"  aria-describedby="inputGroupFileAddon04">
                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
              </div>
                 <button type="submit" class="btn btn-success mt-3 px-5 float-left" id="sub" href="{{url('/p')}}">Submit</button>
              </form>
              
            </div>

            <div class="col-sm-4">
              <iframe class="rounded w-100 my-4"
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24070.556220632625!2d28.962359776976957!3d41.051075565877795!2m3!1f0!2f0!3f0
              !3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab70ea4f4fb91%3A0xeae702be0d061895!2zQ2l0eSdzIE5pxZ9hbnRhxZ_EsQ!5e0!3m2!1str!2str!4v1714291784429!5m2!1str!2str" 
              width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
          </div>
        </div>


      </div>
     








      <div class="w-100 text-center font-weight-bold mt-4" style="font-size: 10px; bottom: 0; position: fixed;"> Copyright 2024 by AMR ALSEBAI </div>
       @stop
  

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>