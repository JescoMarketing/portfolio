@extends('layout')

@section('content')

<div class="portfolio-page opaco">
    <div class="sub-cover">
        <div class="col-md-4 col-md-offset-4 hidden-lg menu-xs text-center">
            <ul class="list-unstyled list-inline">
                <li id="home" >
                    <a href="/"><i class="glyphicon glyphicon-home"></i> Home</a>
                </li>
                <li id="portfolio" >
                    <a href="/portfolio"><i class="glyphicon glyphicon-briefcase"></i> Portfolio</a>
                </li>
                <li id="contact" >
                    <a data-toggle="modal" href='#modal-id'><i class="glyphicon glyphicon-phone"></i> Contact</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <br>
            <h1 class="page-header text-important"><i class="glyphicon glyphicon-list"></i> My Skills</h1>
            <br>
            <h3 class="sub-title text-gray">You can find here my skills divided into categories with their levels of experience!</h3>
            <br><br>
            @include('partials.social')
        </div>
    </div>
</div>
<div class="col-md-12 opaco">
    <div class="container stacks text-center hidden-xs">
        <h1>Main Stacks</h1>
        <img data-toggle="tooltip" data-placement="top" title="Frontend Stack" src="images/stack1.png" alt="">
        <img data-toggle="tooltip" data-placement="top" title="Lemp Stack" src="images/lemp.png" alt="">
        <img data-toggle="tooltip" data-placement="top" title="Mean Stack" src="images/mean.png" alt="">
        <img data-toggle="tooltip" data-placement="top" title="Javascript" src="images/javascript.png" alt="">
        <img data-toggle="tooltip" data-placement="top" title="Laravel" src="images/laravel.png" alt="">
        <img data-toggle="tooltip" data-placement="top" title="Python" src="images/python.png" alt="">
    </div>
    <div class="container">
        <div class="col-md-12">
            <div>
              <!-- Nav tabs -->
              <ul class="tab nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#front" aria-controls="front" role="tab" data-toggle="tab">Front End Skills</a></li>
                <li role="presentation"><a href="#back" aria-controls="back" role="tab" data-toggle="tab">Back End Skills</a></li>
                <li role="presentation"><a href="#devtools" aria-controls="devtools" role="tab" data-toggle="tab">Dev Tools Skills</a></li>
                <li role="presentation"><a href="#devops" aria-controls="devops" role="tab" data-toggle="tab">Devops Skills</a></li>
                <li role="presentation"><a href="#database" aria-controls="database" role="tab" data-toggle="tab">Databases Skills</a></li>
                <li role="presentation"><a href="#agile" aria-controls="agile" role="tab" data-toggle="tab">Agile Skills</a></li>
                <li role="presentation"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">Design Skills</a></li>
              </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    @include('tables.frontend')
                    @include('tables.backend')
                    @include('tables.devtools')
                    @include('tables.devops')
                    @include('tables.database')
                    @include('tables.agile')
                    @include('tables.design')
                </div>
            </div>
            @include('partials.copy')
        </div>
    </div>
</div>
@include('partials.social-xs')
@endsection