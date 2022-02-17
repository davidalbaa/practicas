<div class="mb-3">
    <label for="name" class="form-label">Nombre del curso</label>
    {{ inputCustom([
        'tipo' => 'text',
        'filename' => 'name',
        'value' => $item->name,
    ]) }}
</div>

<a href="" class="btn btn-outline-danger">Regresar</a>
<button type="submit" class="btn btn-success">{{ $btnTxt }}</button>
