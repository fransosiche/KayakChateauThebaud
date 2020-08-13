@extends('template')

@section('content')
    <div class="colorlib-classes colorlib-light-grey">
        <div class="container">
            @foreach($data as $key=> $data)
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>{{$data -> Title}}</h2>
                        <p>{{$data -> Description}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="classes">
                            <img src="{{ url('/images')}}/{{$data->Pic_URL}}" width="50%" height="50%"
                                 style="display: block;  margin-left: auto;margin-right: auto; width: 50%;"/>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
