<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Patient's Data</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <a href="{{route('patient.create')}}">Register new Patient</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>ID Card Number</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>ID Card Type</th>
                <th>BPJS Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($patients as $patient)
                <tr>
                    <td>{{$patient->id}}</td>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->id_card_number}}</td>
                    <td>{{$patient->address}}</td>
                    <td>{{$patient->phone}}</td>
                    <td>{{$patient->birth_date}}</td>
                    <td>{{$patient->id_card_type}}</td>
                    <td>{{$patient->bpjs_status}}</td>
                    <td>
                        <a href="{{route('patient.edit',['patient'=>$patient])}}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('patient.delete',['patient'=>$patient])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</body>
</html>