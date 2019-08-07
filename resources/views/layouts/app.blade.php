<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    <!-- CUSTOM CSS -->
    <link href="{{ asset('asset/css/rm.css') }}" rel="stylesheet">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RM-Constructions') }}</title>


</head>
<body>
    @include('inc.navbar')
    <div class="parent">
        @yield('top_content')
    </div>
    @include('inc.messages')
    @yield('content')


    <!-- JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
  
     
    <script type="text/javascript">
      
      new WOW().init();
  
      $(document).ready(function () {
        
            // Get the elements with class="column"
            var elements = document.getElementsByClassName("column");

            // Declare a loop variable
            var i;

            // Full-width images
            function one() {
                for (i = 0; i < elements.length; i++) {
                elements[i].style.msFlex = "75%";  // IE10
                elements[i].style.flex = "75%";
            }
            }

            // Two images side by side
            function two() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.msFlex = "50%";  // IE10
                elements[i].style.flex = "50%";
            }
            }

            // Four images side by side
            function four() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.msFlex = "25%";  // IE10
                elements[i].style.flex = "25%";
            }
            }

            // Add active class to the current button (highlight it)
            var header = document.getElementById("myHeader");
            var btns = header.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
            }

      });
  
    </script>
    <!-- JAVASCRIPT -->
</body>
@include('inc.footer')
</html>
