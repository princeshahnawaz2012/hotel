<!--<div class="slide3">
    <img src="<?php echo base_url(); ?>image/slide/segitiga_batik2.gif" class="batik_kanan_atas"/>
    <img src="<?php echo base_url(); ?>image/slide/segitiga_batik3.gif" class="batik_kiri_bawah"/>
    
    <div id="scroll">

        
        <div id="tools">



            
            <div></div>

            
            <?php if(isset($gambar)) {
                foreach ($gambar as $r) { ?>
            <div class="tool">

                <a href="/tools/tabs/index.html">
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarW?>"/>
                </a>



            </div>
                    <?php }
            }?>

        </div>

         
        
        <br clear="all" />

        
        <div id="thumbs" class="t">

            
            <div class="navi_segitiga">
                <ul>
                    <li><img src="<?php echo base_url(); ?>image/slide/segitiga_batik_1.gif" style="display: block"/></li>
                    <li><img src="<?php echo base_url(); ?>image/slide/segitiga_batik_1.gif"/></li>
                    <li><img src="<?php echo base_url(); ?>image/slide/segitiga_batik_1.gif"/></li>
                </ul>

            </div>
            
            <div class="navi">
                <a style="display:none"></a>
                <?php $i=0;if(isset ($gambar)){
                foreach ($gambar as $r) { $i++;?>
                 <a id="t<?php echo $i?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarW?>"/></a>
                <?php }}   ?>


            </div>

        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".navi img:eq(0)").click(function(){
                $(".navi_segitiga ul li img:eq(0)").css({
                    "display":"block"
                });
                $(".navi_segitiga ul li img:eq(1),.navi_segitiga ul li img:eq(2)").css({
                    "display":"none"
                });
                $(".navi_segitiga ul li img:eq(1)").css({
                    "margin-left":"151px"
                });
                $(".navi_segitiga ul li img:eq(2)").css({
                    "margin-left":"293px"
                });
            });
            $(".navi img:eq(1)").click(function(){
                $(".navi_segitiga ul li img:eq(1)").css({
                    "display":"block"
                });
                $(".navi_segitiga ul li img:eq(0),.navi_segitiga ul li img:eq(2)").css({
                    "display":"none"
                });
                $(".navi_segitiga ul li img:eq(1)").css({
                    "margin-left":"151px"
                });
                $(".navi_segitiga ul li img:eq(2)").css({
                    "margin-left":"293px"
                });
            });
            $(".navi img:eq(2)").click(function(){
                $(".navi_segitiga ul li img:eq(2)").css({
                    "display":"block"
                });
                $(".navi_segitiga ul li img:eq(1),.navi_segitiga ul li img:eq(0)").css({
                    "display":"none"
                });
                $(".navi_segitiga ul li img:eq(1)").css({
                    "margin-left":"151px"
                });
                $(".navi_segitiga ul li img:eq(2)").css({
                    "margin-left":"293px"
                });
            });
        });
    </script>
    <script>
        
        var api = $("#scroll").scrollable({
            items: '#tools'

        
        }).navigator().data("scrollable");


        
        api.onBeforeSeek(function(e, i) {

        
            if (i) {
                $("#intro").fadeOut("slow");

        
                if ($.browser.msie && $.browser.version < 8) {
                    $("#intro").hide();
                }

        
            } else {
                $("#intro").fadeIn(1000);
            }

        
            $("#t0").toggleClass("active", i == 0);
        });

        
        $("#t0").click(function() {

        
            $("#scroll").scrollable().begin();

        });

    </script>
</div>-->

<!-- ----------------------------------------------------------------------------- -->

<div class="slide3">
    
    <style>
        
        /* CSS Document */

        /* slider layout */
        .lof-slidecontent { position:relative;	overflow:hidden;	}
        .lof-slidecontent .preload{	height:100%;	width:100%;	position:absolute;	top:0;	left:0;	z-index:100000;	text-align:center;	background:#FFF}
        .lof-slidecontent .preload div{	height:100%;	width:100%;	background:transparent url(../images/load-indicator.gif) no-repeat scroll 50% 50%;}

        .lof-slidecontent  .sliders-wrapper{	position:relative;	height:100%;	width:900px;	z-index:3px;	overflow:hidden; }
        .lof-slidecontent  ul.sliders-wrap-inner{overflow:hidden;	background:transparent url(../images/load-indicator.gif) no-repeat scroll 50% 50%;	padding:0px;	margin:0;	position:absolute;	overflow:hidden;}
        .lof-slidecontent  ul.sliders-wrap-inner li{overflow:hidden;	padding:0px;margin:0px;	float:left;	position:relative;}
        .lof-slidecontent  .lof-opacity  li{position:absolute;	top:0;	left:0;	float:inherit; }


        .lof-slidecontent  .navigator-content {position:absolute; bottom:10px; right:10px;
                                               background:url(../images/transparent_bg.png) repeat;
                                               padding:5px 0px;
        }
        .lof-slidecontent  .navigator-wrapper{	position:relative;	z-index:10;
                                               height:180px;
                                               width:310px;
                                               overflow:hidden;
                                               color:#FFF;
                                               float:left
        }
        .lof-slidecontent  ul.navigator-wrap-inner{	top:0;	padding:0;	margin:0;	position:absolute;	width:100%; }
        .lof-slidecontent  ul.navigator-wrap-inner li{ cursor:hand; 	cursor:pointer;	list-style:none;	padding:0;	margin-left:0px;	overflow:hidden;	float:left;	display:block;	text-align:center;}

        /*******************************************************/

        ul.sliders-wrap-inner li img{	padding:0px; margin-left: 66px;
                                      margin-top: 20px;border:5px solid white}

        .lof-slidecontent .slider-description a.readmore{color:#58B1EA; font-size:95%; }
        .lof-slidecontent .slider-description a{ color:#FFF; }
        .lof-slidecontent .slider-description{
            z-index:100px;
            position:absolute;
            bottom:50px;
            left:0px;
            width:350px;
            background:url(../images/bg_trans.png);
            height:100px;
            padding:10px;
            color:#FFF;
        }
        .lof-slidecontent .slider-description h4 {    font-size: 14px;    margin: 10px 0;    padding: 0; }
        .lof-slidecontent .slider-description .slider-meta a{	
            margin:0;
            background:#C01F25;
            font-size:75%;
            padding:2px 3px;
            font-family:"Trebuchet MS",Trebuchet,Arial,Verdana,sans-serif;
            text-transform:uppercase;
            text-decoration:none
        }
        .lof-slidecontent  .item-meta a:hover{	text-decoration:underline;}
        .lof-slidecontent  .item-meta i {	font-size:70%; }

        /* item navigator */

        .lof-slidecontent ul.navigator-wrap-inner li img{
            height: 92px;
            width: 108px
                /*            	border:#666 solid 3px;	*/
        }
        .lof-slidecontent ul.navigator-wrap-inner li.active img, 
        .lof-slidecontent ul.navigator-wrap-inner li:hover img {
            /*	border:#A8A8A8 solid 3px; efek*/
            /*            background-image: url(image/slide/segitiga_batik.gif);*/
            
            -moz-transition:border-color  ease-in-out 0.4s;
            background: url('<?php echo base_url(); ?>image/slide/segitiga_batik_1.gif') top no-repeat;
            
            padding-top: 20px
        }
        .lof-slidecontent .navigator-content .button-next, 
        .lof-slidecontent .navigator-content .button-previous{
            display:block;
            width:22px;
            height:30px;
            color:#FFF;
            cursor:pointer;

        }
        .lof-slidecontent .navigator-content .button-next {
            float:left;	
            text-indent:-999px;
            margin-right:5px;
            background:url(../images/arrow-l.png) no-repeat right center;
        }
        .lof-slidecontent .navigator-content .button-previous {
            float:left;	
            text-indent:-999px;
            margin-left:5px;
            background:url(../images/arrow-r.png) no-repeat left center;
        }

        .lof-slidecontent .button-control {
            position:absolute;
            top:10px;
            right:10px;
            height: 20px;
            width: 20px;
            cursor:hand; cursor:pointer;
            background:url(../images/transparent_bg.png) repeat;
        }

        .lof-slidecontent .button-control span { display:block;  width:100%; height:100%;}
        .lof-slidecontent .action-start span  {
            background:url(../images/play.png) no-repeat center center;
        }
        .lof-slidecontent .action-stop span {
            background:url(../images/pause.png) no-repeat center center;
        }
    </style>
    <img src="<?php echo base_url(); ?>image/slide/segitiga_batik2.gif" class="batik_kanan_atas"/>
    <img src="<?php echo base_url(); ?>image/slide/segitiga_batik3.gif" class="batik_kiri_bawah"/>
    <script type="text/javascript">
        $(document).ready( function(){	
            // buttons for next and previous item						 
            var buttons = { previous:$('#jslidernews1 .button-previous') ,
                next:$('#jslidernews1 .button-next') };			
            $('#jslidernews1').lofJSidernews( { interval : 4000,
                direction		: 'opacitys',	
                easing			: 'easeInOutExpo',
                duration		: 1200,
                auto		 	: true,
                maxItemDisplay  : 3,
                navPosition     : 'horizontal', // horizontal
                navigatorHeight : 121,
                navigatorWidth  : 123,
                
                mainWidth		: 980,
                buttons			: buttons } );	
        });
    </script>

    <div id="jslidernews1" class="lof-slidecontent" style="width:537px; height:463px;">
        <div class="preload"><div></div></div>
        <!-- MAIN CONTENT --> 
        <div class="main-slider-content" style="width:980px; height:340px;">
            <ul class="sliders-wrap-inner">


<?php if(isset($hotel)) {
                foreach ($hotel as $r) { ?>
 <li>
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarH?>" width="400px" height="300px"/>       

                </li> 
            
                    <?php }
            }?>
               
                
            </ul>  	
        </div>
        <!-- END MAIN CONTENT --> 
        <!-- NAVIGATOR -->
        <div class="navigator-content" style="width: 532px;height: 447px">
            <div class="button-next">Next</div>
            <div class="navigator-wrapper" style="margin-top: 340px;margin-left: 63px;">
                <ul class="navigator-wrap-inner">
                    <?php $i=0; if(isset ($hotel)) {
                            foreach ($hotel as $r) { 
$i++;if($i=='1'){
?>
 <li style="height:100px">
                     <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarH?>"/>       

                </li> 
            
                    <?php }else{ ?>
<li>
                     <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarH?>"/>       

                </li>
<?php }
            } }?>
                </ul>
            </div>
            <div  class="button-previous">Previous</div>
        </div> 
        <!----------------- END OF NAVIGATOR --------------------->
        <!-- BUTTON PLAY-STOP -->
        <div class="button-control"><span></span></div>
        <!-- END OF BUTTON PLAY-STOP -->

    </div> 
</div>