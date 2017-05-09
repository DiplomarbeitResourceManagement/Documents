<!DOCTYPE html>
<?php
	include 'abc.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Geräteauswahl</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="bootstrap.css" rel="stylesheet" />
	
	    <script src="jQuery.js"></script>
		<script src="dataTables_min.js"></script>
		<link rel="stylesheet" type="text/css" href="dataTables_min.css">
		<script src="TestTable.js"></script>
    
    <!-- CUSTOM STYLES-->
    <link href="custom_nacht.css" rel="stylesheet" title="nacht" type="text/css"/>
	<link href="custom_tag.css" rel="stylesheet" title="tag" type="text/css"/>
	
	  <script type="text/javascript">
    // *** TO BE CUSTOMISED ***

var style_cookie_name = "style" ;
var style_cookie_duration = 30 ;
var style_domain = "thesitewizard.com" ;

// *** END OF CUSTOMISABLE SECTION ***
// You do not need to customise anything below this line

function switch_style ( css_title )
{
// You may use this script on your site free of charge provided
// you do not remove this notice or the URL below. Script from
// https://www.thesitewizard.com/javascripts/change-style-sheets.shtml
  var i, link_tag ;
  for (i = 0, link_tag = document.getElementsByTagName("link") ;
    i < link_tag.length ; i++ ) 
	{
    if ((link_tag[i].rel.indexOf( "stylesheet" ) != -1) &&
      link_tag[i].title) {
      link_tag[i].disabled = true ;
      if (link_tag[i].title == css_title) 
	  {
        link_tag[i].disabled = false ;
      }
    }
    set_cookie( style_cookie_name, css_title,
      style_cookie_duration, style_domain );
  }
}
function set_style_from_cookie()
{
  var css_title = get_cookie( style_cookie_name );
  if (css_title.length) 
  {
    switch_style( css_title );
  }
}
function set_cookie ( cookie_name, cookie_value,
    lifespan_in_days, valid_domain )
{
    // https://www.thesitewizard.com/javascripts/cookies.shtml
    var domain_string = valid_domain ?
                       ("; domain=" + valid_domain) : '' ;
    document.cookie = cookie_name +
                       "=" + encodeURIComponent( cookie_value ) +
                       "; max-age=" + 60 * 60 *
                       24 * lifespan_in_days +
                       "; path=/" + domain_string ;
}
function get_cookie ( cookie_name )
{
    // https://www.thesitewizard.com/javascripts/cookies.shtml
    var cookie_string = document.cookie ;
    if (cookie_string.length != 0) {
        var cookie_value = cookie_string.match (
                        '(^|;)[\s]*' +
                        cookie_name +
                        '=([^;]*)' );
        return decodeURIComponent ( cookie_value[2] ) ;
    }
    return '' ;
}
  </script>
     
</head>
<body onload="set_style_from_cookie()">
     
           
     <!-- Oberster Teil der Webseite -->     
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
                  <a href="logout.php" class="logout_color">LOGOUT</a>  

                </span>
            </div>
        </div>
       <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                  <li class="topmenu">
					<a href="webseite_css_switch.html">Home</a>
				  </li>
				  <li class="topmenu">
					<a href="geraeteauswahl.html">Geräteauswahl</a>
					<ul>
					  <li class="submenu"><a href="">Oszilloskop</a></li>
					  <li class="submenu"><a href="">Multimeter</a></li>
					</ul>
				  </li>
				  <li class="topmenu">
					<a href="">Menü 3</a>
					<ul>
					  <li class="submenu"><a href="">Unterpunkt 3.1</a></li>
					  <li class="submenu"><a href="">Unterpunkt 3.2</a></li>
					</ul>
				  </li>    
                </ul>
            </div>
        </nav>
		
		
		<!-- Rechter Teil der Webseite -->
		<!-- /. Farbauswahl  -->
        <nav class="navbar-right-side" role="Farbauswahl">
            <div class="sidebar-collapse-right">
                <ul class="nav" id="main-menu">
					<!-- <form> -->
                     <input type="submit" onclick="switch_style('tag');return false;" name="theme" value="Tag" id="tag" class="button-tag" />	 
					 <input type="submit" onclick="switch_style('nacht');return false;" name="theme" value="Nacht" id="nacht" class="button-nacht" />	 
					 <!-- </form> -->
                </ul>
					
            </div>
        </nav>
		
		
		 <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2><strong>Geräteauswahl</strong></h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
              
                
                  <script src="jQuery.js"></script>
<script src="dataTables_min.js"></script>
<link rel="stylesheet" type="text/css" href="dataTables_min.css">
<script src="TestTable.js"></script>

<?php
	$sql = "select id, sname, fname, kname from labor,standort,firma,kategorie where standort_sid=sid and firma_fid=fid and kategorie_kid=kid";
	
	
	mysql_connect("localhost","root","") or die(mysql_error());	//Datenbankverbindungsaufbau
	mysql_select_db("labordatenbank") or die("labor");	//Datenbank auswählen
	
	$result = mysql_query($sql);	// Select Befehl ausführen
	
	// Namen der Spalten als 1. Zeile der Tabelle anzeigen
	echo '<table id="example" class="display" cellspacing="0" width="100%">';
	echo "<thead><tr>";
	echo "<th>ID</th>";
	echo "<th>Standort</th>";
	echo "<th>Firma</th>";
	echo "<th>Kategorie</th>";
	echo "</tr></thead>";
	
	echo "<tfoot><tr>";
	echo "<th>ID</th>";
	echo "<th>Standort</th>";
	echo "<th>Firma</th>";
	echo "<th>Kategorie</th>";
	echo "</tr></tfoot>";
	
	echo "<tbody>";
	
	while ($row=mysql_fetch_array($result))	// wird so oft ausgeführt, wie Einträge in der Datenbank sind
	{
		// aktuellen Eintrag als Zeile der Tabelle anzeigen
		echo "<tr>";
		echo "<td>". $row["id"] . "</td>";
		echo "<td>". $row["sname"] . "</td>";
		echo "<td>". $row["fname"] . "</td>";
		echo "<td>". $row["kname"] . "</td>";
		echo "</tr>";
	}
	
	echo "</tbody></table>";	// Tabelle anzeigen
?>
                 
                 
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
		<!-- Unterer Teil der Webseite -->
		<div class="footer">
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2017 Bayer Mathias | Design by: <a class="link-unten" href="http://htl-hl.ac.at"  target="_blank">www.htl-hl.ac.at</a>
                </div>
            </div>
        </div>

   
</body>
</html>