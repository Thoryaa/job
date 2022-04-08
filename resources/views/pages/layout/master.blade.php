<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
       <link rel="stylesheet" href="{{ URL::asset('assest/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assest/css/style.css') }}">
    <title>jobs</title>
</head>

<body>
    <!--nav-->
     @include('includes/header')



@yield('content')    
 
       <!-- Footer -->
  @include('includes/footer')
    <!-- Footer -->
    <script src="{{ URL::asset('assest/js/bootstrap.bundle.min.js') }}"></script>

    
    </body>
    
    </html>