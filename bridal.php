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
            <img src='images/makeup.png' />
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
		<h1 class="title"> <span> Makeups</span> </h1>
		<!-- Repeat this div for images-->
		<div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/makeup/DSC_0072.jpg' />
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
                    <img src='images/makeup/DSC_0129.jpg' />
				</div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Color in Disguise </a> </h5>
                </div>-->
			</div>
		</div>
		<div class="one-third treatment-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/makeup/DSC_0156.jpg' />
			    </div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Spa Bars </a> </h5>
                </div> -->
			</div>
		</div>
                
                <div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/makeup/DSC_0264.jpg' />
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
                    <img src='images/makeup/DSC_0268.jpg' />
				</div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Color in Disguise </a> </h5>
                </div>-->
			</div>
		</div>
		<div class="one-third treatment-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/makeup/DSC_0268.jpg' />
			    </div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Spa Bars </a> </h5>
                </div> -->
			</div>
		</div>
                
                <div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/makeup/DSC_0408.jpg' />
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
                    <img src='images/makeup/DSC_0450.jpg' />
				</div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Color in Disguise </a> </h5>
                </div>-->
			</div>
		</div>
		<div class="one-third treatment-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/makeup/DSC_0476.jpg' />
			    </div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Spa Bars </a> </h5>
                </div> -->
			</div>
		</div> 
                
                <div class="one-third treatment-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/makeup/DSC_0564.jpg' />
			    </div>
<!--				<div class="gallery-title">
                    <h5> <a href="#" title=""> Spa Bars </a> </h5>
                </div> -->
			</div>
		</div>
                
                <h1 class="title"> <span> Bridal</span> </h1>
		<!-- Repeat this div for images-->
		<div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/makeup/b1.jpg' />
				</div>
<!--    				<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
                
                <div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/makeup/b2.jpg' />
				</div>
<!--    				<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
                
                <div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                                    <img src='images/makeup/b3.jpg' />
				</div>
<!--    				<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
                
		
     </div><!-- **content - End ** -->
	 <p style="margin:0;padding:0;width:100%;">&nbsp;</p><br><br>
        </div> <!-- **Content Full Width - End** -->   	
        <?php //require_once('parts/newsletter.php'); ?>
        
    </div><!-- **Main Container - End** -->
<?php $include_footer_js = false; ?>
<?php require_once('parts/footer.php'); ?>