<div class="form-group">
    <label for="{{$id}}">{{$label}}</label>
        <input type="{{$type}}" name="{{$name}}" id="{{$id}}" class="form-control" value="{{ old($name) }}">
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>