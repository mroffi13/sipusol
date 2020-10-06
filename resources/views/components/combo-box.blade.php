<div class="form-group">
    <label for="{{$id}}">{{$label}}</label>
    <select name="{{$name}}" id="{{$id}}" {{$type}} class="form-control select2">
        {{$slot}}
    </select>
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>