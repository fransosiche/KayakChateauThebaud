@extends('template')
@section('content')
    <div class="colorlib-classes">
        <div class="container">
            <div class="row">
                @csrf
                {!!form($Itemform)!!}
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection
