{{$wishfor->owned}}
    @if ($wishfor->owned)
        {!! Form::open(['route' => ['owned.unget', $wishfor->id], 'method' => 'delete']) !!}
            {{ Form::hidden('owned', 0) }}
            {!! Form::submit('Have',['class' => "btn btn-outline-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['owned.get', $wishfor->id]]) !!}
            {{ Form::hidden('owned', 1) }}
            {!! Form::submit('Get', ['class' => "btn btn-outline-info btn-block"]) !!}
        {!! Form::close() !!}
    @endif