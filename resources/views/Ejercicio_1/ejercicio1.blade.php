<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promedio de notas</title>
</head>
<body>
    <center>
        <h2>Promedio de notas - 2022</h2>

        <form action="{{route('resultado_ejr1')}}" method="post">
            {{ csrf_field() }}
            <label>Valor de los tres parciales:</label><br>
                <input type="number" name="parcial1" placeholder="Primer Parcial" step="0.1"><br>
                <input type="number" name="parcial2" placeholder="Segundo Parcial" step="0.1"><br>
                <input type="number" name="parcial3" placeholder="Tercer parcial" step="0.1"><br>
            <br><br>
            <label>Digite nota de la practica</label>
            <input type="number" name="practica" placeholder="Nota de Practicas" step="0.1"><br>

            <label>Digite la nota del examen final:</label>
            <input type="number" name="nota_final" placeholder="Examen final" step="0.1" required><br>

            <input type="submit" name="btn_enviar" value="Continuar">
            
        </form>
    </center>
    
</body>
</html>