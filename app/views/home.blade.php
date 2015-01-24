@extends('layouts.default')

@section('items')
        <li>
            <div id="link">{{ link_to("/signIn", "Sign In") }}</div>
        </li>
        
        <li>
            <div id="link">{{ link_to("/users/create", "New User") }}</div>
        </li>
        
@stop