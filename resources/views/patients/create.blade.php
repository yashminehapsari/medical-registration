<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register New Patient</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('patient.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Id Card Number</label>
            <input type="text" name="id_card_number">
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address">
        </div>
        <div>
            <label>Phone</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label>Birth Date</label>
            <input type="date" name="birth_date">
        </div>
        <div>
            <label>Id Card Type</label>
            <div>
                <input type="radio" id="ktp" name="id_card_type" value="KTP">
                <label for="ktp">KTP</label><br>
                <input type="radio" id="kis" name="id_card_type" value="KIS">
                <label for="kis">KIS</label><br>
            </div>
        </div>
        <div>
            <label>BPJS Status</label>
            <div>
                <input type="radio" id="active" name="bpjs_status" value="active">
                <label for="active">Active</label><br>
                <input type="radio" id="non_active" name="bpjs_status" value="nonactive">
                <label for="nonactive">NonActive</label><br>
                <input type="radio" id="unregistered" name="bpjs_status" value="unregistered">
                <label for="unregistered">Unregistered</label><br>
            </div>
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
</body>
</html>