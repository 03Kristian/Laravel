<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result_1</title>
</head>
<body>
    <center>
        <h3>Promedio del estudiante: <br> {{$promedio}}</h3>
        {{-- <h3>Promedio del estudiante: <br> {{number_format($nota_superfinal)}}</h3> --}}
        <h3><span style="color: blue">Porcentajes:</span></h3>
        <h3>parciales: <br> {{$L}}</h3>
        <h3>practicas: <br> {{$resultado3}}</h3>
        <h3>examen: <br> {{$resultado3}}</h3>

        {{-- <label> Nota:</label>
        {{$Nota = $L+$resultado2+$resultado3}} --}}
        
    </center>
</body>
</html>