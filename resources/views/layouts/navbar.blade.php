
<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #283e42">
    <div class="container">
        <a class="navbar-brand" href="#">Toko Sepatu</a>
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
                    <a class="nav-link {{Request::path() == 'pay' ? 'active' : '';}}" href="/pay">pay</a>
                </li>
            </ul>
            <div class="d-flex gap-4 align-items-center">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Login | Register</button>
            </div>
        </div>
    </div>
</nav>
