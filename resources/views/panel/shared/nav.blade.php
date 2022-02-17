<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">Crud</a>
        @auth
            <a href="{{ route('logout') }}" class="btn btn-danger mr-3">Cerrar sesión</a>
        @endauth
    </div>
</nav>
