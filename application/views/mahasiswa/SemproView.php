<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sistem Informasi TA JTI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link  href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>/assets/font/OpenSans-LightItalic.ttf"
        rel="stylesheet">
    <link  href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet">
    <link  href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </a><a class="brand" href="#">Sistem Informasi TA JTI </a>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:;">Settings</a></li>
                                <li><a href="javascript:;">Help</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> EGrappler.com <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:;">Profile</a></li>
                                <li><a href="javascript:;">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Search">
                    </form>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->
    <div class="subnavbar">
        <div class="subnavbar-inner">
            <div class="container">
                <ul class="mainnav">
                
        <li><a href="<?php base_url(); ?>home"><img src="../assets/img/icon/home.png" height="35" width="30"><span>Dashboard</span> </a> </li>
        <li><a href="<?php base_url(); ?>usulan"><img src="../assets/img/icon/usulan.png" height="35" width="30"><span>Usulan</span> </a> </li>
        <li><a href="<?php base_url(); ?>usulanfix"><img src="../assets/img/icon/usulanfix.png" height="35" width="30"><span>Usulan Fix</span> </a></li>
        <li class="active"><a href="<?php base_url(); ?>sempro"><img src="../assets/img/icon/sempro.png" height="35" width="30"><span>Pendaftaran Sempro</span> </a> </li>
      </ul>
						
            </div>
            <!-- /container -->
        </div>
        <!-- /subnavbar-inner -->
    </div>
   </div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
		

    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	    	
	     <body
		  <form>

			<caption><h2>Formulir Pendaftaran Seminar Proposal</h2></caption>
			<tr><td><b>Nama</b></td><td> 	<input type="text" name="nama" size="30" maxlength="50"/></td></tr>
			<br></br>
			<tr><td><b>NIM</b></td><td> 	<input type="text" name="nim" size="30" maxlength="50"/></td></tr>
			<br></br>
			<tr><td><b>JUDUL</b></td><td> 	<input type="text" name="judul" size="30" maxlength="50"/></td></tr>
			<br></br>
			<tr><td><b>DESKRIPSI</b></td><td> <textarea name="deskripsi" cols="30" rows="4"></textarea></td></tr>
			<br></br>
			<tr><td><b>Jenis TA<b></td><td>
			<select name="jenis TA">
			<option value="Pilih Jenis TA Anda">Pilih jenis TA</option>
			<option value="Individu">Individu</option>
			<option value="Kelompok">Kelompok</option>
			</select></td></tr>
			<br></br>
			<tr><td><b>Dosen Pembimbing</b></td><td> 	<input type="text" name="dosenpembimbing" size="30" maxlength="50"/></td></tr>
			<br></br>
			<tr><td><input type="submit" value="Daftar"/>
			<input type="reset" id="button" value="Batal">
			</td></tr>
		</body>
	      	
	      
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
    
            <!-- /container -->
        </div>
        <!-- /extra-inner -->
    </div>
    <!-- /extra -->
    <div class="footer">
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        &copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>.
                    </div>
                    <!-- /span12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /footer-inner -->
    </div>
    <!-- /footer -->
    <!-- Le javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/excanvas.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/chart.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/base.js"></script>
    <script>
        var doughnutData = [
				{
				    value: 30,
				    color: "#F7464A"
				},
				{
				    value: 50,
				    color: "#46BFBD"
				},
				{
				    value: 100,
				    color: "#FDB45C"
				},
				{
				    value: 40,
				    color: "#949FB1"
				},
				{
				    value: 120,
				    color: "#4D5360"
				}

			];

        var myDoughnut = new Chart(document.getElementById("donut-chart").getContext("2d")).Doughnut(doughnutData);


        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);

var pieData = [
				{
				    value: 30,
				    color: "#F38630"
				},
				{
				    value: 50,
				    color: "#E0E4CC"
				},
				{
				    value: 100,
				    color: "#69D2E7"
				}

			];

				var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

				var chartData = [
			{
			    value: Math.random(),
			    color: "#D97041"
			},
			{
			    value: Math.random(),
			    color: "#C7604C"
			},
			{
			    value: Math.random(),
			    color: "#21323D"
			},
			{
			    value: Math.random(),
			    color: "#9D9B7F"
			},
			{
			    value: Math.random(),
			    color: "#7D4F6D"
			},
			{
			    value: Math.random(),
			    color: "#584A5E"
			}
		];
				var myPolarArea = new Chart(document.getElementById("line-chart").getContext("2d")).PolarArea(chartData);
	</script>
</body>
</html>
