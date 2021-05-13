<x-menu>
    <x-slot name="slot">
        <div align="center">Alumnos</div>
        <table class="table">
            <a href="{{route('alumnos.create')}}" class="btn btn-outline-danger my-2"><i class="fas fa-plus-circle"></i> Crear alumno</a>
            <tr class="rounded text-white" style="background-color: #dc3545">
                <th>Id</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Teléfonos</th>
                <th>&nbsp;</th>
            </tr>
            @foreach($alumnos as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}} {{$item->apellidos}}</td>
                <td>{{$item->dni}}</td>
                <td>{{$item->telefono}}<br>{{$item->telefono2}}</td>
                <td>
                    <a href="{{route('alumnos.show', $item)}}"><i class="fas fa-eye"></i></a>
                    <a href="{{route('alumnos.edit', $item)}}"><i class="fas fa-edit"></i></a>
                </td>
                
            </tr>
            @endforeach
        </table>
        <div class="float-right mx-3">
            {{$alumnos->appends($request->except('page'))->links()}}
        </div>
    </x-slot>

</x-menu>