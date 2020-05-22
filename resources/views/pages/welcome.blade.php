@extends('layouts.master')
@section('content')
    <x-header></x-header>
    <x-section view="hero" :heading="$hero['heading']"/>
    <x-section :items="$features['items']" :heading="$features['heading']" view="feature"/>
    <x-section :items="$blog['items']" :heading="$blog['heading']" view="blog"/>
    <x-footer/>
@endsection


