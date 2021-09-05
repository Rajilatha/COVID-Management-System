<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<section>
    <br>
    <br>
    <div class="row justify-content-center">
<div  style="background-image:url({{url('/images/vaccine.jpg')}}); height:450px; width:800px; left-padding:0px;">
 <div class="container">
     <div class="row">
        <div class="col-md-6 offset-md-3">
        <br>
        <br>
            <div class="card">
               <div class="card-header bg-info">
                   Vaccination Appointment
               </div> 
               <div class="card-body">
                   @if (Session::has('post_created'))
                   <div class="alert alert-success" role="alert">
                       {{Session::get('post_created')}}
</div>
                   @endif
              <form method="POST" action="{{route('post.addsubmit')}}">
                  @csrf
                  <div class="form-group">
                      <lable for="nic_no">NIC NUMBER</lable>
                      <input type="text" name="nic_no" class="form-control" placeholder="Enter NIC number"/>
</div>
<br>
<br>

                      <div class="form_group">
                      <lable for="date">DATE</lable>
                      <input type="date" id="date" name="date">
                      </div>
                      <br>
                      <br>
                      <input type="submit" class="btn btn-info"value="Register" />
                 
              </form>
</div>
              </div>
            </div>
        </div>
     </div>
</div>
     <div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>