<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1 MVC /Larabel</title>
</head>
<body>
    <center>
    <h3 aling=center>Numeros Factoriales.</h3>
    <form action="{{route('resultado_pr2')}}" method="post">
        {{csrf_field()}}
        <label > Digite un numero entero para la serie:</label>
            <input type="number" name="numero1" placeholder="Solo numeros!!">
            <br>
            <input type="submit" name="btn_enviar" value="Pegalo">
        </center>
    </form>
</body>
</html>