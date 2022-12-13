<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wine3</title>
</head>
<body>
    <h1>HOLA MUNDO</h1>

    <form action="{{route('mensajes.store')}}" method="POST">
    @csrf
    <div>
        <label for="nombre" class="form-label">Email</label>
        <input type="email" class="form-control"name="email" id="email">
    </div>
    <div>
        <label for="asunto" class="form-label">Asunto</label>
        <input type="text" class="form-control"name="asunto" id="asunto">
    </div>
    
    <textarea name="mensaje"  class="form-control" id="mensaje" cols="30" rows="10">Escriba su consulta 
        </textarea>
    </div>
    <input type="submit" class="btn btn-danger" value="Enviar">


    </form>
    
</body>
</html>