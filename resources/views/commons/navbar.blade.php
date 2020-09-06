<header class = "mb-4">
    <nav class = "navbar navbar-expand-sm navbar-light bg-light ">
        <a class "navbar-brand" href = "/">TasList</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                    {{-- link to new task --}}
                       <li class = "nav-item">{!! link_to_route('tasks.create', '新規タスク設定', [], ['class' => 'nav-link']) !!}</li> 
                    {{-- link to sign up --}}
                        <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    {{-- link to log out --}}
                        <li>{!! link_to_route('logout.get', 'Log Out', []) !!}</li>
                    </ul>
                    
                    @else
                    {{-- link to user registration page --}}
                    <li class = "nav-item">{!! link_to_route('signup.get', 'Sign Up', [], ['class' => 'nav-link']) !!}</li>
                    {{-- link to login page --}}
                    <li class = "nav-item">{!! link_to_route('login', 'Login', [], ['clasas' => 'nav-link']) !!}</li>
                    @endif
        </div>
    </nav>
    
</header>