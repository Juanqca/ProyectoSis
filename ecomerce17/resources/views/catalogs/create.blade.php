<html>
<head>
    <style>
        .label {
            font-style: italic;
        }
    </style>
</head>
<body>
<h1>Crear nuevo catalogo</h1>
<form method="post" action="/ecomerce17/public/catalogs/save">
    <span class="label">Nombre: </span><input type="text" id="name" name="name"><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <span class="label">Descripcion: </span><input type="text" id="description" name="description"><br>
    <input type="submit" value="Guardar">
</form>

</body>
</html>