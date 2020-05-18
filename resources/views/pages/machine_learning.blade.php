@extends('layouts.master')
@section('content')

    <x-header/>
    <x-section :items="$hero" :heading="$hero['heading']" view="hero2" />
    <x-section :items="$feature['items']" :heading="$feature['heading']" view="feature2" />
    <x-section :items="$story['items']" :heading="$story['heading']" view="story"/>
    <x-section :items="$feature2['items']" :heading="$feature2['heading']" view="feature3" />
    <x-section :items="$manager['items']" :heading="$manager['heading']" view="manager"/>
    <x-section :items="$call['items']" :heading="$call['heading']" view="call_to_action"/>
    <x-footer/>



@endsection

