<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<!—- ShareThis BEGIN -—>
<script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5ed6038bc84977001234f0d7&product=sticky-share-buttons"></script>
<!—- ShareThis END -—>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>CULTURE HERITAGE SITES OF LUCKNOW</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<STYLE>
body{

background-image: url('IMAGES/WHITE1.jpg');
}
</STYLE>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#66CCFF">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:BLACK"> EXPLORE CULTURAL HERITAGE SITE OF LUCKNOW</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:BLACK">
                        <a style="color:BLACK" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					<li style="color:BLACK">
                        <a style="color:BLACK" href="LIST.HTML" info="Cultural Heritage Sites Of UTTAR PRADESH"><i class="fa fa-home fa-fw"></i>Cultural Heritage Sites Of LUCKNOW</a>
                    </li>
					
					<li><a style="color:BLACK" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								
	<li class="dropdown">
        <a style="color:BLACK" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login">Student</a></li>
		
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 
	  
	
	  
	  
	 <li>
                        <a style="color:BLACK" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/lucknow.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/l1.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/GOA.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               
				
				
				
	
	
				
				
				
<div class="col-sm-10" style="margin-top:60px;margin-bottom:80px">


<DIV CLASS="HEADY" ><h1><FONT COLOR="BLACK"><CENTER><BOLD> <MARK>WELCOME TO LUCKNOW-UTTAR PRADESH-THE PRIDE OF INDIA</MARK></BOLD></CENTER></H1></FONT></DIV>
<FONT COLOR="BLACK"><CENTER>The Culture of Uttar Pradesh is an Indian Culture which has its roots in the Hindi and Urdu literature, music, fine arts, drama and cinema. Lucknow, the capital of Uttar Pradesh, has several beautiful historical monuments such as Bara Imambara and Chhota Imambara. It has also preserved the damaged complex of the Oudh-period British Resident's quarters, which are being restored.

Uttar Pradesh attracts large number of visitors, both national and international; with more than 71 million domestic tourists (in 2003) and almost 25% of the All-India foreign tourists visiting Uttar Pradesh, it is one of the top tourist destinations in India. There are two regions in the state where a majority of the tourists go, viz. the Agra circuit and the Hindu pilgrimage circuit.
</FONT></p></CENTER>
			</div>

			
			
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">

</div>
<!-- jQuery -->
<script src="css/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="css/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
interval: 5000 //changes the speed
})
  </script>

</body>


</html>
