<nav class="navbar navbar-expand-sm navbar-light bg-primary ">
    <div class="container-fluid ">
        <a class="navbar-brand text-light" href="https://www.instagram.com/immawaaqhowatuha_/">Simple Siakad</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav text-light">
                <li class="nav-item">
                    <a class="nav-link {{Request::routeIs('index') ? 'active' : ''}}  text-light" aria-current="page"
                        href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light {{Request::routeIs('create') ? 'active' : ''}}"
                        href="{{ route('create') }}">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light {{Request::routeIs('aboutme') ? 'active' : ''}}"
                        href="{{ route('aboutme') }}">Aboutme</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
