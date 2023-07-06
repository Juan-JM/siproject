<x-layouts.form title="Editar Usuario" :route="route('usuarios.update', $usuario)" method="PUT"
    :btn-secondary-route="route('usuarios.index')" btn-secondary-text="Ver Usuarios">
    <x-form-input name="nombre" label="Nombre de Usuario" type="text" :defect="$usuario->nombre"/>
    <x-form-input name="contrasenia" label="Contraseña" type="password" defect=""/>
    <x-form-select name="id_rol" label="Rol" text-option="Seleccione un rol"
        :options="$roles" value="id" :defect="$usuario->id_rol" :value-text="['nombre']"
        no-options-text="No puede agregar usuario, primero debe agregar al menos un rol." />
    <x-form-select name="ci_personal" label="Personal" text-option="Seleccione un empleado"
        :options="$empleados" value="ci" :defect="$usuario->ci_personal" :value-text="['apellidos','nombres']"
        no-options-text="No puede editar usuario, primero debe agregar al menos un empleado." />
</x-layouts.form>