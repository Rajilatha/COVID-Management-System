    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>corona
        
        </title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <x-headerp/>
    <br>
    <br>
    <div class="row">

        <div class="col-lg-12 margin-tb">


            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('notices2.index') }}" color="blue"> Back</a>

            </div>

        </div>

    </div>

     

   
        

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>

                {{ $notice->detail }}</strong>

            </div>

        </div>

        

            

               <div class="rounded mx-auto d-block" >

                <img src="/image/{{ $notice->image }}" width="600px" class="rounded mx-auto d-block" >



        </div>
       

  

       

    </body>
    </html>

