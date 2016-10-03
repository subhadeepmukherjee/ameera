<?php require_once('parts/head.php'); ?>
<body class="home">
<!-- **Header** -->
<div id="header">
	<div class="container">
		<?php require_once('parts/header.php'); ?>
     
      
        <?php //require_once('parts/search.php') ?>
    </div>
</div><!-- **Header - End** -->
<!-- ** Main** -->
<div id="main" style="padding:0;margin:0;">
	<!-- **Main Container** -->
	<div class="main-container">
    
    	<!-- **Content Full Width** -->
    	<div class="content content-full-width">
		<p style="margin:0;padding:0;width:100%;">&nbsp;</p>
		        	<h1 class="title"> <span> Book Now </span> </h1>
            <h2> Book Your Slot for your Favourite service </h2>    
            
            <div class="hr_invisible"> </div>
            
            <div class="column two-third">
            	<div id="ajax_message"></div>
            	<form id="booknow-form" action="php/booknow.php" method="get" class="booknow-form">
                	<p>
                        <label> Name <span class="required"> * </span> </label>
                        <input required="required" name="fname" type="text" />
                    </p>
                    <p>
                        <label> Gender </label>
                        <span class="gender">
                            <input type="radio" class="radiob1" id="Male" name="Gender" value="Male" />
                            Male
                            <input required="required" type="radio" class="Female" id="Female" name="Gender" value="Female" checked="checked" />
                            Female
                        </span>
                    </p>
                    <p>
                        <label> Mobile <span class="required"> * </span> </label>
                        <input required="required" name="phone" type="text" />
                    </p>
                    <p>
                        <label> Email <span class="required"></span> </label>
                        <input name="email" type="email" />
                    </p>
                    <p>
                    	<label> Date of Service <span class="required"> * </span> </label>
                        <select required="required" class="day" id="treatment_day" name="treatment_day">	
                            <option value="">Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option
                            ><option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option
                            ><option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        
                        <select required="required" class="day" id="treatment_month" name="treatment_month">
                            <option value="">Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">Aug</option>
                            <option value="9">Sep</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>
                        </select>
                        <select required="required" class="day" id="treatment_year" name="treatment_year">
                            <option value="">Year</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                        </select>
                    </p>
                    <p>
                    	<label> Preferred time <span class="required"> * </span> </label>
                        <select required="required" class="salutation" id="PreferredTime" name="PreferredTime">
	                        <option>Time</option>
                        	
                            <option>11 AM</option>
                            <option>12 PM</option>
                            <option>01 PM</option>
                            <option>02 PM</option>
                            <option>03 PM</option>
                            <option>04 PM</option>
                            <option>05 PM</option>
                            <option>06 PM</option>
                            <option>07 PM</option>
                        </select>
                    </p>
                    <p>
                    	<label> Type of Sevice </label> 
                        <select required="required" class="treatment" id="treatment" name="treatment">
                            <option value="select">Select</option>
                            <option value="facial">Facial</option>
                            <option value="skin">skin</option>
                            <option value="body polish">Body polish</option>
                        </select>       
                    </p>
                    <p class="submit">
                    	<input name="booknow" type="submit" value="Book Now" />
                    </p>                    
                </form>   
            </div>
            <p style="margin:0;padding:0;width:100%;">&nbsp;</p> 
            <!--<div class="column one-third last">    
            	<div class="booknow-page">
                    <h1> Contact Details </h1>  
                    <ul class="contact-details">   
                        <li> <span class="address"> </span> <p> No: 58 A, East Madison St <br /> Baltimore, MD <br /> USA </p> </li>             
                        <li> <span class="mail"> </span> <p> <a href="" title=""> yourname@somemail.com </a> </p> </li>
                        <li> <span class="phone"> </span> <p> 2145 - 007 - 1566 </p> </li>                        
                    </ul>
                
                    <h1> Working Hours </h1>
                    <div class="notice"> <span class="left"> Mon - Fri : </span> <span class="right"> 8am - 6pm </span> </div>
                    <div class="notice"> <span class="left"> Sat &amp; Sunday : </span> <span class="right"> 8am - 10pm </span> </div>
                </div>          
            </div>--> 
        </div> <!-- **Content Full Width - End** -->   	
        <?php //require_once('parts/newsletter.php'); ?>
        
    </div><!-- **Main Container - End** -->
 <?php require_once('parts/footer.php'); ?>