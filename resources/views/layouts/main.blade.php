<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlantUI</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.navbar')
    
        @yield('content')    

    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">

        // hover on scroll
        var nav = document.querySelector('nav');
  
        window.addEventListener('scroll', function () {
          if (window.pageYOffset > 100) {
            nav.classList.add('bg-light', 'shadow');
          } else {
            nav.classList.remove('bg-light', 'shadow');
          }
        });

        // validasi
        function validasi() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            if (name != "" && email!="") {
                return true;
            }else{
                alert('Anda harus mengisi data dengan lengkap !');
            }
	    }
      </script>
</body>
</html>