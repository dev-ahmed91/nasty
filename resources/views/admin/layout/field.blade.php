@if(in_array($type, ['text', 'file']))
    <div class="form-group col-md-{{$cols}} bmd-form-group  @error($name) has-danger @enderror">
        <label for="{{ $name }}"> {{ $label }} @error($name) ({{ $message }}) @enderror</label>
        @php ($default = $form ? $form->$name : '' )
        <input name="{{ $name }}" id="{{ $name }}" type="{{ $type }}" value="{{ old($name, $default) }}" class="form-control">
    </div>
@endif

@if(in_array($type, ['disabled']))
    <div class="form-group col-md-{{$cols}} bmd-form-group  @error($name) has-danger @enderror">
        <label for="{{ $name }}"> {{ $label }} @error($name) ({{ $message }}) @enderror</label>
        @php ($default = $form ? $form->$name : '' )
        <input name="{{ $name }}" id="{{ $name }}" type="text" disabled value="{{ old($name, $default) }}" class="form-control">
    </div>
@endif

@if(in_array($type, ['password']))
    <div class="form-group col-md-{{$cols}} bmd-form-group  @error($name) has-danger @enderror">
        <label for="{{ $name }}"> {{ $label }} @error($name) ({{ $message }}) @enderror</label>
        <input name="{{ $name }}" id="{{ $name }}" type="{{ $type }}" value="" class="form-control">
    </div>
@endif

@if(in_array($type, ['toggle']))
    <div class="form-group col-md-{{$cols}}">
        @php ($default = $form ? old($name, $form->$name) : old($name) )
        <input id="{{$name}}" @if($default) checked @endif type="checkbox"  value="1" class="form-check-input @error($name) text-danger @enderror" name="{{ $name }}">
        <label for="{{ $name }}" class="form-check-label @error($name) text-danger @enderror">{{ $label  }}</label>
    </div>
@endif

@if(in_array($type, ['select']))
    <div class="form-group col-md-{{$cols}}">
        @php ($default = $form ? old($name, $form->$name) : old($name) )
        <select id="{{$name}}"  @if($required) required @endif class="form-control @error($name) text-danger @enderror" name="{{ $name }}">
            <option {{ $default == '' ? 'selected' : '' }}  value="">{{ $label }} @error($name) ({{ $message }}) @enderror</option>
            @foreach($options as $key => $option)
                <option {{ $default == $key ? 'selected' : '' }} value="{{ $key }}">{{ $option }}</option>
            @endforeach
        </select>s
    </div>
@endif


@if(in_array($type, ['hidden']))
    <div class="form-group col-md-{{$cols}}  @error($name) has-danger @enderror">
        @php ($default = $form ? $form : '' )
        <input name="{{ $name }}" type="hidden" value="{{ $default }}" class="form-control">
    </div>
@endif
