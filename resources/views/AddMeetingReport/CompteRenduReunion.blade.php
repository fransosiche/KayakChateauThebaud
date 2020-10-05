@extends('template')

@section('content')
    <div class="colorlib-blog colorlib-light-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Compte rendu des réunions</h2>
                    <p>Retrouvez les comptes rendus des réunions de canoë-kayak de Château-Thébaud </p>
                </div>
                @if (Auth::check() && Auth::user()->is_admin)
                    <div class="schedule text-center animate-box">
                        <div class="col-md-12">
                            <ul class="week">
                                <li class="active"><a style="font-size : 20px" href="/AjouterCompteRendu">Ajouter un compte rendu</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-4 animate-box text-center">
                    <article class="article-entry">
                        <img class="blog-img" style="padding-left: 3em"
                          src="{{ url('/images/PDF.png')}}">
                        <div class="desc">
                            <h2><a>COMPTE RENDU REUNION</a></h2>
                            <ul class="week">
                                <form class="active"  style="padding-right:50px " method="get" action="/images/">
                                    <button class="active" type="submit">Télécharger le compte rendu
                                    </button>
                                </form>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection