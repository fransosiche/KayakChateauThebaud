@extends('template')

@section('content')

    <div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2>Compte rendu de réunion (en pdf)</h2>
                    <form action="/Reunions" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input name="Reunion" type="text" id="Reunion"
                                       class="form-control @error('Reunion') is-invalid @enderror"
                                       placeholder="{{ __('Intutilé de la réunion') }}" required
                                       autocomplete="Reunion">
                                @error('Reunion')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input name="pdf" type="file" id="pdf"
                                       class="form-control @error('pdf') is-invalid @enderror"
                                       placeholder="{{ __('Compte rendu de réunion (en pdf)') }}" required
                                       autocomplete="pdf">
                                @error('pdf')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sauvegarder" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
