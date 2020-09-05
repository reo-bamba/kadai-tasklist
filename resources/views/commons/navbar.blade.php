<header class = "mb-4">
    <nav class = "navbar navbar-expand-sm navbar-light bg-light ">
        <a class "navbar-brand" href = "/">TasList</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="nav navbar-nav navbar-right">
                       <li class = "nav-item">{!! link_to_route('tasks.create', '新規タスク設定', [], ['class' => 'nav-link']) !!}</li> 
                        
                        <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    
                    {{--ログインとかログアウトとか --}}
                    
                    
                    </ul>
        </div>
    </nav>
    
</header>