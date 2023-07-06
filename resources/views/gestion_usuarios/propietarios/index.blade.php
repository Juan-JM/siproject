<x-layouts.index 
    title="Propietarios" :route-create="route('propietarios.create')"
    tooltip="un propietario" :headers="['CI','Nombre','Correo electronico','Telefono','Hoteles']" :data="$propietarios">
    @if ($propietarios)
    @foreach ($propietarios as $propietario)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $propietario->ci }}</td>
        <td>{{ $propietario->nombre }}</td>
        <td>{{ $propietario->correo }}</td>
        <td>{{ $propietario->telefono }}</td>
        <td>
        @foreach ($propietario->hoteles() as $hotel)
            {{ $hotel->nombre }}    
        @endforeach
        </td>
        <td>
            <div class="d-flex">
                <x-btn.edit :route="route('propietarios.edit', $propietario)" />
                <x-btn.delete :route="route('propietarios.destroy', $propietario)" :modal-id="$propietario->ci"/>
            </div>
        </td>
    </tr>
    @endforeach
    @else
    <tr>
        <td class="text-center">No hay propietarios registrados</td>
    </tr>
    @endif
</x-layouts.index>