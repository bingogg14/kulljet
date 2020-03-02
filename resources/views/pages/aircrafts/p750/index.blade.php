@extends('layouts.default')

@section('title', 'Kull Jet Company | Aircraft P-750 XSTOL Buy')
@section('description', 'Kull Jet Company | Aircraft P-750 XSTOL Buy')


@section('content_header')
    <div class="page-header p750-background header-filter blue-filter">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="title text-blue-gradient">
                        P750 - XSTOL
                    </h1>
                    <h4>
                        Description
                    </h4>
                    <br>
                    <div class="buttons-group">
                        <a href="/documents/aircrafts/p750/p-750_xstol_brochure.pdf" target="_blank" class="btn btn-default btn-raised btn-lg">
                            <i class="fa fa-download pr-1"></i> Specification
                        </a>
                        <a href="/documents/aircrafts/p750/p-750_xstol_tech_spec.pdf" target="_blank" class="btn btn-outline-info btn-raised btn-lg">
                            <i class="fa fa-download pr-1"></i> Brochure
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <iframe width="100%" src="https://www.youtube.com/embed/YF9egPPC3kI" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
