<div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
            <div class="container d-flex">
                <a class="navbar-brand" href="{{ url('/') }}">CHEAPTALK</a>
            </div>

            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item text-light">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown text-light">
                    <a class="nav-link" aria-current="page" href="{{ url('/posts') }}">Posts</a>
                </li>
                <li class="nav-item dropdown text-light">
                    <a class="nav-link" aria-current="page" href="{{ url('/categories') }}">Categories</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
