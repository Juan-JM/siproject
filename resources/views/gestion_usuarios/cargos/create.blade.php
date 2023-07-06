<x-layouts.form title="Agregar un Cargo" :route="route('cargos.store')" method="POST"
    :btn-secondary-route="route('cargos.index')" btn-secondary-text="Ver Cargos">
    <x-form-input name="nombre" label="Nombre" type="text" defect=""/>
</x-layouts.form>