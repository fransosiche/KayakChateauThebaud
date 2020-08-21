<!DOCTYPE HTML>
<html lang="fr">
<head>
    <style>
        table {
            border-collapse: collapse;
            table-layout: auto;
            width:100%;
        }

        table, th, td {
            border: 1px solid black;
            text-align:center;
        }
    </style>
</head>
<div class="colorlib-classes colorlib-light-grey">
    <div class="container">
        <table>
            <thead>
            <tr>
                <th scope="col">Nom Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Adresse</th>
                <th scope="col">Téléphone</th>
                <th scope="col">K1</th>
                <th scope="col">K2</th>
                <th scope="col">C2</th>
                <th scope="col">C3/4</th>
                <th scope="col">Paddle</th>
                <th scope="col">Début<br>Fin</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $key=>$data)
                <tr>
                    <td>{{$data -> Name}} {{$data -> Surname}}</td>
                    <td>{{$data -> Email}}</td>
                    <td>{{$data -> Address}}</td>
                    <td>{{$data -> Phone}}</td>
                    <td>{{$data -> Kayak1Place}}</td>
                    <td>{{$data -> Kayak2Place}}</td>
                    <td>{{$data -> Canoe2Place}}</td>
                    <td>{{$data -> Canoe4Place}}</td>
                    <td>{{$data -> Paddle}}</td>
                    <td>{{substr($data -> Start_Time,0,-3)}}<br>{{substr($data -> End_Time,0,-3)}}</td>
                    <td>{{$myDateTime = DateTime::createFromFormat('Y-m-d', $data->Location_Date)->format('d-m-Y')}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</html>



