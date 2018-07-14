@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="container" style="position: relative;">
            
            <div class="row" style="position: absolute;width: 50%;">
                <div class="col-md-12 col-lg-6 mt-5">
                    <div class="text-uppercase text-white"><h1>978789<br>downloads</h1></div>
                </div>
                <div class="col-md-12 col-lg-6 mt-5">
                    <div class="text-uppercase text-white"><h1>{{ $subs }}<br>subscriber</h1></div>
                </div>
                <div class="col-12 mt-5">
                    <div><a href="/profile" class="btn btn-info rounded-0">Create Your Resume Now</a></div>
                </div>
            </div>
            
        </div>
    </section>
    <div class="container">        
        <div class="row clearfix">
            <div class="col-sm-12 text-right mt-3">
                <span class="badge-default p-2 rounded m-1 text-white" style="background: #4267b2;">
                    <small><i class="fas fa-thumbs-up"></i> Like&nbsp;100</small>
                </span>
                <span class="badge-primary p-2 rounded m-1 text-white">
                    <small><i class="fab fa-twitter"></i> Tweet</small>
                </span>
                <span class="badge-default p-2 rounded m-1 text-white" style="background: #d34836;">
                    <small><i class="fab fa-google-plus-g"></i> Google&nbsp;plus</small>
                </span>
            </div>
        </div>
        <section>
            <div class="row">
                <div class="w-100 mt-3 p-3" style="height: 60px;">
                    <h3>Available templates for your resume !!! </h3>
                </div>
            </div>
        </section>
        <section id="templates">
            <div class="row">
                <div class="col-md-12 col-lg-6 mt-4">
                    <div class="card p-2">
                        <div class="d-flex" style="height: 500px;">
                            <img src="{{ asset('tmpl/tmpl1.jpg') }}" class="img-fluid m-auto" alt="template image">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 mt-4">
                    <div class="card p-2">
                        <div class="d-flex" style="height: 500px;">
                            <img src="{{ asset('tmpl/tmpl2.jpg') }}" class="img-fluid m-auto" alt="template image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 mt-4">
                    <div class="card p-2">
                        <div class="d-flex" style="height: 500px;">
                            <img src="{{ asset('tmpl/tmpl3.jpg') }}" class="img-fluid m-auto" alt="template image">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 mt-4">
                    <div class="card p-2">
                        <div class="d-flex" style="height: 500px;">
                            <img src="{{ asset('tmpl/tmpl4.jpg') }}" class="img-fluid m-auto" alt="template image">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 mt-4">
                    <div class="card p-2">
                        <div class="d-flex" style="height: 500px;">
                            <img src="{{ asset('tmpl/tmpl5.jpg') }}" class="img-fluid m-auto" alt="template image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection