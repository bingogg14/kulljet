@extends('layouts.default')

@section('title', 'Kull Jet Company')
@section('description', 'Kull Jet Company Description')


@section('content_header')
    @include('includes.helpers.header.page_header',
    [
        'page_header_title' => 'Contacts',
        'page_header_description' => '
            <b style="font-size: 24px">Vladimir Palamar</b></br>
            <b style="font-size: 24px">+372 56 777 210</b></br></br>'
    ])
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-left">
                    <h2 class="title">Call us</h2>
                    <p class="contact">
                        <b>Phone number:</b></br>
                        <b style="font-size: 24px">+372 56 777 210</b></br>
                        <b style="font-size: 24px">+372 56 133 133</b></br>
                        <b style="font-size: 24px">+372 56 490 939</b></br>
                        <b style="font-size: 24px">+372 56 497 997</b></br>
                        <b style="font-size: 24px">+372 55 581 644</b></br>
                    </p>
                </div>
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="row">
                        <h2 class="title">Work with us</h2>
                        <h5 class="description">Please leave your name, request and contact information and we will get back to you as soon as possible.</h5>
                        <form class="contact-form w-100">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Your Name</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Your Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group bmd-form-group">
                                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto text-center">
                                    <button class="btn btn-info btn-raised">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
