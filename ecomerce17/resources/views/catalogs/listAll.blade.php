<html>
<body>
<h1>Listado de Catalogos</h1>
<a href="/ecomerce17/public/catalogs/create">Nuevo</a>
<table>
    <tr>
        <th>ACCIONES</th>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCIÓN</th>
    </tr>
     @foreach($catalogs as $catalog)
        <tr>
            <td>
                <a href="/ecomerce17/public/catalogs/show/{{$catalog->id}}">Ver</a>
            </td>
            <td>{{$catalog->id}}</td>
            <td>{{$catalog->name}}</td>
            <td>{{$catalog->description}}</td>
        </tr>
     @endforeach

</table>

</body>
</html>