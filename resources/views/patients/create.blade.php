<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <h1>Register New Patient</h1>
    </header>
    
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