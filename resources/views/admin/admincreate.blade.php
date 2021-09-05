<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


</head>
<body>
<x-headeradmin/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
        <div class="card">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="container max-w-full mx-auto pt-4">
            <h2>Add New Details</h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.covid') }}"> Back</a>
        </div> -->
    </div>
</div>

   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
<form action="{{ route('admin.adminstore') }}" method="POST">
    @csrf
  
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Description:</strong>
                <!-- <label class="font-bold text-gray-800" for="title">DistrictName: </label> -->
                <input type="text" name="description" class="form-control" placeholder="description">
              
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Counts:</strong>
                <!-- <label class="font-bold text-gray-800" for="title">Positive: </label> -->
                <input type="text" name="counts" class="form-control" placeholder="counts">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-8 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('admin.adminindex') }}"> Back</a>
        </div>
    </div>
   
</form>
</div>
        </div>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>
</html>