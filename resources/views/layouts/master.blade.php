
<!doctype html>
<html lang="en">
<head>
<body>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>My Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <!-- Custom styles for this template -->

    <link href="/css/app.css" rel="stylesheet">
</head>



<div class="container">

        @include('layouts.nav')

        @if($flash = session('message'))

        <div id="flash-message" class="alert alert-success" role="alert">

            {{ $flash }}

        </div>

        @endif

        <div class="row">
        @yield('content')

        <!-- /.blog-main -->
        @include('layouts.sidebar')

        </div>
        @include('layouts.footer')

</div>



</body>
</html>



