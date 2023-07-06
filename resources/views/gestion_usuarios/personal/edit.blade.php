<x-layouts.form title="Editar Personal" :route="route('personal.update', $personal)" method="PUT"
    :btn-secondary-route="route('personal.index')" btn-secondary-text="Ver Personal">
    <x-form-input name="ci" label="Carnet de Identidad" type="text" :defect="$personal->ci"/>
    <x-form-input name="nombres" label="Nombres" type="text" :defect="$personal->nombres"/>
    <x-form-input name="apellidos" label="Apellidos" type="text" :defect="$personal->apellidos"/>
    <x-form-input name="telefono" label="Telefono" type="text" :defect="$personal->telefono"/>
    <x-form-input name="correo" label="Correo Electrónico" type="email" :defect="$personal->correo"/>
    <x-sexo-select :defect="$personal->sexo"/>
    <x-form-input name="domicilio" label="Domicilio" type="text" :defect="$personal->domicilio"/>
    <x-form-select name="id_cargo" label="Cargo" text-option="Seleccione un cargo"
        :options="$cargos" value="id" :defect="$personal->id_cargo" :value-text="['nombre']"
        no-options-text="No puede agregar personal, primero debe agregar al menos un cargo." />
</x-layouts.form>