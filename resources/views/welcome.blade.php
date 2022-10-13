<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SwiftDental - Roman Convertor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet"> 

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased">
    <nav class="navbar navbar-light bg-light" style="justify-content: center;">
        <h1 style="color: green; ">SwiftDental - Roman Convertor</h1>
    </nav>
     <div class="container">
            <form method="post">
                @csrf
                <br>
                <br>
                <div class="g-3 row">
                    <label for="numberToConvert" class="col-sm-2 col-form-label" style="color: green;"><b>Number to convert:</b></label>
                    <div class="col-auto">
                        <input type="text" class="form-control" name="number-to-convert" id="numberToConvert">
                        <small id="textHelp" class="form-text text-muted">You can type either Roman Or Number.</small>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-success" type="submit">Convert</button>
                    </div>
                </div>
            </form>

            @if(isset($result))
                <br>
                <div>
                    <p><b style="color: green;">Result: </b>{{$result}}</p>
                </div>
            @endif
        </div>
    </body>
</html>


