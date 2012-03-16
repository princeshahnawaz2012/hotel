<html>
    <head>
        <title></title>
<meta name="description" content="javasmiletours.com - Tours and travel" />
        <meta name="keywords" content="sewa mobil jogja, hotel,yogyakarta, javasmile,paket wisata yogyakarta,paket wisata jogja,java,wisata" />
        <meta name="rating" content="General">

        <meta name="robots" content="index,follow">
<link rel="shortcut icon" href="<?php echo base_url(); ?>image/padi.ico" >
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/welcome/welcome.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/welcome/imageflow.css"  />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/imageflow.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                function mycarousel_initCallback(carousel)
                {
                    
                    carousel.buttonNext.bind('click', function() {
                        carousel.startAuto(0);
                    });

                    carousel.buttonPrev.bind('click', function() {
                        carousel.startAuto(0);
                    });

                    
                    carousel.clip.hover(function() {
                        carousel.stopAuto();
                    }, function() {
                        carousel.startAuto();
                    });
                };

                jQuery(document).ready(function() {
                    jQuery('#mycarousel').jcarousel({
                        auto: 3,
                        wrap: 'last',
                        initCallback: mycarousel_initCallback
                    });
                });
            });
            

        </script>-->
    </head>

    <body>

<audio autoplay="autoplay">
        <source src="<?php echo base_url(); ?>audio/AYUN_2.ogg" type="audio/ogg" />
    </audio>

        <div class="welcome">
            <a href="<?php echo base_url(); ?>index.php/user/cpagehome/ubahBhs/en" title="go to home">
            <img src="<?php echo base_url(); ?>image/welcome/home.jpg" id="img_utama"/>
            </a>
            <ul>
                <li style="border-right: 1px solid white;margin-left: -104px"><a href="<?php echo base_url(); ?>index.php/user/cpagehome/ubahBhs/en">english</a></li>
                <li style="padding-left: 7px"><a href="<?php echo base_url(); ?>index.php/user/cpagehome/ubahBhs/id">indonesia</a></li>
            </ul>
            <a href="<?php echo base_url(); ?>index.php/user/cpagehome/ubahBhs/en" title="klik here goto home">
            <div class="logo_name">
                <h3>welcome</h3>
                <h2>JAV<span style="margin-left: -14px">A</span> SMILE</h2>
                <h4>tours and travel</h4>
                <img src="<?php echo base_url(); ?>image/welcome/padi.gif"/>
            </div>
            </a>
<p style="position: absolute;color: white; opacity: 0.7;font-size: 20px;margin-left: 27px;margin-top: -47px;font-family: arial">www.jogjakota.go.id</p>
            <!--<ul id="mycarousel" class="jcarousel-skin-tango" style="height: 200px">
                <?php if(isset($gambar)){
                    foreach ($gambar as $r) {?>
                       <li><img src="<?php echo base_url()."uploads/$r->gambarW";?>" alt="" /></li>
                 
                                  <?php  }
                }?>

            </ul>-->
            
		<div id="myImageFlow" class="imageflow" style="margin-top: -114px;margin-left: -3px">
                <?php if(isset($gambar)){
                    foreach ($gambar as $r) {?>
                       <img src="<?php echo "uploads/$r->gambarW";?>" alt="" longdesc="<?php echo "uploads/$r->gambarW";?>" />
                 
                                  <?php  }
                }?>
                
            </div>

        </div>
        
        
    </body>
</html>