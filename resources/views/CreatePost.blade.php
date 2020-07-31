@extends('template')
@section('content')
    <div class="container">
        @csrf
    {!!form($Itemform)!!}
        <br>
        <br>
    </div>
@endsection
