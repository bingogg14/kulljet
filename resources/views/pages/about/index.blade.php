@extends('layouts.default')

@section('title', 'Kull Jet Company')
@section('description', 'Kull Jet Company Description')


@section('content_header')
    @include('includes.helpers.header.page_header',
    [
        'page_header_title' => 'About us',
        'page_header_description' => 'KullJet is an aviation company which specializes in business jet charters flights, helicopter flights, aircraft sales, aircraft management, access to private terminals and other hight level aviation services. We are available 24/7 to assist with your global private travel needs. KullJet will fully assist you in buying and selling business jets, commercial airliners, turboprops and helicopters. Our extensive aviation experience allows us to quickly identify numerous nuances relating to specific types of aircraft and choose the most suitable aircraft for our customers.'
    ])
@endsection

@section('content')
    @include('includes.static.default_text')
@endsection
