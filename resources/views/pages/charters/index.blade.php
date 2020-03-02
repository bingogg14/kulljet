@extends('layouts.default')

@section('title', 'Kull Jet Company')
@section('description', 'Kull Jet Company Description')


@section('content_header')
    @include('includes.helpers.headers.default.page_header',
    [
        'page_header_title' => 'Private jet charters',
        'page_header_description' => 'At KullJet, we have built a business out of providing honest and high level quotes in an industry where that is not typical. Besides of the own fleet, we offer an access to the worldwide network of more than 3.500 aircraft. You can avoid everything you dislike about commercial airline travel while riding in the luxurious comfort of your own private aircraft. Our services are customized to meet your individual travel and financial requirements, and to support your flight operation with the highest standards of safety and personalized service, regardless of the location of the aircraft. We are focused on exceeding the expectations of our clients and redefining integrated private jet services. Call us to get an instant quote.'
    ])
@endsection

@section('content')
    <div class="container">
        <div class="section text-center">
            <div class="private_jet_charters">
                <div class="images_block">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Premier 1A</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/aircraft/premier_1a/1.jpg') }}" height="280" width="100%" class="img-raised rounded">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/aircraft/premier_1a/2.jpg') }}" height="280" width="100%" class="img-raised rounded">
                        </div>
                    </div>
                </div>
                <div class="images_block">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Cessna XLS+</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/aircraft/cessna_xls_plus/1.jpg') }}" height="280" width="100%" class="img-raised rounded">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/aircraft/cessna_xls_plus/2.jpg') }}" height="280" width="100%" class="img-raised rounded">
                        </div>
                    </div>
                </div>
                <div class="images_block">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Gulfstream G200</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/aircraft/gulfstream_g200/2.jpg') }}" height="280" width="100%" class="img-raised rounded">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/aircraft/gulfstream_g200/1.jpg') }}" height="280" width="100%" class="img-raised rounded">
                        </div>
                    </div>
                </div>
                <div class="images_block">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Falcon 7X</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/aircraft/falcon_7x/1.jpg') }}" height="280" width="100%" class="img-raised rounded">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/aircraft/falcon_7x/2.jpg') }}" height="280" width="100%" class="img-raised rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
