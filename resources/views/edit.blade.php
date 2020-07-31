@extends('template')

@section('content')
    <div class="colorlib-classes">
        <div class="container">
            @foreach($data as $key => $data)
                <br>
                <br>
                <form action="{{ url('/UpdatePost')}}/{{$data->id}}" method="post" role="form"
                      enctype="multipart/form-data" onsubmit="return verifForm(this)">
                    @csrf
                    <div class="form-group">
                        <label for="Title">Titre de l'article</label>
                        <input name="Title" class="form-control" value="{{$data->Title}}" onblur="verifName(this)">
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea name="Description" type="textarea" class="form-control"
                                  onblur="verifDescription(this)">{{$data->Description}}</textarea>
                    </div>
                    <div class="form-group">
                        <img src="{{ url('/images')}}/{{$data->Pic_URL}}" width="40%" height="40%" border="0"/>
                    </div>
                    <div class="form-group">
                        <label for="Image">Changer la photo</label>
                        <input type="file" name="Image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </form>
            @endforeach
        </div>
    </div>

@endsection
