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
                
              <form>
              <div class="form-group">
                      <lable for="nic_no">NIC NO</lable>
                      <input type="" name="nic_no" class="form-control"  value="{{$post->nic_no}}"placeholder="Enter the NIC No"/>
                   </div>

                   <div class="form-group">
                      <lable for="fname">PCR ID</lable>
                      <input type="" name="fname" class="form-control"  value="{{$post->fname}}"placeholder="Enter the Name"/>
                   </div>

                   <div class="form_group">
                      <lable for="adress">Address</lable>
                      <textarea class="form.control" name="address" rows="3">{{$post->address}}</textarea>
                    </div>
                   

                    <div class="form_group">
                      <lable for="age">Age</lable>
                      <input type="" name="age" class="form-control" value="{{$post->age}}">
                    </div>

                    <div class="form_group">
                    <select id="gender" name="gender">
        <option value="{{$post->gender}}">Female</option>
        <option value="{{$post->gender}}">Male</option>
        <option value="{{$post->gender}}">Other</option>
      </select>
    
                    </div>

                       <br>
                    <br>
                    <div class="form-group">
                      <lable for="start_date">Start Date</lable>
                      <input type="date" name="start_date" class="form-control"  value="{{$post->start_date}}"placeholder="Enter the start date"/>
                   </div>
                   <div class="form-group">
                      <lable for="end_date">End Date</lable>
                      <input type="date" name="end_date" class="form-control"  value="{{$post->end_date}}"placeholder="Enter the end date"/>
                   </div>

                    
                    <div class="form_group">
                    <lable for="status">status</lable>
                    <select id="status" name="status">
        <option value="{{$post->status}}">Under Quarantine</option>
        <option value="{{$post->status}}">Released </option>
        
      </select>
    

                    </div>
                    
                    <br>
                    <br>
             
                    
                 
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