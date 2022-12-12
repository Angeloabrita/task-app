<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   


</head>
    <body class="antialiased">
        
        {{-- hero main --}}

        <!-- Hero 1 - HCF Bootstrap 5 Component -->
<section class="px-5 py-6 py-xxl-10 hcf-bp-center hcf-bs-cover hcf-overlay hcf-transform" style="background-image: url('{{asset('storage/assets/taskbg.jpg')}}');">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-11 col-lg-9 col-xl-7 col-xxl-6 text-center text-white">
          <h1 class="display-3 fw-bold mb-3">Task App</h1>
          <p class="lead mb-5">A sua lista de tarefas em uma mão.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-light btn-lg px-4 gap-3">Login</button>
            <button type="button" class="btn btn-outline-light btn-lg px-4">Cadastrar</button>
          </div>
        </div>
      </div>
    </div>
  </section>


        {{-- end hero mais --}}

        
    
        
    </body>
</html>
