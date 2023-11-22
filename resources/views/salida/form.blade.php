
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tipo_salida') }}</label>
    <div>
        {{ Form::text('tipo_salida', $salida->tipo_salida, ['class' => 'form-control' .
        ($errors->has('tipo_salida') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Salida']) }}
        {!! $errors->first('tipo_salida', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">salida <b>tipo_salida</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('monto_salida') }}</label>
    <div>
        {{ Form::text('monto_salida', $salida->monto_salida, ['class' => 'form-control' .
        ($errors->has('monto_salida') ? ' is-invalid' : ''), 'placeholder' => 'Monto Salida']) }}
        {!! $errors->first('monto_salida', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">salida <b>monto_salida</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_salida') }}</label>
    <div>
        {{ Form::text('fecha_salida', $salida->fecha_salida, ['class' => 'form-control' .
        ($errors->has('fecha_salida') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Salida']) }}
        {!! $errors->first('fecha_salida', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">salida <b>fecha_salida</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('factura_salida', 'Factura Salida') }}</label>
    <div>
        {{ Form::file('factura_salida', ['class' => 'form-control-file' . ($errors->has('factura_salida') ? ' is-invalid' : '')]) }}
        {!! $errors->first('factura_salida', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Sube la factura de salida: <b>factura_salida</b></small>
    </div>
</div>


    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
