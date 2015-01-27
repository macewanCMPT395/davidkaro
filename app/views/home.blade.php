@extends('layouts.main')

@section('items')
        <li>
            <div id="link">{{ link_to("/users/create", "New") }}</div>
        </li>
        <li>
            <div id="link">{{ link_to("/signIn", "Returning") }}</div>
        </li>
        
        
@stop