@extends('layout')

@section('content')
<div class="portfolio-page opaco">
    <div class="sub-cover">
        <div class="col-md-4 col-md-offset-4 hidden-lg menu-xs text-center">
            <ul class="list-unstyled list-inline">
                <li id="home" >
                    <a href="/"><i class="glyphicon glyphicon-home"></i> Home</a>
                </li>
                <li id="skills" >
                    <a href="/skills"><i class="glyphicon glyphicon-list"></i> Skills</a>
                </li>
                <li id="contact" >
                    <a data-toggle="modal" href='#modal-id'><i class="glyphicon glyphicon-phone"></i> Contact</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <br>
            <h1 class="page-header text-important"><i class="glyphicon glyphicon-briefcase"></i> My Projects</h1>
            <br>
            <h3 class="sub-title text-gray">You can find here some of my recents projects!</h3>
            <br><br>
            @include('partials.social')
        </div>
    </div>
</div>
<div class="col-md-12 opaco">
    <div class="container hidden-xs stacks text-center">
        <h1>Main Clients</h1>
        <img data-toggle="tooltip" data-placement="top" title="Universidad de Parral" src="images/logoudp.png" alt="">
        <img data-toggle="tooltip" data-placement="top" title="Jesco Marketing" src="images/logojesco.png" alt="">
        <img data-toggle="tooltip" data-placement="top" title="Sigma Capacitaciones" src="images/logosigma.png" alt="">
        <img data-toggle="tooltip" data-placement="top" title="Artemex" src="images/logoartemex.png" alt="">
        <img data-toggle="tooltip" data-placement="top" title="Ferreteria Luz" src="images/logoferre.png" alt="">
        <img data-toggle="tooltip" data-placement="top" title="Distribuidora Luz" src="images/logosin.png" alt="">
    </div>
    <div class="col-md-10 col-md-offset-1 pad-top">
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Universidad de Parral</h1>
                </div>
                <div class="panel-body bg-info">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="images/udp.png" width="100%" class="img-responsive img-rounded" alt=""><br>
                        <h4>Requeriments:</h4>
                        <p class="label label-primary">Website</p>
                        <p class="label label-primary">Software</p>
                        <p class="label label-primary">Social Media</p>
                        <p class="label label-primary">Support</p>
                        <br><br>
                        <h4>Tech used:</h4>
                        <span>
                            <p class="label label-success">Html</p>
                            <p class="label label-success">Css</p>
                            <p class="label label-success">Bootstrap</p>
                            <p class="label label-success">Javascript</p>
                            <p class="label label-success">JQuery</p>
                            <p class="label label-success">Ruby on Rails</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Jesco Marketing</h1>
                </div>
                <div class="panel-body bg-info">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="images/jesco.png" width="100%" class="img-responsive img-rounded" alt=""><br>
                        <h4>Requeriments:</h4>
                        <p class="label label-primary">Website</p>
                        <p class="label label-primary">Software</p>
                        <p class="label label-primary">Social Media</p>
                        <br><br>
                        <h4>Tech used:</h4>
                        <span>
                            <p class="label label-success">Html</p>
                            <p class="label label-success">Css</p>
                            <p class="label label-success">Bootstrap</p>
                            <p class="label label-success">Javascript</p>
                            <p class="label label-success">JQuery</p>
                            <p class="label label-success">Php</p>
                            <p class="label label-success">Laravel</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Emporio Escort</h1>
                </div>
                <div class="panel-body bg-info">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="images/emporio.png" width="100%" class="img-responsive img-rounded" alt=""><br>
                        <h4>Requeriments:</h4>
                        <p class="label label-primary">Website</p>
                        <p class="label label-primary">Social Media</p>
                        <br><br>
                        <h4>Tech used:</h4>
                        <span>
                            <p class="label label-success">Html</p>
                            <p class="label label-success">Css</p>
                            <p class="label label-success">Bootstrap</p>
                            <p class="label label-success">Javascript</p>
                            <p class="label label-success">JQuery</p>
                            <p class="label label-success">Php</p>
                            <p class="label label-success">MySQL</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Sigma Capacitaciones</h1>
                </div>
                <div class="panel-body bg-info">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="images/sigma.png" width="100%" class="img-responsive img-rounded" alt=""><br>
                        <h4>Requeriments:</h4>
                        <p class="label label-primary">Website</p>
                        <p class="label label-primary">Social Media</p>
                        <br><br>
                        <h4>Tech used:</h4>
                        <span>
                            <p class="label label-success">Html</p>
                            <p class="label label-success">Css</p>
                            <p class="label label-success">Bootstrap</p>
                            <p class="label label-success">Javascript</p>
                            <p class="label label-success">JQuery</p>
                            <p class="label label-success">Php</p>
                            <p class="label label-success">MySQL</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Distribuidora Luz</h1>
                </div>
                <div class="panel-body bg-info">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="images/distribuidoraluz.png" width="100%" class="img-responsive img-rounded" alt=""><br>
                        <h4>Requeriments:</h4>
                        <p class="label label-primary">Website</p>
                        <p class="label label-primary">Social Media</p>
                        <br><br>
                        <h4>Tech used:</h4>
                        <span>
                            <p class="label label-success">Html</p>
                            <p class="label label-success">Css</p>
                            <p class="label label-success">Bootstrap</p>
                            <p class="label label-success">Javascript</p>
                            <p class="label label-success">JQuery</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>RegioClimas</h1>
                </div>
                <div class="panel-body bg-info">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="images/regioclimas.png" width="100%" class="img-responsive img-rounded" alt=""><br>
                        <h4>Requeriments:</h4>
                        <p class="label label-primary">Website</p>
                        <p class="label label-primary">Social Media</p>
                        <p class="label label-primary">Logo Design</p>
                        <br><br>
                        <h4>Tech used:</h4>
                        <span>
                            <p class="label label-success">Html</p>
                            <p class="label label-success">Css</p>
                            <p class="label label-success">Bootstrap</p>
                            <p class="label label-success">Javascript</p>
                            <p class="label label-success">JQuery</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Artemex</h1>
                </div>
                <div class="panel-body bg-info">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="images/artemex.png" width="100%" class="img-responsive img-rounded" alt=""><br>
                        <h4>Requeriments:</h4>
                        <p class="label label-primary">Website</p>
                        <p class="label label-primary">Social Media</p>
                        <br><br>
                        <h4>Tech used:</h4>
                        <span>
                            <p class="label label-success">Html</p>
                            <p class="label label-success">Css</p>
                            <p class="label label-success">Bootstrap</p>
                            <p class="label label-success">Javascript</p>
                            <p class="label label-success">JQuery</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Semansa</h1>
                </div>
                <div class="panel-body bg-info">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="images/semansa.png" width="100%" class="img-responsive img-rounded" alt=""><br>
                        <h4>Requeriments:</h4>
                        <p class="label label-primary">Website</p>
                        <p class="label label-primary">Social Media</p>
                        <p class="label label-primary">Logo Design</p>
                        <br><br>
                        <h4>Tech used:</h4>
                        <span>
                            <p class="label label-success">Html</p>
                            <p class="label label-success">Css</p>
                            <p class="label label-success">Bootstrap</p>
                            <p class="label label-success">Javascript</p>
                            <p class="label label-success">JQuery</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.copy')
        @include('partials.social-xs')
    </div>
</div>
@endsection