@extends('layouts.app')

@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card card-success">
                        <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                <h5 class="font-15">User Count</h5>
                                <h2 class="mb-3 font-18">{{ $userCount }}</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img text-center">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card card-warning">
                    <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                            <h5 class="font-15">Total Skills</h5>
                            <h2 class="mb-3 font-18">{{ $skillCount }}</h2>
                            </div>
                        </div>
                     
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card card-info">
                    <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                            <h5 class="font-15">Total Works</h5>
                            <h2 class="mb-3 font-18">{{ $workCount }}</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                            <div class="banner-img text-center">
                            <img src="{{ asset('assets/img/works.webp') }}" alt="" style="max-width: 70%; height: auto; max-height: 100px;">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card card-danger">
                    <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                            <h5 class="font-15">Experience</h5>
                            <h2 class="mb-3 font-18">{{ $experienceCount }}</h2>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                            <div class="banner-img text-center">
                            <img src="{{ asset('assets/img/experience.jpg') }}" alt="" style="max-width: 70%; height: auto; max-height: 100px;">
                            </div>
                        </div> -->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card card-info">
                    <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                            <h5 class="font-15">Educational</h5>
                            <h2 class="mb-3 font-18">{{ $educationalCount }}</h2>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card card-success">
                    <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                            <h5 class="font-15">Total Blogs</h5>
                            <h2 class="mb-3 font-18">{{ $blogCount }}</h2>
                            </div>
                        </div>
                    
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card card-warning">
                    <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                            <h5 class="font-15">Messages</h5>
                            <h2 class="mb-3 font-18">{{ $messageCount }}</h2>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
                

@endsection