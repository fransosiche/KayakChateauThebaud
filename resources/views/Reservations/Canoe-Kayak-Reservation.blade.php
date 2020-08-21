@extends('template')

@section('content')

    <div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2> Il ne vous reste plus qu'à choisir votre ou vos embarcations !</h2>
                    <p> Si vous vous posez des questions sur les embarcations, <a href="/Reservation"> rendez-vous ici !</a></p>
                    <form action="/Reservation/Canoe-Kayak-Reservation/{{ $id }}" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12">
                                <br>
                                <label class="labelnew">Kayak 1 place </label>
                                <div class="selectt">
                                    <select name="KayakOnePlace" id="KayakOnePlace" required>
                                        <option value="" selected disabled>Choisissez le nombre de kayak 1 place que
                                            vous souhaitez
                                        </option>
                                        @for( $i = 0; $i<=$KayakOnePlaceAvailable; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <hr/>
                                <label class="labelnew">Kayak 2 places </label>
                                <div class="selectt">
                                    <select name="KayakTwoPlace" id="KayakTwoPlace" required>
                                        <option value="" selected disabled>Choisissez le nombre de kayak 2 places que
                                            vous souhaitez
                                        </option>
                                        @for( $i = 0; $i<=$KayakTwoPlaceAvailable; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <hr/>
                                <label class="labelnew">Canoë 2 places </label>
                                <div class="selectt">
                                    <select name="CanoeTwoPlace" id="CanoeTwoPlace" required>
                                        <option value="" selected disabled>Choisissez le nombre de canoës 2 places que
                                            vous souhaitez
                                        </option>
                                        @for( $i = 0; $i<=$CanoeTwoPlaceAvailable; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <hr/>
                                <label class="labelnew">Canoë 3/4 places</label>
                                <div class="selectt">
                                    <select name="CanoeFoursPlace" id="CanoeFoursPlace" required>
                                        <option value="" selected disabled>Choisissez le nombre de canoës 3/4 places que
                                            vous souhaitez
                                        </option>
                                        @for( $i = 0; $i<=$CanoeFoursPlaceAvailable; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <hr/>
                                <label class="labelnew">Paddle</label>
                                <div class="selectt">
                                    <select name="Paddle" id="Paddle" required>
                                        <option value="0" selected disabled>Choisissez le nombre de Paddle que
                                            vous souhaitez
                                        </option>
                                        @for( $i = 0; $i<=$PaddleAvailable; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                            </div>
                        </div>
                        <hr/>

                        <div class="form-group">
                            <input type="submit" value="Finir la réservation" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
