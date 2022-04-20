<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Alura</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('users.index') }}">Usuário</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('csv.show') }}">Importar Transações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route('tabela.index') }} ">Importações Realizada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route('tabela.show') }} ">Importações Detalhadas</a>
                </li>
                {{--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link enable" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>--}}
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" action="{{ route('users.index') }}" method="get" name="search" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
</nav>
