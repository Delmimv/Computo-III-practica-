Listado de mascotas

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->age }}</td>
            <td>
                <form method="POST" action="{{ url('/pet/'. $pet->id) }}">
                @csrf
                <a href="{{ url('/pet/'. $pet->id . '/edit') }}">Editar</a>
                {{ method_field('DELETE') }}
                <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbodyt
</table>