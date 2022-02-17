<input type="{{ $data['tipo'] }}" class="form-control @error($data['filename'])is-invalid @enderror"
    name="{{ $data['filename'] }}" value="{{ old($data['tipo'], $data['value']) }}">
{{ showErrors($errors->get($data['filename'])) }}
