<div class="{{$input_grid ?? 'col-md-6' }}  form-group {{ $input_div_class ?? '' }}">
    <label
        for="{{ isset($input_id) ? $input_id : $input_name  }}">
        {{$input_label ?? 'label'}}
        <i class="{{ $input_icon ?? ''  }}"></i>
        <span class="text-danger"> {{ isset($input_red_star) ? '*' : ''  }} </span>
    </label>

    <input
        name="{{$input_name ?? ''}}"
        id="{{ isset($input_id) ? $input_id : $input_name  }}"
        type="{{$input_type ?? 'text'}}"
        class="form-control {{$input_class ?? ''}}"
        placeholder="{{$input_placeHolder ?? $input_label}}"
        value="{{$input_value ?? ''}}"
    />

    <span class="form-text {{ $input_warning_class ?? 'text-danger'  }}">
            {{ $input_warngin_message ?? '' }}
    </span>
</div>
