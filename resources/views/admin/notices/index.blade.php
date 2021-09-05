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
@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif

<div class="card">
<div class="row">

<div class="col-lg-12 margin-tb">



    <div class="pull-right">

        <a class="btn btn-info" href="{{ route('notices.create') }}"> Create New notice</a>

    </div>

</div>

</div>





<div class="card-body">
<table class="table table-bordered">

<tr>

    <th>No</th>

    <th>Image</th>

    <th>Name</th>

    <th>Details</th>

    <th width="280px">Action</th>

</tr>

@foreach ($notices as $notice)

<tr>

    <td>{{ ++$i }}</td>

    <td><img src="/image/{{ $notice->image }}" width="100px"></td>

    <td>{{ $notice->name }}</td>

    <td>{{ $notice->detail }}</td>

    <td>

        <form action="{{ route('notices.destroy',$notice->id) }}" method="POST">



        <a href="{{ route('notices.edit',$notice->id) }}" > <img src="{{url('/images/edit.png')}}"> </a>



           



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

{!! $notices->links() !!}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>

    

