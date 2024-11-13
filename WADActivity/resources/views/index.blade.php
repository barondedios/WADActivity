<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h1>All User Profiles</h1>
    <ul>
        @foreach($profiles as $profile)
            <li>
                <strong>{{ $profile->user->name }}</strong><br>
                Email: {{ $profile->user->email }}<br>
                Profile Bio: {{ $profile->bio }}  <!-- Assuming the Profile model has a bio attribute -->
                
            </li>
        @endforeach
    </ul>

</body>
</html>