@extends('layouts.default')

@section('items')
        

        <li>
        {{ Form::open(['route' => 'users.store']) }}
        <div id="form">
            <ul>
                <li>
                    <div id="item">New User</div>
                </li>
                <li>
                    <div id="textareasOut">
                    <div id="textareasIn">
                        {{ Form::label('username', 'Username: ') }}
                        {{ Form::text('username') }}
                        <br>
                        {{ Form::label('password', 'Password: ') }}
                        {{ Form::password('password') }}
                    </div>
			{{ Form::submit('Make me a user!!!') }}
                    </div>
                </li>
            </ul>
        </div>
        {{ Form::close() }}
        
        </li>

@stop