<x-layouts.form title="Editar Propietario" :route="route('propietarios.update', $propietario)" method="PUT"
    :btn-secondary-route="route('propietarios.index')" btn-secondary-text="Ver Propietarios">
    <x-form-input name="ci" label="Carnet de Identidad" type="text" :defect="$propietario->ci"/>
    <x-form-input name="nombre" label="Nombres" type="text" :defect="$propietario->nombre"/>
    <x-form-input name="correo" label="Correo Electrónico" type="email" :defect="$propietario->correo"/>
    <x-form-input name="telefono" label="Telefono" type="numeric" :defect="$propietario->telefono"/>
</x-layouts.form>