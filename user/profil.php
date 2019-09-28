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
		.redm-text {
			color : #FA5C5A;
		}
		.redm-bg {
			background-color: #FA5C5A;
		}
		.blues-text {
			color: #93A8F4;
		}
		.blues-bg {
			background-color: #93A8F4;
		}
		.grayen-text {
			color: #C2CC01;
		}
		.grayen-bg {
			background-color: #C2CC01;
		}
		.whites-text {
			color: #F7F9FC;
		}
		.whites-bg {
			background-color: #F7F9FC;
		}
		.dgray-text {
			color: #596972;
		}
		.dgray-bg {
			background-color: #596972;
		}
		.left {
			margin-left: 50px;
			font-size: 25px!important;
		}
		a i {
			margin-left: 15px;
		}
		.center {
			top: 50%;
			left: 50%;
			text-align: center;
		}
		.center img {
			height: 80px;
			border: 3px solid #fff;
			border-radius: 50px;
		}
		.s12 {
			padding: 10px;
		}
		.smb {
		    width: 35px;
		    height: 35px;
		    background-color: #fff;
		    color: #ee6e73;
		    border-radius: 30px;
		    display: inline-table;
		    padding: 5px;
		}
		.panel {
			background-color: #ee6e73;
		    border-radius: 10px;
		    color: #fff;
		    box-shadow: 9px 9px 20px 0px #00000036;
		}
		h1 {
			margin: 10px;
		}
	</style>
</head>
<body>
	<nav class="nav-extended">
	    <div class="nav-wrapper">
	      	<a href="#" class="brand-logo left">Profil</a>
	      	<a href="#"><i class="material-icons">arrow_back</i></a>
	    </div>
	    <div class="nav-content">
	    	<div class="center">
	    		<div class="smb">
	    			<b>AB</b>
	    		</div>
	    		<img src="../asset/img/pp.jpg" alt="">
	    		<div class="smb">
	    			<b>P</b>
	    		</div><br>
				<b>Syifa Az-Zahra</b><br>
				<em>Kebumen, 6 Maret 2000</em>
	    	</div><br>
	      	<ul class="tabs tabs-transparent">
	        	<li class="tab"><a href="#test1">POIN</a></li>
	        	<li class="tab"><a class="active" href="#test2">EVENT</a></li>
	        	<li class="tab"><a href="#test4">WIDRAW</a></li>
	      	</ul>
	    </div>
	  </nav>
  	
  	<div id="test1" class="col s12">
		<div>
			<h4>Statistik</h4>
			<div>	
			<div id="chart_div" style="width: 100%; height: 300px;"></div></div>
			<h4 style="margin: 0px!important;">History</h4>
			<div class="history">
				  <ul class="collection">
	    <li class="collection-item avatar">
	      <i class="circle green material-icons">add_circle</i>
	      <span class="title">ADD 10 Point From Event</span>
	      <p><em>21 Sept 2019</em>
	      </p>
	    </li>
	    <li class="collection-item avatar">
	      <i class="material-icons red circle">do_not_disturb_on</i>
	      <span class="title">MIN 5 Point To By</span>
	      <p><em>19 Sept 2019</em>
	      </p>
	    </li>
<li class="collection-item avatar">
	      <i class="material-icons red circle">do_not_disturb_on</i>
	      <span class="title">MIN 5 Point To Buy</span>
	      <p><em>19 Sept 2019</em>
	      </p>
	    </li>
	    <li class="collection-item avatar">
	      <i class="circle green material-icons">add_circle</i>
	      <span class="title">ADD 10 Point From Event</span>
	      <p><em>21 Sept 2019</em>
	      </p>
	    </li>
	  </ul>
			</div>
			<br>	<br>	
		</div>
  	</div>
  	<div id="test2" class="col s12">
		<div id="donut_single" style="width: 100%;"></div>
		<div style="position: relative; top: -130px;">
			<center>
				<b>Time Left</b>
				<h3 style="margin: 0px;">4:00</h3>
			</center>
		</div>
  	</div>
  	<div id="test4" class="col s12">CONTENT OF WIDRAW</div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Bulan Ini', 'Bulan Lalu'],
          ['5', 20, 10],
          ['9', 10, 5],
          ['15', 25, 20],
          ['25', 19, 25]
        ]);

        var options = {
          hAxis: {title: 'Days',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
          legend: {position: 'top'},
        chartArea:{width:"80%", height: "80%"},
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  <script>
	  $(document).ready(function(){
    $('.tabs').tabs();
    $('.tabs').tabs({swipeable:true});
    $(".tabs-content").css('height','770px');
  });
       
</script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
       		['Effort', 'Amount given'],
          ['My all',     20],
          ['Sisa', 4]
        ]);

        var options = {
        	colors:['#FA5C5A', 'gray'],
        chartArea:{width:"100%", height: "80%"},
          pieHole: 0.9,
          pieSliceTextStyle: 'none',
          legend: 'none',
          tooltip : {
  trigger: 'none'
}
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
        chart.draw(data, options);
      }
    </script>
</body>
</html>