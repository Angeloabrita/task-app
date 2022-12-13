<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Styles  tailwind-->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Login</title>
</head>
<body>
    <section>
      <div class="hero min-h-screen bg-gray-600">
        <div class="hero-content flex-col lg:flex-row-reverse">
          <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">Login now!</h1>
            <p class="py-6">Faça o seu login e começe a cadastras as tarefas que jamais talvez sejam cumprodas</p>
          </div>
          <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">

              <form action="" method="post">


                <div class="form-control">
                  <label class="label">
                    <span class="label-text">Email</span>
                  </label>
                  <input type="text" placeholder="email" class="input input-bordered" id="email" required/>
                </div>
                <div class="form-control">
                  <label class="label">
                    <span class="label-text">Senha</span>
                  </label>
                  <input type="text" placeholder="senha" class="input input-bordered" id  required/>
                  <label class="label">
                    <a href="{{route('register.index')}}" class="label-text-alt link link-hover">Não tem cadastro?</a>
                  </label>
                </div>
                <div class="form-control mt-6">
                  <button class="btn btn-primary">Conectar</button>
                </div>

              </form>
              
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>