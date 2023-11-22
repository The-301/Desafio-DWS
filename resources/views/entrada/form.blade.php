<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('tipo_entrada', 'Tipo de Entrada') }}</label>
    <div>
        {{ Form::text('tipo_entrada', $entrada->tipo_entrada, ['class' => 'form-control' .
        ($errors->has('tipo_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Entrada']) }}
        {!! $errors->first('tipo_entrada', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Tipo de entrada: <b>tipo_entrada</b></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('monto_salida', 'Monto de Entrada') }}</label>
    <div>
        {{ Form::text('monto_salida', $entrada->monto_salida, ['class' => 'form-control' .
        ($errors->has('monto_salida') ? ' is-invalid' : ''), 'placeholder' => 'Monto de Entrada']) }}
        {!! $errors->first('monto_salida', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Monto de entrada: <b>monto_entrada</b></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('fecha', 'Fecha') }}</label>
    <div>
        {{ Form::text('fecha', $entrada->fecha, ['class' => 'form-control' .
        ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
        {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Fecha: <b>fecha</b></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('factura', 'Subir Factura') }}</label>
    <div>
        {{ Form::file('factura', ['class' => 'form-control-file' . ($errors->has('factura') ? ' is-invalid' : '')]) }}
        {!! $errors->first('factura', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Sube la factura: <b>factura</b></small>
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
