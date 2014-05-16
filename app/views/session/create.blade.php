@extends('layout.base')

@section('content')
    <h1>Login</h1>
    <table>
        <tbody>
            {{ Form::open( array('method' => 'POST', 'action' => 'SessionController@create')) }}

                <tr>
                    <td>{{ Form::label('email') }}</td>
                    <td>{{ Form::label('password') }}</td>
                </tr>

                <tr>
                    <td>{{ Form::email('email') }}</td>
                    <td>{{ Form::password('password') }}</td>
                </tr>

                <tr>
                    <td>{{ Form::submit() }}</td>
                </tr>

            {{ Form::close() }}
        </tbody>
    </table>
@stop