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
		    	<!--<p>  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets remaining essentially unchanged. It was popularised in the 1960s with the  containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>-->             
				<div id="sorting-container">
            	<a href="#" title="" class="active_sort" data-filter=".all-sort"> All </a>                                     
                <a href="#" title="" data-filter=".health-sort"> Health </a>
                <a href="#" title="" data-filter=".herbal-sort"> Herbal </a>
                <a href="#" title="" data-filter=".treatment-sort"> Treatment </a>
                <a href="#" title="" data-filter=".cosmetics-sort"> Cosmetics </a>
				</div>
            <!-- **Gallery Wrapper -->
            <div class="gallery-wrapper">
                
                <!-- **Gallery Container** -->
                <div class="gallery-container">
                 
                	<!-- **Gallery One Fourth** -->
                	<div class="one-half herbal-sort">
                        <div class="gallery">
                            <div class="gallery-image">
                                <a href="#" title="">
                                    <img src="http://placehold.it/469x380" alt="" title="" />
                                </a>
                            </div>
                            
                            <div class="gallery-title">
                                <h5> <a href="#" title=""> Spa Echo </a> </h5>
                            </div> 
                        </div>
                    </div><!-- **Gallery One Fourth - End** -->
                
                	<!-- **Gallery One Fourth** -->
                	<div class="one-half cosmetics-sort">
                        <div class="gallery">
                            <div class="gallery-image">
                                <a href="#" title="">
                                    <img src="http://placehold.it/469x380" alt="" title="" />
                                </a>
                            </div>
                            
                            <div class="gallery-title">
                                <h5> <a href="#" title=""> Color in Disguise </a> </h5>
                            </div> 
                        </div>
                    </div><!-- **Gallery One Fourth - End** -->
                    
                	<!-- **Gallery One Fourth** -->
                	<div class="one-half treatment-sort">
                        <div class="gallery">
                            <div class="gallery-image">
                                <a href="#" title="">
                                    <img src="http://placehold.it/469x380" alt="" title="" />
                                </a>
                            </div>
                            
                            <div class="gallery-title">
                                <h5> <a href="#" title=""> Spa Bars </a> </h5>
                            </div> 
                        </div>
                    </div><!-- **Gallery One Fourth - End** -->
                    
                	<!-- **Gallery One Fourth** -->
                	<div class="one-half health-sort">
                        <div class="gallery">
                            <div class="gallery-image">
                                <a href="#" title="">
                                    <img src="http://placehold.it/469x380" alt="" title="" />
                                </a>
                            </div>
                            
                            <div class="gallery-title">
                                <h5> <a href="#" title=""> Honey Dew </a> </h5>
                            </div> 
                        </div>
                    </div><!-- **Gallery One Fourth - End** -->
                    
                	<!-- **Gallery One Fourth** -->
                	<div class="one-half herbal-sort">
                        <div class="gallery">
                            <div class="gallery-image">
                                <a href="#" title="">
                                    <img src="http://placehold.it/469x380" alt="" title="" />
                                </a>
                            </div>
                            
                            <div class="gallery-title">
                                <h5> <a href="#" title=""> Misc Herbs </a> </h5>
                            </div> 
                        </div>
                    </div><!-- **Gallery One Fourth - End** -->
                
                	<!-- **Gallery One Fourth** -->
                	<div class="one-half herbal-sort">
                        <div class="gallery">
                            <div class="gallery-image">
                                <a href="#" title="">
                                    <img src="http://placehold.it/469x380" alt="" title="" />
                                </a>
                            </div>
                            
                            <div class="gallery-title">
                                <h5> <a href="#" title=""> Wollen Cloth </a> </h5>
                            </div> 
                        </div>
                    </div><!-- **Gallery One Fourth - End** -->
                    
                    
                </div><!-- **Gallery Container - End** -->
                
            
            </div><!-- **Gallery Wrapper** -->
        </div> <!-- **Content Full Width - End** -->   	
        <?php //require_once('parts/newsletter.php'); ?>
        
    </div><!-- **Main Container - End** -->
<?php $include_footer_js = false; ?>
<?php require_once('parts/footer.php'); ?>