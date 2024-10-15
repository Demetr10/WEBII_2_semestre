<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 03</title>
</head>
<body>
    
    @if($hrstrabalhadas>50)
        @php
         $salario = 50*10; 
         $excesso = $hrstrabalhadas - 50;
         $salario += $excesso * 20;
         @endphp

    @else
        @php
          $salario = 10 * $hrstrabalhadas;
        @endphp

    @endif

        <p>O salario do funcionario {{$ID}} é o salario {{$salario}}$ e os bonus {{$excesso}} horas</p>
</body>
</html>