<x-layouts.index title="Personal" :route-create="route('personal.create')"
    tooltip="personal" 
    :headers="['CI','Nombres','Apellidos','Telefono','Correo electronico','Sexo','Domicilio','Cargo']" :data="$empleados">
    @if ($empleados)
    @foreach ($empleados as $empleado)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $empleado->ci }}</td>
        <td>{{ $empleado->nombres }}</td>
        <td>{{ $empleado->apellidos }}</td>
        <td>{{ $empleado->telefono }}</td>
        <td>{{ $empleado->correo }}</td>
        <td>
            @if ($empleado->sexo == 'M')
            Masculino
            @else
            Femenino
            @endif
        </td>
        <td>{{ $empleado->domicilio }}</td>
        <td>{{ $empleado->Cargo->nombre }}</td>
        <td>
            <div class="d-flex">
                <x-btn.edit :route="route('personal.edit', $empleado)" />
                <x-btn.delete :route="route('personal.destroy', $empleado)" :modal-id="$empleado->ci"/>
            </div>
        </td>
    </tr>
    @endforeach
    @else
    <tr>
        <td class="text-center">No hay personal registrado</td>
    </tr>
    @endif
</x-layouts.index>