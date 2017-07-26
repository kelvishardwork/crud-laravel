<div class="form-group">
    {!! Form::label('name', 'Nome do produto') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('short', 'Resumo do produto') !!}
    {!! Form::text('short',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Descrição do produto') !!}
    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR',['class'=>'btn btn-primary']) !!}
</div>