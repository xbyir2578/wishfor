{!! Form::open(['route' => 'wishfor.store']) !!}
    <div class="form-group">
        {!! Form::text('url', null, ['class' => 'form-control']) !!}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '1']) !!}
        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}