@extends('layouts.default')

@section('items')

        <li>
        {{ Form::open() }}
        <div id="form">
            <ul>
                <li>
                    <div id="item">Sign In</div>
                </li>
                <li>
                    <div id="textareasOut">
                    <div id="textareasIn">
                        {{ Form::label('username', 'Username: ') }}
                        {{ Form::input('text','username') }}
                        <br>
                        {{ Form::label('password', 'Password: ') }}
                        {{ Form::input('text','password') }}
                    </div>
                    </div>
                </li>
            </ul>
        </div>
        {{ Form::close() }}
        
        </li>
        
@stop