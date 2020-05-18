@extends('layouts.master')
@section('content')
    <x-header></x-header>

    <x-section view="hero" :heading="$hero['heading']"/>
    <x-section :items="$feature['items']" :heading="$feature['heading']" view="feature4" />
    <x-section :items="$story['items']" :heading="$story['heading']" view="story2"/>
    <x-section :items="$call['items']" :heading="$call['heading']" view="call_to_action"/>
    <x-footer/>
@endsection


