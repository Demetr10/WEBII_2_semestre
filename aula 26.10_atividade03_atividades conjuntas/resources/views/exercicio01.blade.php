<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    @php
        $a = 0;
    @endphp

    @foreach ($num as $i)
        <p>
            @php
                $resu = $i ** 2;
                echo $resu;
                $a++;
            @endphp
        </p>

        @if ($a == 3 && $resu >= 100)
            @php
                echo "entrou " . $i;
            @endphp
        @endif
    @endforeach
</body>
</html>
