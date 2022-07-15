<!DOCTYPE html>
<html>
    <head>
<meta charset = "UTF-8">
<title> Document</title>
    </head>
    <body>
@extends('layouts.app')

@section('content')

<form method="get" action="/posts">

{{csrf_field)()}}

    <input type="text" name="title" placeholder="Enter title">

    <input type="submit" name="submit">
    
</form>

@if(count($people))
<ul>
    @foreach($people as $person)
    <li>{{$person}}</li>
    @endforeach
</ul>
@endif

@stop