<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('resultado_ejr4')}}" method="post">
        {{ csrf_field() }}
    <label for="">Numero</label>
    <input type="number" name="numero" placeholder="numero" id=""><br>

    <input type="submit" name="btn_enviar" value="enviar">
</form>
</body>
</html>