
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

            </div>
            <br>
            <br>
            <br>
            <br>
            
           
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                           <h1 class="float-sm-left">Public Details</h1>
                           <div class="float-sm-right" style="padding:20px 100px 20px 20px;">
                <a class="btn btn-info" href="{{ route('post.add') }}"> Add new detail</a>
                        </div>
                    <div class="card-body">
                        @if(Session::has('post_deleted'))
                        <div class="alert alert-success" role="alert">
                       {{Session::get('post_deleted')}}
</div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                <th>NIC Number</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Vaccination one</th>
                                    <th>Vaccination two</th>
                                    <th>Action</th>
                                  
                                </tr>
                            </thead>
             
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                <td>{{$post->nic_no}}</td>
                                    <td>{{$post->fname}}</td>
                                    <td>{{$post->lname}}</td>
                                    <td>{{$post->email}}</td>
                                    <td>{{$post->address}}</td>
                                    <td>{{$post->age}}</td>
                                    <td>{{$post->gender}}</td>
                                    <td>{{$post->v1}}</td>
                                    <td>{{$post->v2}}</td>
                                    <td>

                                        <a href="/gs/post/{{$post->id}}" > <img src="{{url('/images/view.png')}}"> </a>
                                        <a href="/gs/edit-post/{{$post->id}}" > <img src="{{url('/images/edit.png')}}"> </a>
                                        <a href="/gs/delete-post/{{$post->id}}" > <img src="{{url('/images/delete.png')}}" > </a>
                                        <a href="/gs/edit-poste/{{$post->id}}" > <img src="{{url('/images/email.png')}}" > </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                 </div>
            </div>
        </div>

</section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
