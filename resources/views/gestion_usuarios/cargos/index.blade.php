<x-layouts.index 
    title="Cargos" :route-create="route('cargos.create')"
    tooltip="un cargo" :headers="['Nombre']" :data="$cargos">
    @if ($cargos)
    @foreach ($cargos as $cargo)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $cargo->nombre }}</td>
        <td>
            <div class="d-flex">
                <x-btn.edit :route="route('cargos.edit', $cargo)" />
                <x-btn.delete :route="route('cargos.destroy', $cargo)" :modal-id="$cargo->id"/>
            </div>
        </td>
    </tr>
    @endforeach
    @else
    <tr>
        <td class="text-center">No hay cargos registrados</td>
    </tr>
    @endif
</x-layouts.index>