<div class="col mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input name="{{ $name }}" type="{{ $type }}" value="{{ old($name, $defect) }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}">
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>    
    @enderror
</div>