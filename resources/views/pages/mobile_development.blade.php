@extends('layouts.master')
@section('content')
    <x-header></x-header>
    <x-hero1 :hero="$hero"/>
    <x-feature :items="$features"/>
    <x-blog :items="$blog"/>
    <x-footer/>
@endsection


