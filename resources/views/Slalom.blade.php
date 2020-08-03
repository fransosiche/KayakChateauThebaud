@extends('template')
@section('content')
    <div class="colorlib-classes colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Le slalom, comment ça marche ?</h2>
                    <p>C'est une course contre la montre où les concurrents doivent suivre un parcours comportant de 18
                        à 25 portes, de couleur rouge ou verte. </p>
                    <p> On doit passer entre les portes sans les toucher, dans le sens de la descente pour les vertes,
                        en remontée pour les rouges.</p>
                    <p>
                        Chaque touche donne une pénalité de 2 points, tandis qu'une porte franchie de manière incorrecte
                        entraîne 50 points de pénalité.
                    </p>
                    <p>
                        Les pénalités sont ajoutées au temps réalisé qui est converti en points (1 point = 1 seconde)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(images/classes-8.jpg);">
                        </div>
                        <div class="desc">
                            <h3><a></a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(images/classes-9.jpg);">
                        </div>
                        <div class="desc">
                            <h3><a></a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(images/classes-10.jpg);">
                        </div>
                        <div class="desc">
                            <h3><a></a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
