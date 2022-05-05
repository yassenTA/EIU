<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap/css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="animate.css">
        <link rel="shortcut icon" href="logo.jpeg">
        <title>Egyptian International university</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
    body,html{
        height: 100%;
        margin: 0;
}
    .bg{
        background-image: url("background_home.jpg");
        height: 200%;
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
} 
    .footer{
                color: white;
                bottom: 20%;
                background-color:#003366;
                width: 100%;
                padding: 0px;
                height: 30%;
}
    
    a{text-decoration: none;
                color: white;}
    a:hover{background-color:#003366;
            color:#cc7a00;
}   
   #news{
                background-color:#003366;
                display: block;
                color:white;
                border-bottom-left-radius: 25px;
                border-bottom-right-radius: 25px;
                height: 72.9%; 
        
}
            a{text-decoration: none;
                color: white;}
            a:hover{
                background-color:#003366;
                color:#cc7a00;
                transition-duration: 0.5s;
}   
            
    .floatright{
                background-color: white;
                color:#003366;
                text-align: center;
                float: right;
                padding: 0px;
                margin-right: 2%;
                margin-top: 2%;
                width: 68%;
                height: 86%;
                border-radius: 25px;
                
}
    .floatleft{
            background-color: white;
            color:#003366 ;
            float:left;
            text-align: center;
            padding:0px;
            margin-top: 2%;
            margin-left: 20px;
            width: 27%;
            height: 86%;
            border-radius: 25px;
}
 
                * {     box-sizing:border-box}
        .mySlides { display:none}

/* Slideshow container */
        .slideshow-container {
            max-width: 900px;
            position: relative;
            margin: auto;
}

/* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 5s;
}

        @-webkit-keyframes fade {
            from {      opacity: .4} 
            to {      opacity: 1}
}
                
            .floattop{
                background-color: white;
                color:#003366;
                text-align: center;
                float: right;
                padding: 0px;
                margin-right: 0%;
                margin-top: 0%;
                width: 100%;
                height: 4%;
}   
 
            @-webkit-keyframes ashraf{
                 0%{
                     transform: rotateY(0deg);
}
                 100%{
                     transform: rotateY(360deg);
}
}
            .rotate{
                width: 70%;
                height: 21%;
                animation: ashraf 3s infinite;
                margin-left: 15%;
}
           .navbar-default {
               background-color: #003366;
               border:0px;
               color: white;
}
            .navbar-default .navbar-brand:hover,
            .navbar-default .navbar-brand:focus {
                color:#cc7a00;
            }
            .navbar-default .navbar-nav > li > a {
                color: white;
}
            .navbar-default .navbar-nav > li > a:hover,
            .navbar-default .navbar-nav > li > a:focus {
                color:white;
                background-color:  #00264d;
                transition-duration: 0.5s;
}
            .navbar-default .navbar-nav > .active > a,
            .navbar-default .navbar-nav > .active > a:hover,
            .navbar-default .navbar-nav > .active > a:focus {
                color:white;
                background-color: #cc7a00;
}
            .navbar-default .navbar-nav > .open > a,
            .navbar-default .navbar-nav > .open > a:hover,
            .navbar-default .navbar-nav > .open > a:focus {
            color: white;
            background-color: #00264d;
}
/* Caret */
            .navbar-default .navbar-nav > .dropdown > a .caret {
                border-top-color: white;
                border-bottom-color: #777;
}
    
            .navbar-default .navbar-nav > .dropdown > a:hover .caret,
            .navbar-default .navbar-nav > .dropdown > a:focus .caret {
                border-top-color: white;
                border-bottom-color: white;
}
            .navbar-default .navbar-nav > .open > a .caret,
            .navbar-default .navbar-nav > .open > a:hover .caret,
            .navbar-default .navbar-nav > .open > a:focus .caret {
                border-top-color:#cc7a00 ;
                border-bottom-color: #cc7a00;
}
            .nav2{
                
                width: 94%;
                margin-left: 3%;
    }
      .fa-facebook {
  background: #3B5998;
  color: white;
      border-radius: 10px;
            margin-left:8%; 
}
    .fa-twitter {
  background: #55ACEE;
  color: white;
    border-radius: 10px;
          margin-left:8%; 
}

.fa-google {
  background: #dd4b39;
  color: white;
border-radius: 10px;
      margin-left:8%; 
}
    .zoomIn{
        animation-duration: 2s;
    }
        .contvid{
            background-color:black;
            color:#003366 ;
            float:right;
            text-align: center;
            padding:0px;
            margin-top: 7%;
            margin-right: 5%;
            width:90%;
            height: 50%;
}
</style>
    </head>
    <body>
          <nav class="navbar navbar-default ">
    <ul class="nav navbar-nav">
      <li class="active"><a href="project.html">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="About.html">Welcome To EIU</a></li>
          <li><a href="About2.html">Vision &amp; Mission</a></li>
          <li><a href="About3.html">Strategic Obj.</a></li>
          <li><a href="About4.html">History</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admissions<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Admissions.html">Admission Requirments</a></li>
          <li><a href="Admissions2.html">Academic Regulations</a></li>
          
        </ul>
      </li>
      <li><a href="Academics.html">Academics</a></li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services &amp; Facilities<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Services%20&%20Facilities.html">English Language Program</a></li>
          <li><a href="service%20and%20facilities2.html">Research Guidance Center</a></li>
        </ul>
        </li>
        <li><a href="News.html">News</a></li>
    </body>
</html>
