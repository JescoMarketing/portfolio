@extends('layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="cover">
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
            <div class="col-md-4 col-md-offset-4 text-center">
                <img data-toggle="tooltip" data-placement="right" title="I am available, contact me!" alt="" src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAgdAAAAJDBmMGYzY2ExLWU4ZDgtNDNmNC1iYzAyLWM3ZmIxYTMwYTY3Mg.jpg" class="img-cover">
            </div>
            <div class="col-md-6 col-md-offset-3 text-center social">
                <h1>Jesús Castañeda<br><small>< Full Stack Web Developer /></small></h1>
                <br>
                <h3 class="hidden-xs text-success">Follow me on Social Media</h3>
                <a href="http://www.github.com/jesuscastaneda86" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Github" src="images/github.png" alt="G"></a>
                <a href="https://mx.linkedin.com/in/jesús-manuel-castañeda-olmos-06a27ab7" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Linkedin" src="images/linkedin.png" alt="linkedin"></a>
                <a href="http://www.codepen.io/jesuscastaneda86" class="hidden-xs" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Codepen" src="images/codepen.png" alt="codepen"></a>
                <a href="https://www.freecodecamp.com/jesuscastaneda86" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Free Code Camp" src="images/fcc.png" alt="freecodecamp"></a>
                <a href="http://www.sololearn.com/Profile/1171988" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Sololearn" src="images/sololearn.png" alt="sololearn"></a>
                <a href="https://www.facebook.com/jesuscastanedamty" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Facebook" src="images/facebook.png" alt="facebook"></a>
                <a href="https://twitter.com/jesus_castaneda" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Twitter" src="images/twitter.png" alt="twitter"></a>
                <a href="https://drive.google.com/open?id=0B_bNZgR0HXPTOVNRNU1yR1VkSE0" class="hidden-xs" target="_blank"><img data-toggle="tooltip" data-placement="bottom" title="Curriculum Vitae" src="images/pdf.png" alt="curriculum"></a>
            </div>
            <div class="col-md-12 copy hidden-xs">
                <p>@Copyright 2016 Derechos Reservados | Created by: Jesús Castañeda</p>
            </div>
        </div>
    </div>
</div>
@endsection