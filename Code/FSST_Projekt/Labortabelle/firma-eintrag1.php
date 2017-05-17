<!DOCTYPE html>
<?php
	include 'geheim1.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8_german2_ci" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Firmeneintrag</title>
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
              
                <span class="logout-spn" >
					<a href="logout.php" style="color:#fff;">LOGOUT</a>  <!-- Logout-Button -->
                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
		
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
					<!-- Hauptmenü-Button links -->
					<li>
                        <a href="index.php" ><i class="fa fa-home" aria-hidden="true"></i>Hauptmenü <span class="badge">Included</span></a>
                    </li>
					<!-- Geräteauswahl-Button links -->
                    <li>
						<a href="filter.php"><img src="assets/img/multi_side.png"width="20"height="20"/>   Geräteauswahl   <span class="badge">Included</span></a>
                    </li>
					<!-- Labortabelle-Button links -->
                    <li>
                        <a href="labor-eintrag1.php"><img src="assets/img/labor_Side.png"width="20"height="20"/>   Labortabelle   <span class="badge">Included</span></a>
                    </li>
					<!-- Firmeneintrag-Button links -->
                    <li>
                         <a href="firma-eintrag1.php"><img src="assets/img/firma_side.png"width="20"height="20"/>   Firmeneintrag   <span class="badge">Included</span></a>
                    </li>
					<!-- Standort-Button links -->
                    <li>
                        <a href="standort-eintrag1.php"><img src="assets/img/standort_side.png"width="20"height="20"/>   Standort   <span class="badge">Included</span></a>
                    </li>
					<!-- Kategorie-Button links -->
                    <li>
                        <a href="kategorie-eintrag1.php"><img src="assets/img/kategorie_side.png"width="20"height="20"/>   Kategorie   <span class="badge">Included</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
		
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
						<h2>Firma hinzufügen </h2>	<!-- Titel der Seite -->   
                    </div>
                </div>              
                <?php
					include 'firma-eintrag.php';	// firma-eintrag.php ausführen
				?>
			</div>
            <!-- /. PAGE INNER  -->
		</div>
        <!-- /. PAGE WRAPPER  -->
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
