<x-layouts.form title="Agregar un Usuario" :route="route('usuarios.store')" method="POST"
    :btn-secondary-route="route('usuarios.index')" btn-secondary-text="Ver Usuarios">
    <x-form-input name="nombre" label="Nombre de Usuario" type="text" defect=""/>
    <x-form-input name="contrasenia" label="Contraseña" type="password" defect=""/>
    <x-form-select name="id_rol" label="Rol" text-option="Seleccione un rol"
        :options="$roles" value="id" defect="" :value-text="['nombre']"
        no-options-text="No puede agregar usuario, primero debe agregar al menos un rol." />
    <x-form-select name="ci_personal" label="Personal" text-option="Seleccione un empleado"
        :options="$empleados" value="ci" defect="" :value-text="['apellidos','nombres']"
        no-options-text="No puede agregar usuario, primero debe agregar al menos un empleado." />
</x-layouts.form>