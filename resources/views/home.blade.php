@extends('layouts.app')

@section('title','Mini Instagram')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- add class container > 992px -->
    <div class="container collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Hidden brand</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container mt-4">
    <br><br>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img src="https://instagram.flpb4-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/109132347_469349097322026_5465783850829104775_n.jpg?_nc_ht=instagram.flpb4-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=n97T-OiNLTEAX-1HH-q&oh=e2f3e56ddbd826a50c985ee2c6072a00&oe=5F3F73D9" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <br>
            <div class="card">
                <img src="https://instagram.flpb4-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/109132347_469349097322026_5465783850829104775_n.jpg?_nc_ht=instagram.flpb4-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=n97T-OiNLTEAX-1HH-q&oh=e2f3e56ddbd826a50c985ee2c6072a00&oe=5F3F73D9" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://instagram.flpb4-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/109132347_469349097322026_5465783850829104775_n.jpg?_nc_ht=instagram.flpb4-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=n97T-OiNLTEAX-1HH-q&oh=e2f3e56ddbd826a50c985ee2c6072a00&oe=5F3F73D9" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://instagram.flpb4-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/109132347_469349097322026_5465783850829104775_n.jpg?_nc_ht=instagram.flpb4-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=n97T-OiNLTEAX-1HH-q&oh=e2f3e56ddbd826a50c985ee2c6072a00&oe=5F3F73D9" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://instagram.flpb4-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/109132347_469349097322026_5465783850829104775_n.jpg?_nc_ht=instagram.flpb4-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=n97T-OiNLTEAX-1HH-q&oh=e2f3e56ddbd826a50c985ee2c6072a00&oe=5F3F73D9" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

        </div>
        <div class="col-md-6" style="position:fixed; right: 0px;">
            <div class="card border-light mb-3" style="max-width: 32rem;">
                <div class="row card-header">
                    <div class="col-md-3">
                        <img src="https://instagram.fyei1-1.fna.fbcdn.net/v/t51.2885-19/44884218_345707102882519_2446069589734326272_n.jpg?_nc_ht=instagram.fyei1-1.fna.fbcdn.net&_nc_ohc=iYZpEIp9uDMAX-QY1Zs&oh=401b307448290dabd5fb52de7d2d9332&oe=5F3F2E0F&ig_cache_key=YW5vbnltb3VzX3Byb2ZpbGVfcGlj.2" alt="..." width="60" height="65">
                    </div>
                    <div class="col-md-9">
                        <h6>davidtorrez280</h6>
                        <p>David Torrez Navarro</p>
                    </div>

                </div>
                <div class="card-body">
                    <h6 class="card-title">Sugerencia para ti</h6>

                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://instagram.fyei1-1.fna.fbcdn.net/v/t51.2885-19/44884218_345707102882519_2446069589734326272_n.jpg?_nc_ht=instagram.fyei1-1.fna.fbcdn.net&_nc_ohc=iYZpEIp9uDMAX-QY1Zs&oh=401b307448290dabd5fb52de7d2d9332&oe=5F3F2E0F&ig_cache_key=YW5vbnltb3VzX3Byb2ZpbGVfcGlj.2" alt="..." width="40" height="55">
                        </div>
                        <div class="col-md-9">
                            <h6>lucasgram280</h6>
                            <p>Te sigue</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://instagram.fyei1-1.fna.fbcdn.net/v/t51.2885-19/44884218_345707102882519_2446069589734326272_n.jpg?_nc_ht=instagram.fyei1-1.fna.fbcdn.net&_nc_ohc=iYZpEIp9uDMAX-QY1Zs&oh=401b307448290dabd5fb52de7d2d9332&oe=5F3F2E0F&ig_cache_key=YW5vbnltb3VzX3Byb2ZpbGVfcGlj.2" alt="..." width="40" height="55">
                        </div>
                        <div class="col-md-9">
                            <h6>Juanito007</h6>
                            <p>Te sigue</p>
                        </div>
                    </div>
                    <!-- <div class="col-md-12"></div> -->

                    <p class="card-text">InformaciónAyudaPrensaAPIEmpleoPrivacidadCondicionesUbicacionesCuentas
                        destacadasHashtagsIdioma
                        Español (España)
                        © 2020 INSTAGRAM FROM FACEBOOK</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection