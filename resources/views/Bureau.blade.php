@extends('template')

@section('content')
    <div class="colorlib-blog colorlib-light-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Bureau du club de Chateau Thébaud</h2>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Président du club :  Christian Moriceau</a></h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Secrétaire : </a></h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Vice-président: </a></h2>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
            <div class="col-md-4 animate-box">
                <article class="article-entry">
                    <a class="blog-img"
                       style="background-image: url( {{ url('/images/.jpg')}});">
                    </a>
                    <div class="desc">
                        <h2><a>Trésorier :</a></h2>
                    </div>
                </article>
            </div>
            <div class="col-md-4 animate-box">
                <article class="article-entry">
                    <a class="blog-img"
                       style="background-image: url( {{ url('/images/.jpg')}});">
                    </a>
                    <div class="desc">
                        <h2><a>Responsable de section : </a></h2>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection