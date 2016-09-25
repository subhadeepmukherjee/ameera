<?php require_once('parts/head.php'); ?>
<body class="home">
<!-- **Header** -->
<div id="header">
	<div class="container">
		<?php require_once('parts/header.php'); ?>
        <!-- **Logo** -->
        <div id="logo">
        	<a href="index.php" title=""> <img src="images/logo.png" alt="" title="" height="100px" width="100px" /> </a>
        </div><!-- **Logo - End** -->
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
                <img src="images/contact.png"><br><br><br><br><br><br>
		<p style="margin:0;padding:0;width:100%;">&nbsp;</p>
                <div class="green-border"> 
                    <iframe src="https://www.google.com/maps/d/embed?mid=1K-97sa6zXcQhFdAgjnLqQfFRtZU" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="930" height="340"></iframe> 
                </div>
            
            <div class="hr_invisible"> </div>
            
           <div class="column one-third">            	
                <h1> Contact Details </h1>  
                <ul class="contact-details">   
                    <li> <span class="address"> </span> <p> 18/2 Kalikapur Road, Opposite:<br /> Metro Cash & Carry Mall<br /> Kolkata-700099</p> </li>             
                    <li> <span class="mail"> </span> <p> <a href="mailto:bulajaya@gmail.com" title=""> info@ameeraglamourworld.com </a> </p> </li>
                    <li> <span class="phone"> </span> <p> (+91) 9432000971 / 9433069419 </p> </li>                    
                </ul>
            </div>
            
            <div class="column one-third">
                <h1> Working Hours </h1>
                <div class="notice"> <span class="left"> Wednesday To Monday : </span> <br><span class="right"> 11 a.m. - 8 p.m.   </span> </div>
                <div class="notice"> <span class="left"> Tuesday Closed </span> <span class="right">  </span> </div>
                 <a href="booknow.html" class="big-ico-button red book"> <span> Book an Appointment </span> </a>
            </div>
            
            <div class="column one-third last">
            	<div class="enquiry-form">
                    <h1> Enquiry </h1>
                    <div id="ajax_message"></div>
    				 <form name="frmcontact" id="frmcontact" action="php/contact.php" method="post">
                        <input id="name" name="name" type="text" value="Name"
                            onblur="this.value=(this.value=='') ? 'Name' : this.value;" onfocus="this.value=(this.value=='Name') ? '' : this.value;" />
                        <input id="email" name="email" type="text" value="Email" 
                            onblur="this.value=(this.value=='') ? 'Email' : this.value;" onfocus="this.value=(this.value=='Email') ? '' : this.value;" />
                        <textarea id="message" name="message"
                            onblur="this.value=(this.value=='') ? 'Message' : this.value;" onfocus="this.value=(this.value=='Message') ? '' : this.value;" cols="" rows="">Message</textarea>
                        <input name="submit" id="send" type="submit" value="Submit" />
                    </form>
                </div>
            </div>
        	
            
        </div> <!-- **Content Full Width - End** -->   	
        <?php //require_once('parts/newsletter.php'); ?>
        
    </div><!-- **Main Container - End** -->
 <?php require_once('parts/footer.php'); ?>