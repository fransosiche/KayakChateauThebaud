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
                           style="background-image: url( {{ url('/images/SweatCaoucheEnfant.jpg')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Sweat à capuche enfant</a></h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/Sweat_Capuche_Femme.jpg')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Sweat à capuche femme</a></h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/Sweat_capuche_homme.jpg')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Sweat à capuche homme</a></h2>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/Sweatzippécapucheenfant.jpg')}});">
                        </a>
                        <div class="desc">
                            <h2><a> Sweat zippé à capuche enfant</a></h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/Sweat_zippé_capuche_femme.jpg')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Sweat zippé à capuche femme</a></h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/Sweat_zippé_capuche_homme.jpg')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Sweat zippé à capuche homme</a></h2>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/Tee-shirt-enfant.jpg')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Tee-shirt enfant</a></h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/Tee-shirt-femme.jpg')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Tee-shirt femme</a></h2>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/Tee-shirt-homme.jpg')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Tee-shirt homme</a></h2>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <article class="article-entry">
                        <a class="blog-img"
                           style="background-image: url( {{ url('/images/CasquetteNoir.jpg')}});">
                        </a>
                        <div class="desc">
                            <h2><a>Casquette
                                    Noir liseré jaune
                                </a></h2>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
