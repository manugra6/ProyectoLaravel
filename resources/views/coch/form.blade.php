<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('piloto1') }}
            {{ Form::text('piloto1', $coch->piloto1, ['class' => 'form-control' . ($errors->has('piloto1') ? ' is-invalid' : ''), 'placeholder' => 'Piloto1']) }}
            {!! $errors->first('piloto1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piloto2') }}
            {{ Form::text('piloto2', $coch->piloto2, ['class' => 'form-control' . ($errors->has('piloto2') ? ' is-invalid' : ''), 'placeholder' => 'Piloto2']) }}
            {!! $errors->first('piloto2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piloto3') }}
            {{ Form::text('piloto3', $coch->piloto3, ['class' => 'form-control' . ($errors->has('piloto3') ? ' is-invalid' : ''), 'placeholder' => 'Piloto3']) }}
            {!! $errors->first('piloto3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_coche') }}
            {{ Form::text('numero_coche', $coch->numero_coche, ['class' => 'form-control' . ($errors->has('numero_coche') ? ' is-invalid' : ''), 'placeholder' => 'Numero Coche']) }}
            {!! $errors->first('numero_coche', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('n_escuderia') }}
            {{ Form::text('n_escuderia', $coch->n_escuderia, ['class' => 'form-control' . ($errors->has('n_escuderia') ? ' is-invalid' : ''), 'placeholder' => 'N Escuderia']) }}
            {!! $errors->first('n_escuderia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen_coche') }}
            {{ Form::text('imagen_coche', $coch->imagen_coche, ['class' => 'form-control' . ($errors->has('imagen_coche') ? ' is-invalid' : ''), 'placeholder' => 'Imagen Coche']) }}
            {!! $errors->first('imagen_coche', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>