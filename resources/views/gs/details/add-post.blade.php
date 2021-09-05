<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corona</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<x-headergs/>
<section>
 <div class="container">
     <div class="row">
        <div class="col-md-12 " >
            <div class="card">
               <div class="card-header">
                   Add new Detail
               </div> 
               
                   @if (Session::has('post_created'))
                   <div class="alert alert-success" role="alert">
                       {{Session::get('post_created')}}
</div>
                   @endif
              <form method="POST" action="{{route('post.addsubmit')}}" style="padding:50px;">
                  @csrf

                  <div class="form-group">
                      <lable for="nic_no">NIC Number</lable>
                      <input type="" name="nic_no" class="form-control" placeholder="Enter the NIC number"/>
                      @if ($errors->has('nic_no'))

<span class="text-danger">{{ $errors->first('nic_no') }}</span>

@endif

                   </div>
                  <div class="form-group">
                      <lable for="fname">First Name</lable>
                      <input type="text" name="fname" class="form-control" placeholder="Enter the first name"/>
                      @if ($errors->has('fname'))

<span class="text-danger">{{ $errors->first('fname') }}</span>

@endif

                  </div>
                  <div class="form-group">
                      <lable for="lname">Last Name</lable>
                      <input type="text" name="lname" class="form-control" placeholder="Enter the last name"/>
                      @if ($errors->has('lname'))

<span class="text-danger">{{ $errors->first('lname') }}</span>

@endif

                   </div>
                   <div class="form-group">
                      <lable for="email">E-mail</lable>
                      <input type="" name="email" class="form-control" placeholder="Enter the email address"/>
                      @if ($errors->has('email'))

<span class="text-danger">{{ $errors->first('email') }}</span>

@endif

                   </div>
                   <div class="form_group">
                      <lable for="adress">Address</lable>
                    
                      <input type="" name="address" class="form-control" placeholder="Enter the NIC number"/>
                      @if ($errors->has('address'))

<span class="text-danger">{{ $errors->first('address') }}</span>

@endif

                    </div>
                   <div class="form_group">
                      <lable for="age">Age</lable>
                      <input type="" name="age" class="form-control" placeholder="Enter the age"/>
                      @if ($errors->has('age'))

<span class="text-danger">{{ $errors->first('age') }}</span>

@endif

                    </div>
              
                   

                    <br>
                    <br>
                    <div class="form_group">
                    <lable for="gender">Gender</lable>
                    <select id="gender" name="gender">
        <option value="Female">Female</option>
        <option value="Male">Male</option>
        <option value="Other">Other</option>
      </select>
      @if ($errors->has('gender'))

<span class="text-danger">{{ $errors->first('gender') }}</span>

@endif

                    </div>
                    <br>
                    <br>
                    
                    <div class="form_group">
                    <lable for="v1">First Vaccination</lable>
                    <select id="v1" name="v1">
        <option value="Not vaccinated ">Not vaccinated </option>
        <option value="vaccinated ">vaccinated </option>
        
      </select>
      @if ($errors->has('v1'))

<span class="text-danger">{{ $errors->first('v1') }}</span>

@endif

                    </div>
                    <br>
                    <br>
                    <div class="form_group">
                    <lable for="v2">First Vaccination</lable>
                    <select id="v2" name="v2">
        <option value="Not vaccinated ">Not vaccinated </option>
        <option value="vaccinated ">vaccinated </option>
        
      </select>
      @if ($errors->has('v2'))

<span class="text-danger">{{ $errors->first('v2') }}</span>

@endif

                    </div>
                    
                    <br>
                    <br>
                      <input type="submit" class="btn-success"value="submit" />
                 
              </form>
              </div>
            </div>
        </div>
     </div>
     <div>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>