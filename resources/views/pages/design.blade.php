@extends('layouts.master')
@section('content')


    <x-header/>
    <x-section :heading="$hero['heading']" view="hero1"/>
    <x-section :items="$story['items']" :heading="$story['heading']" view="story"/>
    <x-section :items="$feature['items']" :heading="$feature['heading']" view="feature1"/>
    <x-section :items="$manager['items']" :heading="$manager['heading']" view="manager"/>
    <x-section :items="$call['items']" :heading="$call['heading']" view="call_to_action"/>
    <x-footer/>



@endsection

