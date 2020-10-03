<!DOCTYPE html>
<html>
    <head>
        <title></title>
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="./style/img.css" rel="stylesheet" type="text/css"/>
<link href="./style/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="./style/in_style.css"  type="text/css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <!-- navbar -->

        <?php
            include "nav.php";
        ?>
        <div class="container">
            <div class="wrapper">
                <div id="gallery">
                    <ul><li>
                    <div id="thumbs">
                        <a href="#lightbox1"><img src="img/1.jpg" alt="realme 5 pro" style="width: 120px; "/>
                        <figure><strong>Realme 5 Pro</strong></figure>
                    </a>
                    </div></li>
                    <li>
                    <div id="thumbs">
                        <a href="#lightbox2"><img src="img/2.jpg"/></a>
                        <figure><strong>Realme 5 Pro</strong></figure>
                    </div>
                </li>
                <li>
                    <div id="thumbs">
                        <a href="#lightbox3"><img src="img/3.jpg"></a>
                        <figure><strong>Realme 5 Pro</strong></figure>
                    </div>
                </li>
                <li>
                    <div id="thumbs">
                        <a href="#lightbox4"><img src="img/4.jpg"/></a>
                        <figure><strong>Realme 5 Pro</strong></figure>
                    </div>
                </li>
                </ul>
                </div>
        
        
                <div class="lightbox" id="lightbox1">
        
                    <div id="outer">
                        <p id="title">Realme 5 pro<a href="#" id="cross">X</a></p>
                
                        <a href="#lightbox4" id="aleft"><img src="img/unnamed (1).png" /></a>
                        <a href="#lightbox2" id="aright"><img  src="img/download.png" /></a>
                
                        <div id="inner">
                            <img src="img/1.jpg"/>
                        </div>
        
                    </div>
                </div>
        
                <div class="lightbox" id="lightbox2">
        
                    <div id="outer">
                        <p id="title">Realme 6 pro<a href="#" id="cross">X</a></p>
                
                        <a href="#lightbox1" id="aleft"><img  src="img/unnamed (1).png" /></a>
                        <a href="#lightbox3" id="aright"><img src="img/download.png" /></a>
                
                        <div id="inner">
                            <img src="img/2.jpg"/>
                
                        </div>
        
                    </div>
                </div>
        
        
                <div class="lightbox" id="lightbox3">
        
                    <div id="outer">
                        <p id="title">Samsung M Series<a href="#" id="cross">X</a></p>
                        
                        <a href="#lightbox2" id="aleft" ><img src="img/unnamed (1).png" /></a>
                        <a href="#lightbox4" id="aright"><img  src="img/download.png" /></a>
                
                        <div id="inner">
                            <img src="img/3.jpg"/>
                
                        </div>
        
                    </div>
                </div>
                
                <div class="lightbox" id="lightbox4">
        
                    <div id="outer">
                        <p id="title">Samsung M Series<a href="#" id="cross">X</a></p>
                
                        <a href="#lightbox3" id="aleft"><img  src="img/unnamed (1).png" /></a>
                        <a href="#lightbox1" id="aright"><img  src="img/download.png" /></a>
                
                            <div id="inner">
                                <img src="img/4.jpg"/>
                
                        </div>
        
                    </div>
            </div>
        </div>
        </div>
        <!-- javascript -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--  <script type="text/javascript" src="js/myjs.js"></script> -->
    </body>
</html>