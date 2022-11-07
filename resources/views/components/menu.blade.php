<header>
    <nav class="navbar navbar-expand-lg bg-default" id="menu">
        <div class="container d-flex">
            <a class="navbar-brand" href="/">
                <img id="logo" src="{{ asset('assets/images/' . $logoImg) }}" alt="Logo da Loja">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Quem Somos' ? 'active' : '' }}" href="/quem-somos">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Estoque' ? 'active' : '' }}" href="/estoque">Estoque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Contato' ? 'active' : '' }}" href="/contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
