@extends('layout.base')

@section('content')
    <h1>Create</h1>
    <table>
        <tbody>
            {{ Form::open( array('method' => 'POST', 'action' => 'UserController@create')) }}

                <tr>
                    <td>{{ Form::label('first_name', 'First name') }}</td>
                    <td>{{ Form::label('last_name', 'Last name') }}</td>
                </tr>

                <tr>
                    <td>{{ Form::text('first_name') }}</td>
                    <td>{{ Form::text('last_name') }}</td>
                </tr>



                <tr>
                    <td>{{ Form::label('password', 'Password') }}</td>
                    <td>{{ Form::label('password_confirmation', 'Confirm password') }}</td>
                </tr>

                <tr>
                    <td>{{ Form::password('password') }}</td>
                    <td>{{ Form::password('password_confirmation') }}</td>
                </tr>


                <tr>
                    <td>{{ Form::label('email', 'Email address') }}</td>
                </tr>
                <tr>
                    <td>{{ Form::email('email') }}</td>
                </tr>


                <tr>
                    <td>{{ Form::label('username') }}</td>
                </tr>
                <tr>
                    <td>{{ Form::text('username') }}</td>
                </tr>

                <tr>
                    <td>{{ Form::submit() }}</td>
                </tr>

            {{ Form::close() }}
        </tbody>
    </table>
@stop