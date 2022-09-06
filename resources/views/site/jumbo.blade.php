@extends ('common.mdb-fullpage')

@section('content')

<!--PRIMEIRA DIV CONTAINER-->
<div class="container mt-3">
            <div class="jumbotron text-center">
            <h4 class="card-title h4 pb-2"><strong>Salão de Beleza</strong></h4>

            <div class="view overlay my-4">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).webp" class="img-fluid" alt="">
            <a href="#">
                <div class="mask rgba-white-slight"></div>
            </a>
            </div>

            <h5 class="indigo-text h5 mb-4">Photography</h5>

            <p class="card-text">Bem vindo ao Salão de Beleza TodaBela</p>

            <a class="fa-lg p-2 m-2 li-ic"><i class="fab fa-linkedin-in grey-text"></i></a>
            <a class="fa-lg p-2 m-2 tw-ic"><i class="fab fa-twitter grey-text"></i></a>
            <a class="fa-lg p-2 m-2 fb-ic"><i class="fab fa-facebook-f grey-text"></i></a>

            </div>
</div>

@include('parts.blog-post', ['title'=>'dia feliz'], ['author' => 'Jessica'])
@include('parts.blog-post', ['title'=>'oie'], ['author' => 'Ana'])
@include('parts.blog-post', ['title'=>'tudo bem'], ['author' => 'Larissa'])
@include('parts.blog-post', ['title'=>'tchau'], ['author' => 'Amanda'])

<!--TERCEIRA DIV CONTAINER-->
<div class="container">
            <div class="card card-cascade wider">

            <div class="view view-cascade overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.webp" alt="Card image cap">
                <a href="#!">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <div class="card-body card-body-cascade text-center pb-0">
                <h4 class="card-title"><strong>Alison Belmont</strong></h4>
                <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                laudantium, totam rem aperiam. </p>

                <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

                <div class="card-footer text-muted text-center mt-4">
                2 days ago
                </div>

            </div>

            </div>

            <div class="card card-cascade narrower">
            <div class="view view-cascade overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).webp"
                alt="Card image cap">
                <a>
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <div class="card-body card-body-cascade">
                <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinary</h5>
                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                laboriosam, nisi ut aliquid ex ea commodi.</p>
                <a class="btn btn-unique">Button</a>

            </div>

                <div class="card-footer text-muted text-center">
                2 days ago
            </div>

            </div>

            <div class="card card-cascade">

            <div class="view view-cascade overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.webp" alt="Card image cap">
                <a>
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <div class="card-body card-body-cascade text-center">

                <h4 class="card-title"><strong>Billy Coleman</strong></h4>
                <h6 class="font-weight-bold indigo-text py-2">Web developer</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae.
                Facere modi sunt, quod quibusdam.
                </p>

                <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
                <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
                <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>

            </div>
            <div class="card-footer text-muted text-center">
                2 days ago
            </div>

            </div>
</div>
@endsection


