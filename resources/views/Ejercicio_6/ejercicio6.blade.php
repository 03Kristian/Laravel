<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2><span style="color: rgb(0, 68, 255)">Sueldo de un trabajor</span> </h2>
    
    <form action="{{route('resultado_ejr6')}}" method="post">
        {{ csrf_field() }}
        
        <label>Digite el sueldo del empleado:</label>
        <input type="number" name="sueldo" placeholder="00,000,000">

        <label>Digite una categoria:</label>
        <input type="number" name="clase" min="0" max="4"> <br>

        <input type="submit" name="btn_enviar" value="Enviar">
    </form>
</body>
</html>