
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
                           <h1 class="float-sm-left">PCR Testing Schedule Details</h1>
                           <div class="float-sm-right" style="padding:20px 100px 20px 20px;">
                <a class="btn btn-info" href="{{ route('post.addpcrschedule') }}"> Add new schedule</a>
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
                               
                                    <th>Date</th>
                                    <th>Time Slot</th>
                                    <th>Testing Place</th>
                                    <th>Action</th>
                                  
                                </tr>
                            </thead>
             
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                              
                                    <td>{{$post->date}}</td>
                                    <td>{{$post->time_slot}}</td>
                                    <td>{{$post->place}}</td>
                                   
                                    <td>

                                        
                                        <a href="/phi/pcr_schedule/edit-post/{{$post->id}}" > <img src="{{url('/images/edit.png')}}"> </a>
                                        <a href="/phi/pcr_schedule/delete-post/{{$post->id}}" > <img src="{{url('/images/delete.png')}}" > </a>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>
</html>
