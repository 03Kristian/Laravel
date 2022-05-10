<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Usted digito el numero: {{$numero1}}</h1>
    {{$a=0;}}
    @while ($a < $numero1)
        {{$a+= 1;}}
        
    @endwhile
        
</body>
</html>