@extends('template')
@section('content')

    <div class="colorlib-blog colorlib-light-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Nos vêtements</h2>
                    <p>Retrouvez les vêtements proposés par le club de canoë-kayak de Château-Thébaud </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images')}});">
                        </a>
                        <div class="desc">
                            <h2><a> VETEMENT</a></h2>
                            <p>DESCRIPTION RAPIDE</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
