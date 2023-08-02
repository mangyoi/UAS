
<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #283e42">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{Vite::asset('resources/images/slide/logo.png')}}" alt="Logo" class="navbar-logo" style="width: 70px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link {{Request::path() == '/' ? 'active' : '';}}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() == 'shop' ? 'active' : '';}}" href="/shop">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{Request::path() == 'pay' ? 'active' : '';}}" href="{{route('sepatu.show',['sepatu'=>1])}}">admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
