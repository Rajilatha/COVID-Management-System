<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
    <p>Hi {{$send->fname}} {{$send->lname}} </p>
    <p>Your user_id</p>
    @foreach($send->$posts as $post)
    <p>{{$post->id}} </p>
    @endforeach
</body>
</html>