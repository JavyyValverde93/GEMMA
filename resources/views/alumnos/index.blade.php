<x-menu>
    <x-slot name="slot">
        <label class="mx-auto">Alumnos</label>
        <table class="table">
            <a href="{{route('alumnos.create')}}" class="btn btn-outline-danger"><i class="fas fa-plus-circle"></i> Crear alumno</a>
            <tr class="rounded text-white" style="background-color: #dc3545">
                <th class="esquina-izquierda-arriba">Id</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Teléfonos</th>
                <th class="esquina-derecha-arriba">Correos</th>
            </tr>
            @foreach($alumnos as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}} {{$item->apellidos}}</td>
                <td>{{$item->dni}}</td>
                <td>{{$item->telefono}}<br>{{$item->telefono2}}</td>
                <td>{{$item->email}}<br>{{$item->email2}}</td>
                
            </tr>
            @endforeach
        </table>
    </x-slot>

</x-menu>