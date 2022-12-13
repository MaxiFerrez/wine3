<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensajes</title>
   <link rel="stylesheet" href="{{asset('app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <section>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mensajes</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mensajes as $mensaje)
                    <tr>
                        <td>{{$mensaje->id}}</td>
                        <td>{{$mensaje->asunto}}</td>
                        <td>{{$mensaje->mensaje}}</td>
                        <td><a href="{{route('mensajes.show',$mensaje->id)}}" class="btn btn-primary">Ver</a></td>
                        <td>
                            <form action="{{route('mensajes.destroy',$mensaje->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button >    
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </section>
</body>
</html>