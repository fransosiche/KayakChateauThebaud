@extends('template')

@section('content')
    <div class="colorlib-classes colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Parcours canoë kayak en Sèvre et Maine</h2>
                    <p> Voici les parcours que vous pouvez effectuer lors des locations. C'est un allé/retour. (Si vous
                        choississez de louer 2H, vous devez faire 1 heure allé, 1 heure retour.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="classes">
                        <div class="classes-imggg" style="background-image: url(images/map-alckct.jpg);">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="schedule text-center animate-box">
                    <div class="col-md-12">
                        <ul class="week">
                            <form class="active" method="get" action="/images/parcours_canoe_kayak.pdf">
                                <button class="active" style="margin-top: 20px" type="submit">Télécharger le plan</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
