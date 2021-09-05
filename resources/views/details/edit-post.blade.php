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
                
              <form method="POST" action="{{route('post.update')}}">
                  @csrf
                  <input type="hidden" name="id" value="{{$post->id}}"/>
                
                  <div class="form-group">
                      <lable for="fname">First Name</lable>
                      <input type="text" name="Fname" class="form-control" value="{{$post->Fname}}" placeholder="Enter the first name"/>
                      @if ($errors->has('Fname'))

<span class="text-danger">{{ $errors->first('Fname') }}</span>

@endif
                  </div>
                  <div class="form-group">
                      <lable for="lname">Last Name</lable>
                      <input type="text" name="lname" class="form-control" value="{{$post->lname}}" placeholder="Enter the last name"/>
                      @if ($errors->has('lname'))

<span class="text-danger">{{ $errors->first('lname') }}</span>

@endif
                   </div>
                   <div class="form-group">
                      <lable for="nic_no">NIC Number</lable>
                      <input type="" name="nic_no" class="form-control"  value="{{$post->nic_no}}"placeholder="Enter the NIC number"/>
                      @if ($errors->has('nic_no'))

<span class="text-danger">{{ $errors->first('nic_no') }}</span>

@endif
                   </div>
                   <div class="form_group">
                      <lable for="dob">Date of birth</lable>
                      <input type="date" id="date" name="dob" value="{{$post->dob}}">
                      @if ($errors->has('dob'))

<span class="text-danger">{{ $errors->first('dob') }}</span>

@endif
                    </div>

                    <div class="form_group">
                    <select id="gender" name="gender">
        <option value="{{$post->gender}}">Female</option>
        <option value="{{$post->gender}}">Male</option>
        <option value="{{$post->gender}}">Other</option>
      </select>
      @if ($errors->has('gender'))

<span class="text-danger">{{ $errors->first('gender') }}</span>

@endif
                    </div>
                    

                    <div class="form_group">
                      <lable for="adress">Address</lable>
                      <textarea class="form.control" name="address" rows="3">{{$post->address}}</textarea>
                      @if ($errors->has('address'))

<span class="text-danger">{{ $errors->first('address') }}</span>

@endif
                    </div>
             
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