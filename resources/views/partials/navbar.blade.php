<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PHP M12</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ route('team.list') }}">Equips</a>
                <a class="nav-item nav-link" href="{{ route('match.list') }}">Partits</a>
            </div>
            @auth                    
            <div class="navbar-nav">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-danger" style="color:white;" type="submit">Desconecta't</button>
                </form>  
                <div>
                    <span class="nav-item nav-link">Usuari: {{ Auth::user()->name }} | Rol: </span>
                </div>                    
            </div>                    
            @endauth            
        </div>
    </nav>
</div>