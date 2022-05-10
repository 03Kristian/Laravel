<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salario Empleado</title>
</head>

<body>
    <center>
        <h2><span style="color: darkorange">Liquidacion del empleado</span>:</h2>
<form action="{{route('resultado_ejr3')}}" method="post">
    {{ csrf_field() }}
        <label> Nombre del empleado:</label>
        <input type="text" name="nombre" placeholder="Nombre completo"><br>
            <br>
        <label> Horas trabajadas en el mes:</label>
        <input type="number" name="horas" placeholder="00"><br>
            <br>
        <label> Valor por hora:</label>
        <input type="number" name="vrl_hora" placeholder="Pago por hora"><br>
            <br>
        <label> Bonificación: </label>
        <input type="number" name="bono"><br>
            <br>
        <label> Auxilio de transporte: </label>
        <input type="number" name="ax_transporte" id=""><br>
            <br>
        <label>Credito:</label>
        <input type="number" name="credito"><br>
            <br>
        <input type="submit" name="btn_enviar" value="Calcular">
    </form>
    </center>
</body>

</html>
