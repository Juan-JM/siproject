<x-layouts.form title="Editar un Cargo" :route="route('cargos.update', $cargo)" method="PUT"
    :btn-secondary-route="route('cargos.index')" btn-secondary-text="Ver Cargos">
    <x-form-input name="nombre" label="Nombre" type="text" :defect="$cargo->nombre"/>
</x-layouts.form>