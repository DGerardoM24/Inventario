<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_material') }}
            {{ Form::text('nombre_material', $materiale->nombre_material, ['class' => 'form-control' . ($errors->has('nombre_material') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Material']) }}
            {!! $errors->first('nombre_material', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desc_material') }}
            {{ Form::text('desc_material', $materiale->desc_material, ['class' => 'form-control' . ($errors->has('desc_material') ? ' is-invalid' : ''), 'placeholder' => 'Desc Material']) }}
            {!! $errors->first('desc_material', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $materiale->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $materiale->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>