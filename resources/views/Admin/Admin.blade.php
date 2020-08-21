@extends('template')

@section('content')
    <div class="colorlib-classes colorlib-light-grey">
        <div class="container">
            <div class="row">
                <form action="/Admin/Test" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="jour">Choississez le jour</label>
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
                    <div class="form-group">
                        <input type="submit" value="Consulter les réservations à ce jour" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <br>
            <div class="row">
                <table id='tab_customers' class="table table-bordered animate-box">
                    <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">K1</th>
                        <th scope="col">K2</th>
                        <th scope="col">C2</th>
                        <th scope="col">C3/4</th>
                        <th scope="col">Paddle</th>
                        <th scope="col">Début</th>
                        <th scope="col">Fin</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key=> $data)
                        <tr>
                            <td>{{$data -> Name}}</td>
                            <td>{{$data -> Surname}}</td>
                            <td>{{$data -> Email}}</td>
                            <td>{{$data -> Address}}</td>
                            <td>{{$data -> Phone}}</td>
                            <td>{{$data -> Kayak1Place}}</td>
                            <td>{{$data -> Kayak2Place}}</td>
                            <td>{{$data -> Canoe2Place}}</td>
                            <td>{{$data -> Canoe4Place}}</td>
                            <td>{{$data -> Paddle}}</td>
                            <td>{{substr($data -> Start_Time,0,-3)}}</td>
                            <td>{{substr($data -> End_Time,0,-3)}}</td>
                            <td>{{$myDateTime = DateTime::createFromFormat('Y-m-d', $data->Location_Date)->format('d-m-Y')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <ul class="week">

                    <li class="active"><a style="font-size : 20px"
                                          href="/PrintPDF/{{substr((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",28)}}">Télécharger
                            en
                            PDF</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
