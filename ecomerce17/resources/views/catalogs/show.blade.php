<html>
<head>
    <style>
        .label {
            font-style: italic;
        }
    </style>
</head>
<body>
<h1>Deatalle del catalogo</h1>
<span class="label">ID: </span>{{$catalog->id}}<br>
<span class="label">Nombre: </span>{{$catalog->name}}<br>
<span class="label">Descripcion: </span>{{$catalog->description}}<br>
<span class="label">Creado en Fecha: </span>{{$catalog->created_at}}<br>


</body>
</html>