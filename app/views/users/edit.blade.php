@extends('layouts.profile')

@section('menu')
        
        <li>
            {{ link_to("/users/{$user->UserName}", "Peruse Llamas") }}
        </li>
        
        <li>
            {{ link_to("/", "Sign Out") }}
        </li>
@stop

@section('content')
{{ Form::open(['route' => "users.update"]) }}
<div class="profile">
        <ul>
            <li>
                <svg width="160" height="160">
                    <rect class="pic" x="5" y="5" width="150" height="150" />
                </svg> 
            </li>
            <li>
                <div class="user-name">{{$user->UserName}}</div>
                <div class="edit-info">
                    <ul>
                        <li>
                    <div id="textareasOut">
                    <div id="textareasIn">
                        {{ Form::label('username', 'Username: ') }}
                        {{ Form::text('username', $user->UserName) }}
                        <br>
                        {{ Form::label('password', 'Password: ') }}
                        {{ Form::text('password', $user->Password) }}
                        <br>
                        {{ Form::label('password', 'Gender: ') }}
                        {{ Form::select('Gender',['Male', 'Female', 'TransLlama', 'NonGendered'], $user->Gender) }}
                    </div>
                    </div>
                </li>
                <li>
                    <div id="textareasOut">
                    <div id="textareasIn">
                        {{ Form::label('LookingFor', 'Looking For: ') }}
                        {{ Form::select('LookingFor',['Male', 'Female', 'TransLlama', 'NonGendered'], $user->SexualOrientation) }}
                        <br>
                        {{ Form::label('FurColor', 'Fur Color: ') }}
                        {{ Form::text('FurColor', $user->FurColor) }}
                        <br>
                        {{ Form::label('CommitmentLevel', 'Commitment Level: ') }}
                        {{ Form::select('CommitmentLevel',['Mild Eye Contact', 'Hoofing', 'Prancing', 'Elope to Peru'], $user->Type) }}
                    </div>
                    </div>
                </li>
                <li>
                    <div id="textareasOut">
                    <div id="textareasIn">
                        {{ Form::label('Interests', 'Interests: ') }}
                        {{ Form::text('Interests', $user->Interests) }}
                        <br>
                        {{ Form::label('Email', 'Email: ') }}
                        {{ Form::text('Email', $user->Email) }}
                        <br>
                        {{ Form::submit('Update Profile') }}
                    </div>
                    </div>
                </li>
                        
                    </ul>
                </div>
            </li>
        </ul>
    </div>
        
{{ Form::close() }}
@stop