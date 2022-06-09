@extends('layouts.app')
@section('content')

        <h3> Here are some sample of our product </h3>
        
        <ul>
        @foreach($products as $pp)
        <li> {{$pp}} </li>
        @endforeach
        <ul>
 @endsection