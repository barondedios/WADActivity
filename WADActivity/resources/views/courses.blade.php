<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        {{-- <h1>Courses for {{ $user->name }}</h1> --}}
        
    <h2> Courses {{$course->user}}</h2>
        
        <h3>Course: </h3>{{ $course->name }} 
        <h3>Course Description: </h3>{{ $course->description }}


       
    </div>

</body>
</html>