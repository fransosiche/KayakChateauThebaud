@extends('template')

@section('content')

    <div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2>Veuillez renseigner les informations</h2>
                    <form action="/Reservation/2H" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
                                <input name="fsurname" type="text" id="fsurname"
                                       class="form-control @error('fsurname') is-invalid @enderror"
                                       placeholder="{{ __('Prénom') }}" value="{{ old('fsurname') }}" required
                                       autocomplete="fsurname">
                                @error('fsurname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input name="fname" type="text" id="fname"
                                       class="form-control @error('fname') is-invalid @enderror"
                                       placeholder="{{ __('Nom') }}"
                                       value="{{ old('fname') }}" required autocomplete="fname">
                                @error('fname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input name="adresse" type="text" id="adresse"
                                       class="form-control @error('adresse') is-invalid @enderror"
                                       placeholder="{{ __('Votre adresse') }}" required autocomplete="adresse">
                                @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input name="mail" type="email" id="mail"
                                       class="form-control @error('mail') is-invalid @enderror"
                                       placeholder="{{ __('Votre adresse mail') }}" required autocomplete="mail">
                                @error('mail')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="jour">Choisissez le jour de la réservation</label>
                                <input name="jour" type="date" id="jour"
                                       class="form-control @error('jour') is-invalid @enderror"
                                       required autocomplete="jour">
                                @error('jour')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="select">
                                    <select name="slct" id="slct" required>
                                        <option value="" selected disabled>Choisissez votre créneau horaire</option>
                                        <option value="10:00">10H - 12H</option>
                                        <option value="12:00">12H - 14H</option>
                                        <option value="14:00">14H - 16H</option>
                                        <option value="16:00">16H - 18H</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Passer à la selection des embarcations" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
