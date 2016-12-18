@extends('layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="cover">
            <div class="col-md-4 col-md-offset-4 hidden-lg menu-xs text-center">
                <ul class="list-unstyled list-inline">
                    <li id="portfolio" >
                        <a href="/portfolio"><i class="glyphicon glyphicon-briefcase"></i> Portfolio</a>
                    </li>
                    <li id="home" >
                        <a href="/skills"><i class="glyphicon glyphicon-list"></i> Skills</a>
                    </li>
                    <li id="contact" >
                        <a data-toggle="modal" href='#modal-id'><i class="glyphicon glyphicon-phone"></i> Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center">
                <img data-toggle="tooltip" data-placement="right" title="I am available, contact me!" alt="" src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAdSAAAAJGJmNTY2Nzc2LTBlNWYtNDMwZC1iZjhlLTEzZjdjMzRkNDg3Zg.jpg" class="img-cover">
            </div>
            <div class="col-md-6 col-md-offset-3 text-center social">
                <h1 class="title">Jesús Castañeda<br><small class="text-white">< Full Stack Web Developer /></small></h1>
            </div>
            @include('partials.social-xs')
            @include('partials.copy')
        </div>
    </div>
</div>
@endsection
