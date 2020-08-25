@extends('template')
@section('content')
    <div class="colorlib-classes colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Nos embarcations & tarifs pour les locations</h2>
                    <p>Les locations se feront uniquement sur réservation via internet ou au 02.40.06.54.07,
                        elles sont disponibles de début Mai à mi Octobre. Les réservations sur internet sont
                        indisponible durant le week-end.
                        Port du masque obligatoire à l’accueil.</p>
                </div>
            </div>
            <div class="row">
                <div class="schedule text-center animate-box">
                    <h2>Sélectionnez la durée de location que vous désirez ! </h2>
                    <div class="col-md-12">
                        <ul class="week">
                            <li class="active"><a style="font-size : 20px" href="/Reservation/1H"> 1 heure
                                </a></li>
                        </ul>
                        <ul class="week">
                            <li class="active"><a style="font-size : 20px" href="/Reservation/2H"> 2 heures
                                </a></li>
                        </ul>
                        <ul class="week">
                            <li class="active"><a style="font-size : 20px" href="/Reservation/4H"> 4 heures
                                </a></li>
                        </ul>
                        <ul class="week">
                            <li class="active"><a style="font-size : 20px" href="/Reservation/Journee"> Journée
                                </a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url({{ url('/images/classes-1.jpg')}});">
                        </div>
                        <div class="desc">
                            <h3>Kayaks</h3>
                            <p>Location de kayak insubmersible ou fermé 1 place jusqu'à 2 places. Le kayak se manoeuvre
                                avec une pagaie double en position assise.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url({{ url('/images/classes-2.jpg')}});">
                        </div>
                        <div class="desc">
                            <h3>Paddle</h3>
                            <p>Location de paddle. C'est un sport de glisse nautique où le pratiquant se tient debout
                                (stand up en anglais) sur une planche plus longue qu'une planche de surf classique, se
                                propulsant à l'aide d'une pagaie (paddle).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url({{ url('/images/classes-3.jpg')}});">
                        </div>
                        <div class="desc">
                            <h3>Canoë</h3>
                            <p>Location de canoë de 2 à 4 places. Les canoës se manoeuvrent à l'aide d'une pagaie simple (à
                                l'inverse du kayak) en position assise souvent plus haute.</p>
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
        </div>
    </div>
@endsection
