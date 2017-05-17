<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Startseite</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link rel="icon" href="assets/img/tabicon.png">
</head>
<body>        
	<div id="wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
						<a href="https://www.htl-hl.ac.at"><img src="assets/img/htl.png"/></a>
                    </a>
                </div>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        
		<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
					<html>
					<head>
						<!-- Kalender-Dateien einbinden -->
						<script type="text/javascript" src="inc/calendar.js"></script>
						<link rel="stylesheet" type="text/css" href="inc/calendar.css" />
					</head>
					<body>
						<table border=1 id='calendar'>
							<tr style='visibility:collapse;' hidden>
								<td colspan=7 id='date_memory'>---</td>
							</tr>
							<tr>
								<td class='calendar_head'><a class='calendar_link'
									href='javascript:prevMonth()'> &laquo;</a></td>
								<td colspan=5 class='calendar_head_month' id='calendar_month'>
									---</td>
								<td class='calendar_head'><a class='calendar_link'
									href='javascript:nextMonth()'> &raquo;</a></td>
							</tr>
							<tr>
								<td class='calendar_day'>Mo</td>
								<td class='calendar_day'>Di</td>
								<td class='calendar_day'>Mi</td>
								<td class='calendar_day'>Do</td>
								<td class='calendar_day'>Fr</td>
								<td class='calendar_day'>Sa</td>
								<td class='calendar_day'>So</td>
							</tr>
							<tr>
								<td class='calendar_entry' id='calendar_entry_1'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_2'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_3'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_4'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_5'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_6'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_7'>-x-</td>
							</tr>
							<tr>
								<td class='calendar_entry' id='calendar_entry_8'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_9'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_10'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_11'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_12'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_13'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_14'>-x-</td>
							</tr>
							<tr>
								<td class='calendar_entry' id='calendar_entry_15'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_16'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_17'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_18'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_19'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_20'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_21'>-x-</td>
							</tr>
							<tr>
								<td class='calendar_entry' id='calendar_entry_22'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_23'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_24'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_25'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_26'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_27'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_28'>-x-</td>
							</tr>
							<tr>
								<td class='calendar_entry' id='calendar_entry_29'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_30'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_31'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_32'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_33'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_34'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_35'>-x-</td>
							</tr>
							<tr>
								<td class='calendar_entry' id='calendar_entry_36'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_37'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_38'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_39'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_40'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_41'>-x-</td>
								<td class='calendar_entry' id='calendar_entry_42'>-x-</td>
							</tr>
						</table>
						
						<script type='text/javascript'>
							iniCalendar();
							
							/*0 = wie bisher, Datum wird in die Box geschrieben*/
							setReturnModus(1);
							/*1 = neu, Eventtext wird in die Box geschrieben
							Das event muss in der calendar.js in der Function
							getEventtext definiert werden.*/
							//setReturnModus(1);
						</script>
						
						<br />
						<br />
						
						<form id='myform'>
							<input id='datum' size=30/>
						</form>

					</body>
					</html>
				</ul>
			</div>
        </nav>
		<!-- /. NAV SIDE  -->
        
		<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
						<h2>Startseite für Login</h2>	<!-- Titel der Seite -->
                    </div>
                </div>      
				<!-- /. ROW  -->
				
				<hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
							<strong>Willkommen auf der Startseite! </strong> Bitte wählen Sie die entsprechende Aktion aus und melden Sie sich an.	<!-- Information -->
                        </div> 
                    </div>
                </div>
				<!-- /. ROW  --> 
				
				<div class="row text-center pad-top">  
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">	<!-- Login-Button -->
						<div class="div-square">
							<a href="login1.php" >
								<i class="fa fa-sign-in fa-5x" aria-hidden="true"></i>
								<h4>Login</h4>
							</a>
						</div>
					</div>
				  
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">	<!-- Register-Button -->
						<div class="div-square">
							<a href="registrieren1.php" >
								<i class="fa fa-user fa-5x"></i>
								<h4>Register</h4>
							</a>
						</div>
                    </div> 
				</div>
				<!-- /. ROW  -->   
				
				<div class="row">
					<div style="text-align: center;">
						<img src="assets/img/htl-hl.png"/>
					</div>
				</div>
				<!-- /. ROW  -->   
				
				<div class="row">
                    <div class="col-lg-12 ">
						<br/>
                        <div class="alert alert-danger">
                            <strong>Want More Icons Free ? </strong> Checkout fontawesome website and use any icon <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Click Here</a>.
                        </div>
                    </div>
				</div>
			</div>
        </div>
    </div>
	
    <div class="footer">
		<div class="row">
			<div class="col-lg-12" >
				&copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
			</div>
		</div>
	</div>
	<!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
