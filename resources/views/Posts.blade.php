@extends('template')
@section('content')

    <div class="colorlib-blog colorlib-light-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Nos actualités</h2>
                    <p>Retrouvez les actualités du club à travers ces différentes publications </p>
                </div>
                @if (Auth::check() && Auth::user()->is_admin)
                    <div class="schedule text-center animate-box">
                        <div class="col-md-12">
                            <ul class="week">
                                <li class="active"><a style="font-size : 20px" href="/CreatePost">Ajouter un post</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row">
                @foreach($data as $key=> $data)
                    <div class="col-md-4 animate-box">
                        <article class="article-entry">
                            <a href="" class="blog-img"
                               style="background-image: url( images/{{$data -> Pic_URL	}} );">
                            </a>
                            <div class="desc">
                                <h2><a href="#">{{$data -> Title	}}</a></h2>
                                <p>{{$data -> Description}}</p>
                            </div>
                        </article>
                        @if (Auth::check() && Auth::user()->is_admin)
                            <div class="schedule text-center animate-box">
                                <div class="col-md-12">
                                    <ul class="week">
                                        <li class="active"><a style="font-size : 20px" href="/Edit/{{ $data->id}}">Editer</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="schedule text-center animate-box">
                                <div class="col-md-12">
                                    <ul class="week">
                                        <li class="active"><a style="font-size : 20px" href="/Delete/{{ $data->id}}">Supprimer</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
