<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Sistem Informasi TA JTI</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="<?php echo base_url(); ?>/assets/font/OpenSans-LightItalic.ttf" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet">
    
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
    
    <link href="<?php echo base_url(); ?>/assets/css/pages/reports.css" rel="stylesheet">
	 
	  <style type="text/css">
       
        .margin {
            margin: 0px 800px 0px 180px;    
        }
		.margin2 {
            margin: 0px 325px 0px 650px;    
        }
		.margin3 {
			  margin: 0px 800px 0px 180px;
		}
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="#">
				Sistem Informasi TA JTI				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							Account
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Settings</a></li>
							<li><a href="javascript:;">Help</a></li>
						</ul>						
					</li>
			
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							EGrappler.com
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Profile</a></li>
							<li><a href="javascript:;">Logout</a></li>
						</ul>						
					</li>
				</ul>
			
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    



    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
			
		 			<li  ><a href="<?php base_url(); ?>home"><img src="../assets/img/icon/home.png" height="35" width="30"><span>Dashboard</span> </a> </li>
					<li ><a href="<?php base_url(); ?>penelitian"><img src="../assets/img/icon/judulpenelitian.png" height="35" width="30"><span>Judul Penelitian</span> </a> </li>
					<li ><a href="<?php base_url(); ?>listcalon"><img src="../assets/img/icon/listcalon.png" height="35" width="30"><span>List Calon Bimbingan</span> </a></li>
					<li><a href="<?php base_url(); ?>Review"><img src="../assets/img/icon/review.png" height="35" width="30"><span>Review Judul</span> </a> </li>
					<li   ><a href="<?php base_url(); ?>ListDosen"><img src="../assets/img/icon/listdosen.png" height="35" width="30"><span>List Dosen</span> </a> </li>
					<li class="active"  ><a href="<?php base_url(); ?>Tanggal"><img src="../assets/img/icon/datetime.png" height="35" width="30"><span>Datetime</span> </a> </li>
					<li ><a href="<?php base_url(); ?>CetakLaporan"><img src="../assets/img/icon/cetak.png" height="35" width="30"><span>Cetak Laporan</span> </a></li>
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    

    
				
					<div class="margin">
						<form action="<?php echo site_url('koordinator/tanggal/insert_judul') ?>" method="post">
						<h2>Usulan Judul : </h2>
						<input type="date" name="Duration">
					  	<input type="submit" name="judul" value="Simpan">   
						</form>
					
			
					<div class="info-box">
              
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Tanggal </th>
                    <th> Note </th>
                    <th class="td-actions"> Aksi </th>
					
                  </tr>
                
				    <?php
				    
						 foreach($date as $b):?>
						 	 <tr>
				                <td><?php echo $b->Duration; ?></td>
								<td><?php echo $b->Note; ?></td>
				              <td><a href=" <?php echo base_url('koordinator/tanggal/delete');?>/<?php echo $b->id; ?>
                    "class="btn  btn-warning fa fa-trash-o"
                    onClick="return confirm('Seurious?..')">
                    Reset</a></td>
				             </tr>

					   <?php
                endforeach; ?> 
					    
					  </thead>
                
              </table>
            </div>
         </div>	
					
					
				 </div>
			
				<div class="margin2">
						<form action="<?php echo site_url('koordinator/tanggal/insert_final') ?>" method="post">
						<h2>Usulan Final : </h2>
						<input type="date" name="Duration">
					  	<input type="submit" name="judul" value="Simpan">  
						</form>
					
			
					<div class="info-box">
              
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Tanggal </th>
                    <th> Note </th>
                    <th class="td-actions"> Aksi </th>
					
                  </tr>
                
				    <?php
				    
						 foreach($final as $b):?>
						 	 <tr>
				                <td><?php echo $b->Duration; ?></td>
								<td><?php echo $b->Note; ?></td>
				              <td><a href=" <?php echo base_url('koordinator/tanggal/delete');?>/<?php echo $b->id; ?>
                    "class="btn  btn-warning fa fa-trash-o"
                    onClick="return confirm('Seurious?..')">
                    Reset</a></td>
				             </tr>

					   <?php
                endforeach; ?> 
					    
					  </thead>
                
              </table>
            </div>
         </div>	
					
					
				 </div>
					
					
				 </div>
	
				<div class="margin3">
						<form action="<?php echo site_url('koordinator/tanggal/insert_sempro') ?>" method="post">
						<h2>Usulan Sempro : </h2>
						<input type="date" name="Duration">
					  	<input type="submit" name="judul" value="Simpan">  
						</form>
					
			
					<div class="info-box">
              
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Tanggal </th>
                    <th> Note </th>
                    <th class="td-actions"> Aksi </th>
					
                  </tr>
                
				    <?php
				    
						 foreach($sempro as $b):?>
						 	 <tr>
				                <td><?php echo $b->Duration; ?></td>
								<td><?php echo $b->Note; ?></td>
				              <td><a href=" <?php echo base_url('koordinator/tanggal/delete');?>/<?php echo $b->id; ?>
                    "class="btn  btn-warning fa fa-trash-o"
                    onClick="return confirm('Seurious?..')">
                    Reset</a></td>
				             </tr>

					   <?php
                endforeach; ?> 
					    
					  </thead>
                
              </table>
            </div>
         </div>	
					
					
				 </div>
					
				 </div>
 
                    
                    <div id="user-stat" class="chart" style="padding: 0px; position: relative;"><canvas id="bar-chart3" class="chart-holder" height="150" width="325"></canvas></div>
                    
                   

	  	  <!-- /row -->
	
	      <div class="row">
	     
	      		
	      		
	      		
		    </div> <!-- /span6 -->
	      	
	      	

    

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
                </div> <!-- /row -->

		</div> <!-- /container -->

	</div> <!-- /extra-inner -->

</div> <!-- /extra -->


    
    
<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				&copy; 2013 Bootstrap Responsive Admin Template.
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    

<script src="<?php echo base_url(); ?>/assets/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/excanvas.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/chart.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/base.js"></script>
<script>

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
	var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);
	
	</script>

		</div>
	</div>
	</div>
  </body>

</html>
