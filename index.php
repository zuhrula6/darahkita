<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<title>Darah Kita</title>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		.navbar-fixed {
			position: fixed;
			background-color: transparent;
			box-shadow: none;
		}
		ul.indicators {
			display: none;
		}
		.bg-red {
			background-color: #E15249;
		}
		.navbar-fixed.scrolled {
		  	background-color: #ee6e73 !important;
			transition: background-color 200ms linear;
			 box-shadow: 0px 0px 20px 8px #00000052
		}
		.txtcar {
			text-shadow: 2px 2px 30px black;
		}
		.stok {
			border-radius: 0px 30px 30px 0px;
		    border: 3px solid #e53935;
		    background-color: transparent!important;
		    color: #e53935;
		    box-shadow: none;
		    font-weight: bold;
		}
		.abot {
			border-radius: 30px 0px 0px 30px;
		    border: 3px solid #26a69a;
		    background-color: transparent;
		    color: #26a69a;
		    box-shadow: none;
		    font-weight: bold;
		}
		.card {
			box-shadow: 5px 4px 12px 0px #c5bfbf6e!important;
		}
		.btn-o {
		    background-color: transparent;
		    color: #e53935;
		    border: 2px solid #e53935;
		    padding: 5px;
		    border-radius: 20px;
		}
		.card-content {
			padding: 20px 13px!important;
		}
	</style>
</head>
<body>
	<!-- NAVBAR -->
  	<nav class="nav-extended navbar-fixed" id="awal">
	    <div class="nav-wrapper">
	    	<a href="#!" class="brand-logo txtcar">Darah Kita</a>
	    	<a href="#" class="brand-logo right" style="position: inherit!important;"><i class="material-icons dropdown-trigger" data-target="dropdown1">person_outline</i></a>
	    	  <ul id='dropdown1' class='dropdown-content'>
			    <li><a href="#!">Login/My Profile</a></li>
			    <li><a href="#!">Logout</a></li>
			  </ul>
	      	<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">format_align_left</i></a>
	      	<ul class="right hide-on-med-and-down">
	        	<li><a class="txtcar">A link</a></li>
	        	<li><a class="txtcar">A second link</a></li>
	        	<li><a class="txtcar">A third link</a></li>
	      	</ul>
	    </div>
	</nav>
  	<ul class="sidenav" id="mobile-demo">
    	<li><a href="sass.html">Sass</a></li>
    	<li><a href="badges.html">Components</a></li>
    	<li><a href="collapsible.html">Javascript</a></li>
    	<li><a href="mobile.html">Mobile</a></li>
  	</ul>

	<!-- CAROUSEL -->	

  	<div class="slider">
    	<ul class="slides">
	      	<li>
	        	<img src="asset/img/car1.jpg"> <!-- random image -->
	        	<div class="caption left-align">
	          		<h3 class="txtcar">This is our big Tagline!</h3>
	          		<h5 class="txtcar light grey-text text-lighten-3">Here's our small slogan.</h5>
	        	</div>
	      	</li>
	      	<li>
	        	<img src="asset/img/car2.jpg"> <!-- random image -->
	        	<div class="caption left-align">
	          		<h3 class="txtcar">This is our big Tagline!</h3>
	          		<h5 class="textcar light grey-text text-lighten-3">Here's our small slogan.</h5>
	        	</div>
	      	</li>
	      	<li>
	        	<img src="asset/img/car2.jpg"> <!-- random image -->
	        	<div class="caption left-align">
	          		<h3 class="txtcar">This is our big Tagline!</h3>
	          		<h5 class="txtcar light grey-text text-lighten-3">Here's our small slogan.</h5>
	        	</div>
	      	</li>
    	</ul>
  	</div>
  	<center>
  		<a href="#" class="btn btn-large waves-effect waves-default abot">ABOUT US</a>
		<a href="#" class="btn btn-large waves-effect waves-default stok">STOK DARAH</a>
  	</center><br>
	<div class="container">
		<h5>&nbsp;&nbsp;Event Terbaru</h5>
		<div class="row">
			<div class="col s12 m4">
				<div class="card">
			        <div class="card-image">
			          <img src="asset/img/con1.jpg">
			          <span class="card-title">Card Title</span>
			          <a class="btn-floating halfway-fab waves-effect waves-light red btn modal-trigger" href="#modal2"><i class="material-icons">launch</i></a>
			        </div>
			        <div class="card-content">
			          <p>I am a very simple card. I am good at containing small bits of information.
			          I am convenient because I require little markup to use effectively.</p><br>
			          <center><a class="btn-o modal-trigger" href="#modal2">Selengkapnya</a></center>
			        </div>
			    </div>
			</div>
			<div class="col s12 m4">
				<div class="card">
			        <div class="card-image">
			          <img src="asset/img/con1.jpg">
			          <span class="card-title">Card Title</span>
			          <a class="btn-floating halfway-fab waves-effect waves-light red btn modal-trigger" href="#modal2"><i class="material-icons">launch</i></a>
			        </div>
			        <div class="card-content">
			          <p>I am a very simple card. I am good at containing small bits of information.
			          I am convenient because I require little markup to use effectively.</p><br>
			          <center><a class="btn-o modal-trigger" href="#modal2">Selengkapnya</a></center>
			        </div>
			    </div>
			</div>
			<div class="col s12 m4">
				<div class="card">
			        <div class="card-image">
			          <img src="asset/img/con1.jpg">
			          <span class="card-title">Card Title</span>
			          <a class="btn-floating halfway-fab waves-effect waves-light red btn modal-trigger" href="#modal2"><i class="material-icons">launch</i></a>
			        </div>
			        <div class="card-content">
			          <p>I am a very simple card. I am good at containing small bits of information.
			          I am convenient because I require little markup to use effectively.</p><br>
			          <center><a class="btn-o modal-trigger" href="#modal2">Selengkapnya</a></center>
			        </div>
			    </div>
			</div>
		</div>
	</div>

	<div class="container">
		<h5>&nbsp;&nbsp;Tukar Point</h5>
		<div class="row">
			<div class="col s6 m4">
				<div class="card">
			        <div class="card-image">
			          <img src="asset/img/item/realme1.jpg">
			        </div>
			        <div class="card-content">
			        	<b>Realme 3 Pro</b><br>	
			        	<em>1200 point</em><br>	<br>	
			          <center><a class="btn-o modal-trigger" href="#modal1">Selengkapnya</a></center>
			        </div>
			    </div>
			</div>
			<div class="col s6 m4">
				<div class="card">
			        <div class="card-image">
			          <img src="asset/img/item/realme1.jpg">
			        </div>
			        <div class="card-content">
			        	<b>Realme 3 Pro</b><br>	
			        	<em>1200 point</em><br>	<br>	
			          <center><a class="btn-o modal-trigger" href="#modal1">Selengkapnya</a></center>
			        </div>
			    </div>
			</div>
			<div class="col s6 m4">
				<div class="card">
			        <div class="card-image">
			          <img src="asset/img/item/realme1.jpg">
			        </div>
			        <div class="card-content">
			        	<b>Realme 3 Pro</b><br>	
			        	<em>1200 point</em><br>	<br>	
			          <center><a class="btn-o modal-trigger" href="#modal1">Selengkapnya</a></center>
			        </div>
			    </div>
			</div>
			<div class="col s6 m4">
				<div class="card">
			        <div class="card-image">
			          <img src="asset/img/item/realme1.jpg">
			        </div>
			        <div class="card-content">
			        	<b>Realme 3 Pro</b><br>	
			        	<em>1200 point</em><br>	<br>	
			          <center><a class="btn-o modal-trigger" href="#modal1">Selengkapnya</a></center>
			        </div>
			    </div>
			</div>
		</div>
	</div>

	        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

	<!-- MODAL TUKAR POINT -->
	<div id="modal1" class="modal bottom-sheet">
	    <div class="modal-content">
	    	  <div class="slider" style="max-height: 270px!important;">
    <ul class="slides" style="height: 270px!important;">
      <li>
        <img src="asset/img/item/realme1.jpg">
      </li>
      <li>
        <img src="asset/img/item/realme2.jpg">
      </li>
      <li>
        <img src="asset/img/item/realme3.jpeg">
      </li>
    </ul>
  </div>
			<h4 class="red-text">Realme 3 Pro</h4>
			<b>1200 Point</b><hr>	
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, reiciendis, ratione! Adipisci velit quam quibusdam odit vitae soluta vel omnis, rem ut alias perspiciatis ipsam, impedit, assumenda repudiandae hic ratione!</p><hr>	
			<b>	Poin Anda :</b>  1500 <br>	
			<b>	Harga :</b> 1200 <br>	
			<b>	Sisa Poin :</b> 300 <br>	
	    </div>
	    <div class="modal-footer">
	      	<a href="#!" onclick="confirm('Poin Anda Akan Dikurangi, Apakah Anda Yakin?')" class="modal-close waves-effect waves-green btn-flat teal acent-4 white-text" style="width: 100%;text-align: center;">Tukar</a>
	    </div>
	</div>

	<!-- MODAL EVENT -->
	 <div id="modal2" class="modal modal-fixed-footer">
	    <div class="modal-content">
	      
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
	    </div>
	</div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>

$(".dropdown-trigger").dropdown();
    $(document).ready(function(){
    	$('.sidenav').sidenav();
  	});
    
    $(document).ready(function(){
    	$('.slider').slider();
  	});
  	$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
  	  $(document).ready(function(){
    $('.modal').modal();
  });
  	    $(document).ready(function(){
    $('.slider').slider();
    $('.slider').slider({height:200});
  });
      
  </script>
</body>
</html>