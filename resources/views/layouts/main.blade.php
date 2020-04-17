<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Miporto - Upload your portfolio</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/assets/css/miporto.css" rel="stylesheet">
    <link href="/assets/css/miporto-responsive.css" rel="stylesheet">
  </head>
  <body>
    <header>
      {{-- Navbar section --}}
      @include('layouts.navbar')
    </header>

    <main role="main" >

      @yield('content')

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/jquery-slim.min.js"><\/script>')</script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    {{-- <script src="/assets/js/bootstrap.bundle.min.js"></script> --}}
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/assets/js/holder.min.js"></script>
    {{-- Custom style for js --}}
    <script src="/assets/js/miporto.js" type="text/javascript">

    </script>
  </body>
</html>
