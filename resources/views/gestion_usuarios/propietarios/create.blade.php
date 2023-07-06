<x-layouts.form title="Agregar Propietario" :route="route('propietarios.store')" method="POST"
    :btn-secondary-route="route('propietarios.index')" btn-secondary-text="Ver Propietarios">
    <x-form-input name="ci" label="Carnet de Identidad" type="text" defect=""/>
    <x-form-input name="nombre" label="Nombres" type="text" defect=""/>
    <x-form-input name="correo" label="Correo Electrónico" type="email" defect=""/>
    <x-form-input name="telefono" label="Telefono" type="text" defect=""/>
</x-layouts.form>