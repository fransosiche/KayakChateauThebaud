<div class="colorlib-classes colorlib-light-grey">
    <div class="container">
        <table width="100%" style="width:100%" border="0">
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
            <tr>
                @foreach($data as $key=>$data)
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
                    <td>{{$data -> Start_Time}}</td>
                    <td>{{$data -> End_Time}}</td>
                    <td>{{$myDateTime = DateTime::createFromFormat('Y-m-d', $data->Location_Date)->format('d-m-Y')}}</td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
</div>



