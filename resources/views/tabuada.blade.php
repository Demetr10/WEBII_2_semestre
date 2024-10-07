<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TABUADA </title>
</head>
<body>
    <h1>tabuada do {{$n }} </h1>
    @for($i=1; $i<=10; $i++)
        <p>{{ $n }} * {{ $i }} = {{$n * $i }}</p>
         <img src="./img/dogs.JPG" alt="img" height "5px" width"5px">
    @endfor    
</body>
</html>