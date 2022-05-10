<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <center>
        <h2><span style="color: rgb(60, 33, 193)">CALCULADORA</span> </h2>
        <form action="{{ route('resultado_ejr5') }}" method="post">
            {{ csrf_field() }}

            <label>Digite un numero:</label>
            <input type="number" name="numero1" placeholder="0" required><br>
            <label>Operador:</label>
            <input type="text" name="caracter" placeholder="operador" required><br>
            <label>Digite un segundo numero:</label>
            <input type="number" name="numero2" placeholder="0" required><br>



            <input type="submit" name="btn_enviar" value="Continuar">
        </form>
    </center>
</body>

</html>
