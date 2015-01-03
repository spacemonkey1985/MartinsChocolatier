<?php

	include('includes/db_connection.php');
	
	if(isset($_POST['email'])){
		if($_POST['email'] != ''){
			$query = "INSERT INTO mc_subscribers(Email) values('" . $_POST['email'] . "');";
		
			mysql_query($query);
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-translate-customization" content="5537b7d27b0d445-cc113ac5db8147e8-g1f49ccb9b95a3fb6-1d"></meta>
<link rel="stylesheet" href="stylesheets/common.css" type="text/css" />
<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="stylesheets/nivo-slider.css" type="text/css" media="screen" />
<title>Martins Chocolatier</title>
</head>

<body>
    
    <div class="footer">
    	<div class="wrapper">
            <div class="footer-box">
            	<div class="footer-text1">Thanks! you</div>
                <div class="footer-text2">are now on</div>
               <div class="footer-text1">our mailing list</div>
            </div>
            
            <div class="footer-box-seperator"></div>
            
            <div class="footer-box">
            	<div class="footer-text1">Why not join our</div>
                <div class="footer-text2">tasting club?</div>
                <a href="http://www.martinschocolatier.co.uk/info/Enjoying_Chocolate" target="_parent"><img src="images/more.png" alt="More" style="margin-top: 20px;" /></a>
            </div>
    
            <div class="footer-box-seperator"></div>
                    
            <div class="footer-box">
            	<div class="footer-text1">Connect with<span class="footer-text3">us</span></div>
                
                <img src="images/social_media.png" alt="Social Media" style="margin-left: 30px;" usemap="#sn" />
                <map name="sn">
                	<area shape="rect" coords="0,0,90,80" href="http://www.facebook.com/mychocolateclub" target="_new" />
                    <area shape="rect" coords="90,0,180,80" href="https://twitter.com/MyChocolateClub" target="_new" />
                </map>
            </div>
        </div>
    </div>
    
    <div class="clear"></div>
    
    <div class="footer-menu">
    	<div class="wrapper">
        	<div style="float:left; width:100%; overflow:hidden; position:relative;">
                <ul>
                    <li><a href="http://www.martinschocolatier.co.uk/info/About_Us" style="border-left: 1px solid #390000;" target="_parent">About Us</a></li>
                    <li><a href="http://www.martinschocolatier.co.uk/info/Enjoying_Chocolate" target="_parent">Join Our Tasting Clubs</a></li>
                    <li><a href="http://www.martinschocolatier.co.uk/info/Chocolate_History" target="_parent">Chocolate History</a></li>
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>
