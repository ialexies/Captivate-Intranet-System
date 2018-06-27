
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myCaptivate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300,100' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <!--CSS-->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/sidebar-nav.css">  
</head>

<body>
  
  @include('inc.navbar')
  <div class="container">
    @if(Request::is('/'))
      @include('inc.showcase')

    @elseif('/status')
      @include('inc.trademark-registration')
    @endif

    <div class="row">
      <div class="col-md-8 col-lg-8">
        @yield('content')
      </div>
      <div class="col-md-4">
        @include('inc.sidebar')
       
      </div>
    </div>
  </div>

  <footer id="footer" class="text-center">
    <p>Copyright 2018 &copy; Acme</p>
  </footer>
</body>
</html>