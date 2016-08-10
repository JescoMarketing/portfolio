@extends('layout')

@section('content')
<div class="">
    <div class="portfolio-page">
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
                <h1 class="page-header text-important"><i class="glyphicon glyphicon-briefcase"></i> My Projects</h1>
                <br>
                <h3 class="sub-title text-gray">You can find here some of my recents projects!</h3>
                <br><br>
                <div class="row">
                    <div class="col-md-7">
                        <p>#WebDeveloper | #SoftwareDeveloper | #WebSite | #SocialMedia | #DigitalMarketing</p>
                    </div>
                    <div class="col-md-5 social">
                        <a href="http://www.github.com/jesuscastaneda86" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Github" src="images/github.png" alt="G"></a>
                        <a href="https://mx.linkedin.com/in/jesús-manuel-castañeda-olmos-06a27ab7" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Linkedin" src="images/linkedin.png" alt="linkedin"></a>
                        <a href="http://www.codepen.io/jesuscastaneda86" class="hidden-xs" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Codepen" src="images/codepen.png" alt="codepen"></a>
                        <a href="https://www.freecodecamp.com/jesuscastaneda86" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Free Code Camp" src="images/fcc.png" alt="freecodecamp"></a>
                        <a href="http://www.sololearn.com/Profile/1171988" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Sololearn" src="images/sololearn.png" alt="sololearn"></a>
                        <a href="https://www.facebook.com/jesuscastanedamty" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Facebook" src="images/facebook.png" alt="facebook"></a>
                        <a href="https://twitter.com/jesus_castaneda" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Twitter" src="images/twitter.png" alt="twitter"></a>
                        <a href="https://drive.google.com/open?id=0B_bNZgR0HXPTOVNRNU1yR1VkSE0" class="hidden-xs" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Curriculum Vitae" src="images/pdf.png" alt="curriculum"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-6">
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
        <div class="col-md-12 copy hidden-xs">
            <p>@Copyright 2016 Derechos Reservados | Created by: Jesús Castañeda</p>
        </div>
    </div>
</div>
@endsection