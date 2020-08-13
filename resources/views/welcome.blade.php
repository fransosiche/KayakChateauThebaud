@extends('template')
@section('content')
    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h2>Qui sommes nous ?</h2>
                <p>Section à part entière de l'Amicale Laïque de Château-Thébaud, la notoriété du club déborde largement
                    au-delà de notre commune. Le club est affilié à la Ligue de l'Enseignement et à la Fédération
                    Française de Canoë Kayak et ses adhérents, adultes ou jeunes, évoluent de plus en plus vers des
                    qualifications nationales. Mais les débutants sont toujours les bienvenus.</p>
            </div>
        </div>
    </div>

    <div id="colorlib-schedule" class="colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Horaires</h2>
                    <p>Voici les horaires d'ouvertures du club pour les locations de kayak.</p>
                </div>
            </div>
            <div class="row">
                <div class="schedule text-center animate-box">
                    <div class="col-md-12">
                        <ul class="week">
                            <li class="active"><a style="font-size : 20px">Tous les jours de la semaine</a></li>
                        </ul>
                    </div>
                    <div class="schedule-flex">
                        <div class="entry-forth">
                            <p class="time"><span style="font-size : 20px">10h00 - 12h00</span></p>
                            <h3>Matinée</h3>
                        </div>
                    </div>
                    <div class="schedule-flex">
                        <div class="entry-forth">
                            <p class="time"><span style="font-size : 20px">14H00 - 18h00</span></p>
                            <h3>Après-midi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div id="colorlib-testimony" class="testimony-img" style="background-image: url(images/img_bg_2.jpg);"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h3 style="color : #0e7d3c">Nos activités</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="row animate-box">
                        <div class="owl-carousel1">
                            <div class="item">
                                <div class="testimony-slide">
                                    <div class="testimony-wrap">
                                        <blockquote>
                                            <span>Ecole de pagaie</span>
                                            <p>L'école de pagaie de l'ALCKCT propose aux jeunes et aux adultes (section
                                                spécifique à partir de Septembre)
                                                d'acquérir les différentes techniques de navigation.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide">
                                    <div class="testimony-wrap">
                                        <blockquote>
                                            <span>Pagayons Sèvre & Maine</span>
                                            <p>En famille, entre amis, pour la journée ou pour plusieurs jours,
                                                la randonnée en canoë ou en kayak est depuis longtemps l'activité la
                                                plus pratiquée en Sèvre et Maine.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="colorlib-classes colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Nos embarcations & tarifs pour les locations</h2>
                    <p>La location se fera uniquement sur réservation via internet ou au 02.40.06.54.07. Ouverture le 13
                        juin.
                        Port du masque obligatoire à l’accueil </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(images/classes-1.jpg);">
                        </div>
                        <div class="desc">
                            <h3>Kayaks</h3>
                            <p>Location de kayak insubmersible et submersible 1 place jusqu'à 2 places</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(images/classes-2.jpg);">
                        </div>
                        <div class="desc">
                            <h3>Paddle</h3>
                            <p>Location de paddle</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(images/classes-3.jpg);">
                        </div>
                        <div class="desc">
                            <h3>Canoë</h3>
                            <p>Location de canoë de 2 à 4 places.</p>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table animate-box">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Par personne</th>
                    <th scope="col">Groupe + 10 personnes</th>
                    <th scope="col">Paddle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Week-end</th>
                    <td>50€</td>
                    <td> -</td>
                    <td> -</td>
                </tr>
                <tr>
                    <th scope="row">Journée</th>
                    <td>17€</td>
                    <td>15€</td>
                    <td> -</td>
                </tr>
                <tr>
                    <th scope="row">Demi-journée</th>
                    <td>12€</td>
                    <td>10€</td>
                    <td>25€</td>
                </tr>
                <tr>
                    <th scope="row">Deux heures</th>
                    <td>10€</td>
                    <td>8€</td>
                    <td>15€</td>
                </tr>
                <tr>
                    <th scope="row">Heure</th>
                    <td>8€</td>
                    <td>6€</td>
                    <td>10€</td>
                </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="schedule text-center animate-box">
                    <div class="col-md-12">
                        <ul class="week">
                            <li class="active"><a style="font-size : 20px" href="/Reservation">Réservez dés maintenant</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-blog colorlib-light-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Nos posts récents</h2>
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
                            <a href="/Actualités/{{$data -> id}}" class="blog-img"
                               style="background-image: url( images/{{$data -> Pic_URL	}} );">
                            </a>
                            <div class="desc">
                                <h2><a href="/Actualités/{{$data -> id}}">{{$data -> Title	}}</a></h2>
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
