<div class=" col mb-3">
    <label for="sexo" class="form-label">Sexo</label>
    <select name="sexo" class="form-select @error('sexo') is-invalid @enderror" id="sexo">
        <option selected disabled>Seleccione su genero</option>
        <option value="M" @selected("M" == old('sexo', $defect))>Masculino</option>
        <option value="F" @selected("F" == old('sexo', $defect))>Femenino</option>
    </select>
    @error('sexo')
    <div class="invalid-feedback">Seleccione una opción valida.</div>    
    @enderror
</div>