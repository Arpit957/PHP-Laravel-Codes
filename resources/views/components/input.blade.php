 <div class="form-group mb-3">
        <label for="">{{ $label }}</label>
        <input type= {{ $label }} id="" name="{{ $label }}">
        <span class="text-danger">
            @error('name')
                {{ $message }}
            @enderror
    </div>