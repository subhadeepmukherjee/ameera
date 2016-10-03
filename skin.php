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
            <img src='images/skint.png' />
                   <br><br><br><br><br><br><br><br>
    	<!-- **Content Full Width** -->
    	<div class="content content-full-width">
		<p style="margin:0;padding:0;width:100%;">&nbsp;</p>
		<script>
            $(document).ready(function() {
                $.museum($('#content img'));
            });
        </script>
        <div id='content'>
		<h1 class="title"> <span> Skin Care    (Facial/Detaning) </span> </h1>
		<!-- Repeat this div for images-->
		<div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/skin/DSC_0871.jpg' />
				</div>
<!--    				<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
		<!-- Repeat this div for images-->
		<div class="one-third cosmetics-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/skin/DSC_0893.jpg' />
				</div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Color in Disguise </a> </h5>
                </div>-->
			</div>
		</div>
		<div class="one-third treatment-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/skin/DSC_0899.jpg' />
			    </div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Spa Bars </a> </h5>
                </div> -->
			</div>
		</div>
                
                <div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/skin/DSC_0902.jpg' />
				</div>
<!--    				<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
		<!-- Repeat this div for images-->
		<div class="one-third cosmetics-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/skin/DSC_0910.jpg' />
				</div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Color in Disguise </a> </h5>
                </div>-->
			</div>
		</div>
		<div class="one-third treatment-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/skin/DSC_0914.jpg' />
			    </div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Spa Bars </a> </h5>
                </div> -->
			</div>
		</div>
		
     </div><!-- **content - End ** -->
	 <p style="margin:0;padding:0;width:100%;">&nbsp;</p><br><br>
        </div> <!-- **Content Full Width - End** -->   	
        <?php //require_once('parts/newsletter.php'); ?>
        
    </div><!-- **Main Container - End** -->
<?php $include_footer_js = false; ?>
<?php require_once('parts/footer.php'); ?>