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
<x-headerphi/>
<section>
 <div class="container">
     <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
               <div class="card-header">
                  Post posts
               </div> 
               <div class="card-body">
               @if(Session::has('post_updated'))
                        <div class="alert alert-success" role="alert">
                       {{Session::get('post_updated')}}
</div>
                        @endif
                
              <form method="POST" action="{{route('post.updatepq')}}">
                  @csrf
                  <input type="hidden" name="id" value="{{$post->id}}"/>

                  <div class="form-group">
                      <lable for="nic_no">NIC NO</lable>
                      <input type="" name="nic_no" class="form-control"  value="{{$post->nic_no}}"placeholder="Enter the NIC number"/>
                      @if ($errors->has('nic_no'))

<span class="text-danger">{{ $errors->first('nic_no') }}</span>

@endif
                   </div>
                
                  
                                    
                   <div class="form-group">
                      <lable for="fname">First Name</lable>
                      <input type="" name="fname" class="form-control" placeholder="Enter the First name"/>
                      @if ($errors->has('fname'))

<span class="text-danger">{{ $errors->first('fname') }}</span>

@endif


                   </div>
                   
                   
                   <div class="form_group">
                      <lable for="address">Address</lable>
                      <textarea class="form.control" name="address" rows="3">{{$post->address}}</textarea>
                      @if ($errors->has('address'))

<span class="text-danger">{{ $errors->first('address') }}</span>

@endif
                    </div>
                    <br>
                   <div class="form_group">
                      <lable for="age">Age</lable>
                      <input type="" name="age" class="form-control" value="{{$post->age}}">
                      
                      @if ($errors->has('age'))

<span class="text-danger">{{ $errors->first('age') }}</span>

@endif
                    </div>
<br>
<br>
                    <div class="form_group">
                    <lable for="gender">Gender</lable>
                    <select id="gender" name="gender" >
                    <option selected>{{$post->gender}}</option>
  <option value="Female">Female</option>
  <option value="Male">Male</option>
  <option value="other">Other</option>
</select>
      @if ($errors->has('gender'))

<span class="text-danger">{{ $errors->first('gender') }}</span>

@endif
                    </div>

                       <br>
                    <br>
                    
                    <div class="form_group">
                      <lable for="date1">Start Date</lable>
                      <input type="date" name="date1" class="form-control" placeholder="Enter the start date"/>
                      @if ($errors->has('date1'))

<span class="text-danger">{{ $errors->first('date1') }}</span>

@endif

                    </div>
                    <div class="form_group">
                      <lable for="date2">End Date</lable>
                      <input type="date" name="date2" class="form-control" placeholder="Enter the end date"/>
                      @if ($errors->has('date2'))

<span class="text-danger">{{ $errors->first('date2') }}</span>

@endif

                    </div>

                    
                    <br>
                    <br>
                    
                    <div class="form_group">
                    <lable for="status">status</lable>
                    <select id="result" name="result">
        <option value="Quarantine period ">Under Quarantine</option>
        <option value="Released ">Released</option>
        
      </select>
      @if ($errors->has('status'))

<span class="text-danger">{{ $errors->first('status') }}</span>

@endif

                    </div>
                    <br>
                    <br>

             
                      <input type="submit" class="btn btn-success" value="update" />
                 
              </form>
              </div>
            </div>
        </div>
     </div>
     <div>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>
</html>