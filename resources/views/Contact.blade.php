@extends('template')
@section('content')
    <div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2>Informations de contact</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-info-wrap-flex">
                                <div class="con-info">
                                    <p><span><i class="icon-location-2"></i></span> Caffino
                                        , <br> 44690 Château-Thébaud</p>
                                </div>
                                <div class="con-info">
                                    <p><span><i class="icon-phone3"></i></span> <a href="tel://0240065407">02.40.06.54.07</a>
                                    </p>
                                </div>
                                <div class="con-info">
                                    <p><span><i class="icon-paperplane"></i></span> <a href="mailto:alckct@orange.fr">alckct@orange.fr</a>
                                    </p>
                                </div>
                                <div class="con-info">
                                    <p><span><i class="icon-globe"></i></span> <a
                                            href="https://www.canoekayakchateauthebaud.fr/">Site internet</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2>Envoyer un mail</h2>
                    <form action="/Contact" method="POST">
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
                                <!-- <label for="email">Email</label> -->
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
                                <!-- <label for="subject">Subject</label> -->
                                <input name="subject" type="text" id="subject"
                                       class="form-control @error('subject') is-invalid @enderror"
                                       placeholder="Le sujet du message" required autocomplete="subject">
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="message" cols="30" rows="10"
                                          class="form-control @error('message') is-invalid @enderror"
                                          placeholder="Le message que vous souhaitez nous faire parvenir" required autocomplete="message"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Envoyer le message" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
