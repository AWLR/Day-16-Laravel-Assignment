<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>

    @foreach($user as $id => $u)
    <h3>{{ $id }} Hello {{ $u['name'] }}</h3>
    <p>Phone No: {{ $u['phone'] }}</p>
    <p>City: {{ !empty($u['city']) ? $u['city'] : 'No City' }}</p>
    <p>Country: {{ !empty($u['country']) ? $u['country'] : 'No Country' }}</p>
    @endforeach

    

</body>
</html>


