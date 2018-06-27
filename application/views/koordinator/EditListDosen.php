<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sistem Informasi TA JTI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
    
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
			
				 <li  ><a href="<?php base_url(); ?>home"><img src="../assets/img/icon/home.png" height="35" width="30"><span>Dashboard</span> </a> </li>
					<li ><a href="<?php base_url(); ?>penelitian"><img src="../assets/img/icon/judulpenelitian.png" height="35" width="30"><span>Judul Penelitian</span> </a> </li>
					<li  ><a href="<?php base_url(); ?>listcalon"><img src="../assets/img/icon/listcalon.png" height="35" width="30"><span>List Calon Bimbingan</span> </a></li>
					<li><a href="<?php base_url(); ?>Review"><img src="../assets/img/icon/review.png" height="35" width="30"><span>Review Judul</span> </a> </li>
					<li  class="active" ><a href="<?php base_url(); ?>ListDosen"><img src="../assets/img/icon/listdosen.png" height="35" width="30"><span>List Dosen</span> </a> </li>
					<li  ><a href="<?php base_url(); ?>Tanggal"><img src="../assets/img/icon/datetime.png" height="35" width="30"><span>Datetime</span> </a> </li>
										<li class=" dropdown">					
					<a href="javascript:;" height="35" width="30" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../assets/img/icon/cetak.png" height="35" width="30">
						<span>Cetak Laporan</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
                        <li><a href="<?php base_url();?> usulanjudulcon	">Usulan Judul</a></li>
						<li><a href="<?php base_url();?> usulanfinalcon	">Usulan Final</a></li>
                        <li><a href="<?php base_url();?> kartubimbingancon">Kartu Bimbingan</a></li>
                    </ul>    				
				</li>
			
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->
        <!-- /subnavbar-inner -->
    </div>
	
	
    <!-- /subnavbar -->
    <div class="main">
        <div class="main-inner">
            <div class="container">
			<form action="<?php echo base_url(). 'Koordinator/ListDosen/update'; ?>" method="post">
				<?php echo form_hidden('id_dosen',$this->uri->segment(4)); ?>
                <body>
				
<?php foreach($dosen as $u){ ?>
			<caption><h2> Edit List Dosen </h2></caption>
			<tr><td><b> Nama dosen</b> </td><br>
				<input type="text" name="nama" value="<?php echo $u->nama ?>">
				<input type="hidden" name="id_dosen" value="<?php echo $u->id_dosen ?>">
				<br></br>
			<tr><td><b> Dosen Prodi</b> </td><br>
                <input type="text" name="prodi" value="<?php echo $u->prodi ?>">
				<br></br> 
			<tr><td><b>Kuota<b></td>
				<td><br>
				<select name="kuota">
                <option value="<?php echo $u->kuota ?>"> <?php echo $u->kuota ?> </option>
                <option value="0">---Pilih Kuota---</option>    
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				</select></td></tr>
				<br></br>
			<tr><td><b>Level <b></td><td><br>
				<select name="level">
                <option value="<?php echo $u->level ?>"> <?php echo $u->level ?> </option>
                <option value="-">---Pilih Hak Akses---</option>
				<option value="Dosen">Dosen</option>
				<option value="Koordinator">Koordinator</option>
				<option value="Reviewer">Reviewer</option>
				</select></td></tr>
				<br></br>
			<tr><td> <input type="submit" name="kirim" value="Simpan">
			<input type="reset" name="Reset" id="button" value="Batal">
			</td></tr>
			<?php }?>
		</body>
		<?php echo form_close(); ?>
            </div>
            <!-- /container -->
        </div>
        <!-- /main-inner -->
</div>
    <!-- /main -->
    <div class="extra">
        <div class="extra-inner">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <h4>
                            About Free Admin Template</h4>
                        <ul>
                            <li><a href="javascript:;">EGrappler.com</a></li>
                            <li><a href="javascript:;">Web Development Resources</a></li>
                            <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                            <li><a href="javascript:;">Free Resources and Scripts</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="http://www.egrappler.com">Open Source jQuery Plugins</a></li>
                            <li><a href="http://www.egrappler.com;">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="http://www.egrappler.com;">Free Contact Form Plugin</a></li>
                            <li><a href="http://www.egrappler.com;">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div>
                <!-- /row -->
            </div>
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
    <script  src="<?php echo base_url(); ?>/assets/js/jquery-1.7.2.min.js"></script>
    <script  src="<?php echo base_url(); ?>/assets/js/excanvas.min.js"></script>
    <script  src="<?php echo base_url(); ?>/assets/js/chart.min.js" type="text/javascript"></script>
    <script  src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
    <script  src="<?php echo base_url(); ?>/assets/js/base.js"></script>
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
