{{$wishfor->owned}}
    @if (Auth::user()->owned($wishfor->owned))
        {!! Form::open(['route' => ['owned.unget', $wishfor->id, 'method' => 'delete']]) !!}
            {!! Form::submit('Have',['class' => "btn btn-outline-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['owned.get', $wishfor->id]]) !!}
            {!! Form::submit('Get', ['class' => "btn btn-outline-info btn-block"]) !!}
        {!! Form::close() !!}
    @endif