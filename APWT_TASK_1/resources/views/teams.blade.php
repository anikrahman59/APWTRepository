@extends('layouts.app')
@section('content')

        <h3> Our Team members : </h3>
        
        <ul>
        @foreach($teams as $t)
        <li> {{$t}} </li>
        @endforeach
        <ul>
@endsection