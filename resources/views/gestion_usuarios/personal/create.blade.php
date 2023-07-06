<x-layouts.form title="Agregar Personal" :route="route('personal.store')" method="POST"
    :btn-secondary-route="route('personal.index')" btn-secondary-text="Ver Personal">
    <x-form-input name="ci" label="Carnet de Identidad" type="text" defect=""/>
    <x-form-input name="nombres" label="Nombres" type="text" defect=""/>
    <x-form-input name="apellidos" label="Apellidos" type="text" defect=""/>
    <x-form-input name="telefono" label="Telefono" type="text" defect=""/>
    <x-form-input name="correo" label="Correo Electrónico" type="email" defect=""/>
    <x-sexo-select defect=""/>
    <x-form-input name="domicilio" label="Domicilio" type="text" defect=""/>
    <x-form-select name="id_cargo" label="Cargo" text-option="Seleccione un cargo"
        :options="$cargos" value="id" defect="" :value-text="['nombre']"
        no-options-text="No puede agregar personal, primero debe agregar al menos un cargo." />
</x-layouts.form>