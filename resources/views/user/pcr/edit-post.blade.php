
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corona</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>
<body>
<x-header/>
<section>
 <div class="container">
     <div class="row">
     <div  style="background-image:url({{url('/images/pcrtest.jpg')}}); height:600px; width:1500px; ">
        <div class="col-md-6 offset-md-3">
            <div class="card" style="margin-top:50px;">
               <div class="card-header bg-info" >
<h1>PCR Testing Appointment </h1>
               </div> 
               <div class="card-body">
               @if(Session::has('post_updated'))
                        <div class="alert alert-success" role="alert">
                       {{Session::get('post_updated')}}
</div>
                        @endif
                
              <form method="POST" action="{{route('post.updatepcr')}}">
                  @csrf
                  <input type="hidden" name="id" value="{{$post->id}}"/>

                  <div class="form_group">
                      <lable for="date">Date</lable>
                      <input type="date" id="date" name="date" value="{{$post->date}}">
                      <style type="text/css">
  input[name=date] {
    pointer-events: none;
   }
 </style>
                      </div>
                      <br>
                  <div class="form-group">
                      <lable for="time_slot">Time</lable>
                      <input type="text"name="time_slot" class="form-control" value="{{$post->time_slot}}">
                      <style type="text/css">
  input[name=time_slot] {
    pointer-events: none;
   }
 </style>

                   </div>

                  
                  <div class="form-group">
                      <lable for="place">Testing place</lable>
                      <input type="text" name="place" class="form-control" value="{{$post->place}}">
                      <style type="text/css">
  input[name=place] {
    pointer-events: none;
   }
 </style>

                  </div>

                

                  <div class="form-group">
                      <lable for="pcr_id">ID</lable>
                      <input type="text" name="pcr_id" class="form-control" placeholder="Enter your PCR ID"/>
                      @if ($errors->has('pcr_id'))

<span class="text-danger">{{ $errors->first('pcr_id') }}</span>

@endif
</div>
<br>
<br>
                  
                      

               

             
                      <input type="submit" class="btn btn-info" value="Book" />
                 
              </form>
              </div>
            </div>
        </div>
     </div>
</div>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>
</html>