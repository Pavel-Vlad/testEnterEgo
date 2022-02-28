<header class="mt-5 mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <a class="navbar-brand" href="/">SOME SHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Main Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart">Cart: <strong><u>{{$count_products}}</u></strong> products</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
