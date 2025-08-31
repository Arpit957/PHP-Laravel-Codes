 <div class="form-group mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
        <span class="text-danger">
            @error('name')
                {{ $message }}
            @enderror
    </div>