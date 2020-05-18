@extends('layouts.master')
@section('content')
    <x-header></x-header>

    <section class="section section-story section-story-about">
        <div class="display-spacing">
            <div class="container story-container display-spacing">
                <x-section :items="$heading" view="heading"/>
                <div class="row">
                    <div class="col-xl-12">
                        <form class="form form-1 max-w-768 div-center">
                            <div class="row">

                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-item">
                                        <input type="email" placeholder="Your Email"/>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-item">
                                        <input type="text" placeholder="Password"/>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="button button-block button-primary button-shape">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <x-footer/>
@endsection


