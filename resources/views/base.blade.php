<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- A modo de test se colocan las librerias booststrap de esta forma mas no es aconsejable ya que disminuye el rendimiento de carga del website al consumin servicios externos -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.css" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- estilo personalizado del test -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
  <title>@yield('title')</title>
</head>
<body>

  @include('components.navbar')
  @include('components.alert')
  <div class="container">
    @yield('content')
  </div>
  @include('components.modal')
  <!-- A modo de test se colocan las librerias booststrap de esta forma mas no es aconsejable ya que disminuye el rendimiento de carga del website al consumin servicios externos -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" type="text/javascript"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>


  <style>
      .colorpicker-2x .colorpicker-saturation {
          width: 200px;
          height: 200px;
      }

      .colorpicker-2x .colorpicker-hue,
      .colorpicker-2x .colorpicker-alpha {
          width: 30px;
          height: 200px;
      }

      .colorpicker-2x .colorpicker-color,
      .colorpicker-2x .colorpicker-color div {
          height: 30px;
      }
  </style>
  <script>
      $(function() {
          $('#cp9').colorpicker({
              customClass: 'colorpicker-2x',
              sliders: {
                  saturation: {
                      maxLeft: 200,
                      maxTop: 200
                  },
                  hue: {
                      maxTop: 200
                  },
                  alpha: {
                      maxTop: 200
                  }
              }
          });
      });
  </script>
</body>
</html>