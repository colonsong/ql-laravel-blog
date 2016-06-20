{!! Form::open(['route' => 'login.process','method' => 'post']) !!}

    {!! Form::email('email', null, ['id' => 'email']) !!}
    {!! Form::password('password', null, ['id' => 'password']) !!}
    {!! Form::checkbox('remember', 1, true, ['id' => 'remember']) !!}

    {!! Form::submit('submit') !!}
{!! Form::close() !!}