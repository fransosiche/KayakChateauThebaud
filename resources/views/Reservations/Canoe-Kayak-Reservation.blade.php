@extends('template')

@section('content')

    <div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2> Il ne vous reste plus qu'à choisir votre ou vos embarcations !</h2>
                    <form action="" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="selectt">
                                    <select name="kayakoneplace" id="kayakoneplace" required>
                                        <option value="" selected disabled>Choisissez le nombre de kayak 1 place que vous souhaitez</option>
                                        @for( $i = 0; $i<=$KayakOnePlaceAvailable; $i++)
                                        <option value="10:00:00|11:00:00">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Finir la réservation" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
