 <header>
        <nav class="navbar bg-gray-300 shadow-2xl">
            <div class="flex-1">
              <a class="btn btn-ghost normal-case text-xl">Lista de tarefas</a>
            </div>
            <div class="flex-none">
              <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn  btn-primary">
                 {{$userName}}
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                  
                  
                      <form class="flex justify-center" action="{{route('login.logout')}}" method="POST">
                        @csrf
                        <input type="hidden" name="api_token" value="{{$tokenApi}}">
                        <button class="btn btn-error w-full" type="submit">Sair</button>
                    </form>
                
                </ul>
              </div>
            </div>
        </nav>
    </header>