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
            <img src="images/general.png"
                 <br><br><br><br><br><br><br><br>
    	<!-- **Content Full Width** -->
    	<div class="content content-full-width">
		<p style="margin:0;padding:0;width:100%;">&nbsp;</p>
		<script>
            $(document).ready(function() {
                $.museum($('#content img'));
            });
        </script>
        <style type='text/css'>
        #container { margin: 50px; }
        #content img {margin-right: 10px; margin-bottom: 10px; border:2px solid #043a6b; padding:5px;width:235px;height:180px; }
        #content img:hover { border: 2px solid #fff; }
        pre { background: rgba(255,255,255,0.6); padding: 10px; color: #012647;} 
		.msm-content{margin-top:8% !important;}
		.one-third{float:left;}
        </style>
		<div id='content'>
		<h1 class="title"> <span> Inside View </span> </h1>
		<div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                <img src='images/general/DSC_0985.jpg' />
				</div>
				<!--<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
		<div class="one-third cosmetics-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/general/DSC_0983.jpg' />
				</div>
				<!--<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
		<div class="one-third treatment-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/general/DSC_0972.jpg' />
			    </div>
				<!--<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
                
		<div class="one-third health-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/general/DSC_0023.jpg' />
				</div>
				<!--<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
		<h1 class="title"> <span> Product </span> </h1>
		<div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/general/DSC_0011.jpg' />
				</div>
				<!--<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
		<div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/general/DSC_0018.jpg' />
				</div>
				<!--<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
		<div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/general/DSC_0037.jpg' />
				</div>
				<!--<div class="gallery-title">
                    <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                </div>-->
			</div>
		</div>
		<div class="one-third herbal-sort">
            <div class="gallery">
                <div class="gallery-image">
                    <img src='images/general/DSC_0043.jpg' />
				</div>
				<!--<div class="gallery-title">
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