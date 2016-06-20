{!! Form::open(['route' => 'register.process','method' => 'post']) !!}

    {!! Form::text('name', null, ['id' => 'name']) !!}
    {!! Form::email('email', null, ['id' => 'mail']) !!}
    {!! Form::password('password', null, ['id' => 'password']) !!}
    {!! Form::password('password_confirmation', null, ['id' => 'password_confirmation']) !!}
    {!! Form::submit('Login') !!}
{!! Form::close() !!}
