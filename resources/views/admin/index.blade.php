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
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
<div class="card">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="container max-w-full mx-auto pt-4">
                <h2>Districts Covid Details</h2>
            </div>
            <div class="col-md-8 offset-md-9">
                <a class="btn btn-info" href="{{ route('admin.create') }}"> Create New Details</a>
            </div>
        </div>
    </div>
   
    <div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Districts</th>
            <th>Positive</th>
            <th>Death</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($covids as $covid)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $covid->districts }}</td>
            <td>{{ $covid->positive }}</td>
            <td>{{ $covid->death }}</td>
            <td >
            <form action="{{ route('admin.destroy',$covid->id) }}" method="POST">
    
                    <a  href="{{ route('admin.edit',$covid->id) }}"><img src="{{url('/images/edit.png')}}"></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-light"><img src="{{url('/images/delete.png')}}"></button>
                </form>
      </td>
        </tr>
        @endforeach
        
    </table>
    </div>
</div>
        </div>
    </div>
</div>
  
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>