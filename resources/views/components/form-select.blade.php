<div class=" col mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select name="{{ $name }}" class="form-select @error($name) is-invalid @enderror" id="{{ $name }}">
        <option selected disabled>{{ $textOption }}</option>
        @if ($options)
        @foreach ($options as $option)
            <option value="{{ $option->$value }}" @selected($option->$value == old($name, $defect))>
                {{ implode(' ', array_map(function($field) use ($option) { 
                    return $option->$field; }, $valueText)) }}
            </option>
        @endforeach
        @else
        <option>{{ $noOptionsText }}</option>
        @endif
    </select>
    @error($name)
    <div class="invalid-feedback">Seleccione una opción valida.</div>    
    @enderror
</div>