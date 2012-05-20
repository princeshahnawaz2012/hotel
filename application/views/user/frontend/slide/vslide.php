

<!--<div class="slide">

    
    <div id="main">

        
        <div id="pages">

            
            <?php if(isset($news)) {
                foreach ($news as $r) {?>
            <div class="page">

                
                <div class="navi" style="margin-top: 0"></div>

                
                <div class="scrollable">

                    
                    <div class="items">

                        
                        <div class="item">
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarN?>"/>

                        </div>


                    </div>

                </div>

            </div>
                    <?php }

            }?>



        </div>

    </div>


    <script>

        $(document).ready(function() {


            $("#main").scrollable({

                vertical: true,

                keyboard: 'static',

                onSeek: function(event, i) {
                    horizontal.eq(i).data("scrollable").focus();
                }

            }).navigator("#main_navi");


            var horizontal = $(".scrollable").scrollable({ circular: true }).navigator(".navi");


            horizontal.eq(0).data("scrollable").focus();

            var img1 = $("li#img_1");
            var img2 = $("li#img_2");
            var img3 = $("li#img_3");

            var elsub0 = $("ul#sub_navi li img:eq(0)");
            var elsub1 = $("ul#sub_navi li img:eq(1)");
            var elsub2 = $("ul#sub_navi li img:eq(2)");

            var eltext0 = $("ul#main_navi_text li:eq(0)");
            var eltext1 = $("ul#main_navi_text li:eq(1)");
            var eltext2 = $("ul#main_navi_text li:eq(2)");

            var elul0 = $("ul#main_navi_text");
            var elulp = $("ul#main_navi_text li p");
            var elulh3= $("ul#main_navi_text li h3.as");
            $(elul0).addClass("add_bg");
            $(elulp).addClass("add_p");
            $(elulh3).addClass("add_h3");

            $(eltext0).css({
                "display":"block"
            });

            //            var change_bg0 = $(elul0).addClass("add_bg");
            //            var change_bg1 = $(elul0).addClass("add_bg");
            //            var change_bg2 = $(elul0).addClass("add_bg");

            $(img1).click(function(){

                $(elul0).css({
                    "margin-top":"-330px"
                });

                $(elsub0).css({
                    "display":"block"
                });
                $(elsub2).css({
                    "display":"none"
                });
                $(elsub1).css({
                    "display":"none"
                });
                $(eltext0).css({
                    "display":"block"
                });
                $(eltext1).css({
                    "display":"none"
                });
                $(eltext2).css({
                    "display":"none"
                });


            });
            $(img2).click(function(){

                $(elul0).css({
                    "margin-top":"-205px"
                });

                $(elsub1).css({
                    "display":"block",
                    "margin-top":"69px"
                });
                $(elsub0).css({
                    "display":"none"
                });
                $(elsub2).css({
                    "display":"none"
                });
                $(eltext1).css({
                    "display":"block",
                    "margin-top":"0px"
                });
                $(eltext0).css({
                    "display":"none"
                });
                $(eltext2).css({
                    "display":"none"
                });
            });
            $(img3).click(function(){

                $(elul0).css({
                    "margin-top":"-85px"
                });

                $(elsub2).css({
                    "display":"block",
                    "margin-top":"190px"
                });
                $(elsub0).css({
                    "display":"none"
                });
                $(elsub1).css({
                    "display":"none"
                });
                $(eltext2).css({
                    "display":"block",
                    "margin-top":"0px"
                });
                $(eltext0).css({
                    "display":"none"
                });
                $(eltext1).css({
                    "display":"none"
                });
            });
        });
    </script>
    <ul id="sub_navi">
        <li><img src="<?php echo base_url(); ?>image/slide/segitiga_batik.gif" style="display: block" /></li>
        <li><img src="<?php echo base_url(); ?>image/slide/segitiga_batik.gif" /></li>
        <li><img src="<?php echo base_url(); ?>image/slide/segitiga_batik.gif" /></li>
    </ul>
    <ul id="main_navi">
        <?php $i=0;
        if(isset($news)) {
            foreach ($news as $r) {
                $i++;
                ?>

        <li id="img_<?php echo $i?>">
            <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarN?>"/>
        </li>
                <?php }
        }
        ?>

    </ul>
    <ul id="main_navi_text">

        <?php $i=0;
        if(isset($news)) {
            foreach ($news as $r) {
                $tanggal = str_replace("-", "/", $r->tanggalN);
                $t = substr($tanggal, 0,4);
                $a = substr($tanggal, 5,2);
                $g = substr($tanggal, 8);
                $tgl = "$a/$g/$t";
                $bln = substr($tanggal, 5,2);
                if($bln=="01") {
                    $bl="Jan";
                }else if($bln=="02") {
                    $bl="Feb";
                }else if($bln=="03") {
                    $bl="Mar";
                }else if($bln=="04") {
                    $bl="Apr";
                }else if($bln=="05") {
                    $bl="Mei";
                }else if($bln=="06") {
                    $bl="Jun";
                }else if($bln=="07") {
                    $bl="Jul";
                }else if($bln=="08") {
                    $bl="Ags";
                }else if($bln=="09") {
                    $bl="Sep";
                }else if($bln=="10") {
                    $bl="Okt";
                }else if($bln=="11") {
                    $bl="Nov";
                }else if($bln=="12") {
                    $bl="Des";
                }
                ?>
        <li>
            <h3><?php echo "jogjakarta, $g $bl $t"?></h3>
            <p><?php echo $r->judulN; ?></p>
                    <?php if($r->bahasa == "en") { ?>
            <h3 class="as"><a href="<?php echo base_url();?>index.php/user/cpagenews/readM/<?php echo $r->idnews?>" style="color: yellow;font-size: 14px">read more</a></h3>
                   <?php  } else { ?>
                       <h3 class="as"><a href="<?php echo base_url();?>index.php/user/cpagenews/readM/<?php echo $r->idnews?>" style="color: yellow;font-size: 13px">baca selanjutnya</a></h3>";
                    <?php } ?>

        </li>
                <?php }
        }
        ?>
    </ul>
</div>-->

<!-- *zzzzzzzzzzzzzzzzzzzzzzzzzz*-->

<div class="slide">
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


        .lof-slidecontent  .navigator-content {position:absolute;
                                               right:0;
                                               top:00px;
                                               z-index:9;
                                               height:300px;
                                               width:310px;
                                               overflow:hidden;
                                               color:#FFF;
                                               margin-top: 17px
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

        ul.sliders-wrap-inner li img{	padding:0px;height: 300px;width: 443px;margin-left: 0px;margin-top: 2px	}

        .lof-slidecontent .slider-description a.readmore{color:#58B1EA; font-size:95%; }
        .lof-slidecontent .slider-description a{ color:#FFF; }
        .lof-slidecontent .slider-description{
            z-index:100px;
            position:absolute;
            bottom:66px;
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
        .lof-slidecontent ul.navigator-wrap-inner  li.active{
            /*	background:url(../../images/slide/arrow-bg.png) no-repeat scroll left center; */
            /*    background-image: url(image/slide/segitiga_batik.gif);*/
            /*background-color: yellow;*/
            color:#FFF;
        }
        .lof-slidecontent ul.navigator-wrap-inner  li >  div{
            background:url(../images/transparent_bg.png);
            color:yellow;
            height:100%;
            position:relative;
            margin-left:0px;
            padding-left:15px;
            /*    border-top:1px solid #E1E1E1;*/
            text-align:left
        }

        .lof-slidecontent ul.navigator-wrap-inner li.active div{
            /*    background:url(../images/grad-bg.gif); efek*/
            color:white; 
            background:url('<?php echo base_url(); ?>image/slide/segitiga_batik.gif') right no-repeat;
            width: 99px;
            
            padding-left: 31px;
            height: 70px

        }

        .lof-slidecontent ul.navigator-wrap-inner li img{
            height:73px;
            width:96px;
            /*            margin:15px 15px 10px 0px;*/
            margin: -3px 0 0 0;
            float:left;
            padding:3px;
            /*    border:#C5C5C5 solid 1px;*/
        }
        .lof-slidecontent ul.navigator-wrap-inner li.active img, 
        .lof-slidecontent ul.navigator-wrap-inner li:hover img {
            /*    border:##6C8E5C  solid 1px;*/
        }
        .lof-slidecontent  .button-next, 
        .lof-slidecontent .button-previous{
            display:block;
            width:40px;
            color:#FFF;
            cursor:pointer;
            position:absolute;
            height:100%;
            z-index:40;
            top:0;
            text-indent:-999px;

        }
        .lof-slidecontent   .button-next {
            right:0px;
            background:url(../images/next.png) no-repeat right center;
        }
        .lof-slidecontent  .button-previous {
            left:0px;
            background:url(../images/previous.png) no-repeat left center;
        }


        .lof-slidecontent .button-control {
            position:absolute;
            top:10px;
            right:48%;
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
        .readmore
        {
        color: yellow;
        }
        .readmore:hover
        {
        color: white;
        }
    </style>
    <script type="text/javascript">
        $(document).ready( function(){	
            var buttons = { previous:$('#jslidernews2 .button-previous') ,
                next:$('#jslidernews2 .button-next') };			 
            $('#jslidernews2').lofJSidernews( { interval:5000,
                easing:'easeInOutQuad',
                duration:1000,
                auto:true,
                mainWidth:444,
                mainHeight:300,
                navigatorHeight		: 100,
                navigatorWidth		: 310,
                maxItemDisplay:3,
                buttons:buttons } );						
        });

    </script>
    <style type="text/css">

        ul.lof-main-wapper li {
            position:relative;	
        }
    </style>

    <div id="jslidernews2" class="lof-slidecontent" style="width:760px; height:300px;margin-top:-30px;margin-left: -236px">
        <div class="preload"><div></div></div>


        <div  class="button-previous">Previous</div>

        <!-- MAIN CONTENT --> 
        <div class="main-slider-content" style="width:444px; height:300px;">
            <ul class="sliders-wrap-inner">
<?php $i=0;
        if(isset($news)) {
            foreach ($news as $r) {
                $i++;
                ?><li>
            <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarN?>"/>
        </li>
                <?php }
        }
        ?>

               

            </ul>  	
        </div>
        <!-- END MAIN CONTENT --> 
        <!-- NAVIGATOR -->
        <div class="navigator-content">
            <div class="navigator-wrapper">
                <ul class="navigator-wrap-inner">
                   
               <?php $i=0;
        if(isset($news)) {
            foreach ($news as $r) {
                $tanggal = str_replace("-", "/", $r->tanggalN);
                $t = substr($tanggal, 0,4);
                $a = substr($tanggal, 5,2);
                $g = substr($tanggal, 8);
                $tgl = "$a/$g/$t";
                $bln = substr($tanggal, 5,2);
                if($bln=="01") {
                    $bl="Jan";
                }else if($bln=="02") {
                    $bl="Feb";
                }else if($bln=="03") {
                    $bl="Mar";
                }else if($bln=="04") {
                    $bl="Apr";
                }else if($bln=="05") {
                    $bl="Mei";
                }else if($bln=="06") {
                    $bl="Jun";
                }else if($bln=="07") {
                    $bl="Jul";
                }else if($bln=="08") {
                    $bl="Ags";
                }else if($bln=="09") {
                    $bl="Sep";
                }else if($bln=="10") {
                    $bl="Okt";
                }else if($bln=="11") {
                    $bl="Nov";
                }else if($bln=="12") {
                    $bl="Des";
                }
                ?>
        
                    <?php if($r->bahasa == "en") { ?>
            
 <li>
                        <div>
<!--                            <img src="<?php echo base_url(); ?>image/slide/segitiga_batik.gif" style="position: absolute;height: 67px;width: 30px;margin-left: -135px"/>-->
                           <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarN?>"/>
                            <div style="padding-left: 10px;font-family: arial;font-size: 14px; height: 62px;width: 301px;position: absolute;z-index: 2;margin-left: 99px;margin-top: 4px;background-color: #aa5d53;
                                 opacity: 0.6">
                                 <table style="padding-left: -10px">
                                    <tr>
                                        <td style="width: 184px;word-wrap: break-wrap;">
                                <h3 style="margin-bottom: 4px;color: yellow"> <?php echo "Jogjakarta,<span> $g $bl $t</span>"?></h3>
                                <span style="color: white;"><?php echo $r->judulN; ?></span> <br/>
                                <a href="<?php echo base_url();?>index.php/user/cpagenews/readM/<?php echo $r->idnews?>" class="readmore"><span style="float: right;z-index: 5;margin-top: 2px;margin-right: 12px">read more</span></a>
                                
                                </td>
                                    </tr>
                                </table>
                                
                            
                            </div>

                        </div>    
                    </li>
                   <?php  } else { ?>
                       <li>
                        <div>
<!--                            <img src="<?php echo base_url(); ?>image/slide/segitiga_batik.gif" style="position: absolute;height: 67px;width: 30px;margin-left: -135px"/>-->
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarN?>"/>
                            <div style="padding-left: 10px;font-family: arial;font-size: 14px; height: 62px;width: 301px;position: absolute;z-index: 2;margin-left: 99px;margin-top: 4px;background-color: #aa5d53;
                                 opacity: 0.6">
                                 <table style="padding-left: -10px">
                                    <tr>
                                        <td style="width: 184px;word-wrap: break-wrap;">
                                <h3 style="margin-bottom: 4px;color: yellow"> <?php echo "Jogjakarta,<span> $g $bl $t</span>"?></h3>
                                <span style="color: white;"><?php echo $r->judulN; ?></span> <br/>
                                <a href="<?php echo base_url();?>index.php/user/cpagenews/readM/<?php echo $r->idnews?>" class="readmore"><span style="float: right;z-index: 5;margin-top: 2px;margin-right: 12px">read more</span></a>
                                </td>
                                    </tr>
                                </table>
                            </div>

                        </div>    
                    </li>
                    <?php } ?>

       
                <?php }
        }
        ?>     

                </ul>
            </div>

        </div> 
        <!----------------- END OF NAVIGATOR --------------------->
        <div class="button-next">Next</div>

        <!-- BUTTON PLAY-STOP -->
        <div class="button-control"><span></span></div>
        <!-- END OF BUTTON PLAY-STOP -->

    </div> 

    <!------------------------------------- END OF THE CONTENT ------------------------------------------------->
</div>