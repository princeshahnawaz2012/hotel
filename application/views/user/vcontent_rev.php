<html>
<head>
    <title><?php echo $title; ?></title>
    <meta name="description" content="javasmiletours.com - Tours and travel" />
    <meta name="keywords" content="sewa mobil jogja,cari hotel jogja,yogyakarta, javasmile,paket wisata yogyakarta,paket wisata jogja,java,wisata jogja" />
    <meta name="rating" content="General">

    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>image/padi.ico" >
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" media="all"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" media="all"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tools.min.js"></script>
    <!--        <script type="text/javascript" src="<?php echo base_url(); ?>scroll/js/jquery-1.4.2.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url(); ?>scroll/js/jquery.tinyscrollbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/song.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //                $(".header ul li a:eq(0)").css({
            //                    "color":"yellow"
            //                });
            $(".content_left ul li:eq(1)").css({
                "background-image": "url('<?php echo base_url(); ?>image/content/bg_batik_bwh.jpg')",
                "height":"491px"
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#scrollbar1').tinyscrollbar();
        });
    </script>


</head>

<body>

<!--    <audio autoplay="autoplay">-->
<!--        <source src="--><?php //echo base_url(); ?><!--audio/AYUN_2.ogg" type="audio/ogg" />-->
<!--    </audio>-->
<div class="page_wrap"> <!--start wrap-->



<!--content    -->






    <script type="text/javascript">
        $(document).ready(function(){
            $('body').css({
                "background-color":"white"
            });
            $(".footer hr").css({
                "border":"1px solid #ffffff",
                "opacity":"0.5"
            });
            $(".footer p").css({
                "color":"white",
                "margin-top":"-9px",
                "opacity":"0.5"
            });
            $(".content").css({

                "height":"542px",
                "margin-top": "-20px"
            });
            $(".footer").css({
                "background-color": "#6262C5",
                "height":"60px"
            });
            $(".menu ul li table tr td a#right").attr("href","<?php echo base_url(); ?>index.php/user/cpagepack");
        });
    </script>

    <div class="content">

        <style type="text/css">
            #img-left
            {
                position: absolute;
                left: 8px;
                top: -56px;
                width: 240px;
                height: 885px;
                transform: rotate(180deg);
                -ms-transform: rotate(180deg); /* IE 9 */
                -webkit-transform: rotate(180deg); /* Safari and Chrome */
                -o-transform: rotate(180deg); /* Opera */
                -moz-transform: rotate(180deg); /* Firefox */

            }
            #img-right
            {
                position: absolute;
                right: 13px;
                top: -56px;
                width: 240px;
                height: 885px

            }
            #img1
            {
                height: 535px;
                width:145px;
                margin-top: 56px
            }
            #img2
            {
                height: 535px;
                width:141px;
                margin-top: 45px
            }
            #img3
            {
                height: 593px;
                width: 167px;
                margin-left: -7px
            }
            #img4
            {
                height: 535px;
                width:155px;
                margin-top: 47px
            }
            #img5
            {
                height: 535px;
                width:160px;
                margin-top: 56px
            }
        </style>

        <div id="home" class="slide2" style="margin-top: 20px">
            <?php if($this->session->userdata('EN') == "en") { ?>
            <img src="<?php echo base_url('image/new/3.png'); ?>" alt="" id="img-left">
<!--            <ul>-->
<!---->
<!--                <li><a href="--><?php //echo base_url(); ?><!--index.php/user/cpagenews"><img src="--><?php //echo base_url(); ?><!--image/slide/home.png"/><p style="margin-left: 47px">NEWS</p></a></li>-->
<!--                <li style="margin-left: 157px"><a href="--><?php //echo base_url(); ?><!--index.php/user/cpageprofile#profile"><img src="--><?php //echo base_url(); ?><!--image/slide/profil.png" class="img_2"/><p style="margin-left: 36px">PROFILE</p></a></li>-->
<!--                <li style="margin-left: 314px"><a href="--><?php //echo base_url(); ?><!--index.php/user/cpagepack#packetW"><img src="--><?php //echo base_url(); ?><!--image/slide/product.png" class="img_2"/><p style="margin-left: 32px">PRODUCT</p></a></li>-->
<!--                <li style="margin-left: 470px"><a href="--><?php //echo base_url(); ?><!--index.php/user/cpagetestimonial#testi"><img src="--><?php //echo base_url(); ?><!--image/slide/testimoni.png" class="img_2"/><p style="margin-left: 14px">TESTIMONIAL</p></a></li>-->
<!--                <li style="margin-left: 626px"><a href="--><?php //echo base_url(); ?><!--index.php/user/cpagereservation"><img src="--><?php //echo base_url(); ?><!--image/slide/reservasi.png" class="img_2"/><p style="margin-left: 14px">RESERVATION</p></a></li>-->
<!--            </ul>-->

            <ul>

                <li><a href="<?php echo base_url(); ?>index.php/user/cpagenews"><img src="<?php echo base_url('image/new/kiri.png'); ?>" class="img_2" id="img1"/></a></li>
                <li style="margin-left: 157px"><a href="<?php echo base_url(); ?>index.php/user/cpageprofile#profile"><img src="<?php echo base_url('image/new/kiritengah.png'); ?>" class="img_2" id="img2"/></a></li>
                <li style="margin-left: 314px"><a href="<?php echo base_url(); ?>index.php/user/cpagepack#packetW"><img src="<?php echo base_url('image/new/tengah.png'); ?>" class="img_2" id="img3"/></a></li>
                <li style="margin-left: 470px"><a href="<?php echo base_url(); ?>index.php/user/cpagetestimonial#testi"><img src="<?php echo base_url('image/new/kanantengah.png'); ?>" class="img_2" id="img4"/></a></li>
                <li style="margin-left: 626px"><a href="<?php echo base_url(); ?>index.php/user/cpagereservation"><img src="<?php echo base_url('image/new/kanan.png'); ?>" class="img_2" id="img5"/></a></li>
            </ul>

            <img src="<?php echo base_url('image/new/3.png'); ?>" alt=""  id="img-right">

            <?php }else {?>
<!--            <ul>-->
<!--                <li><a href="--><?php //echo base_url(); ?><!--index.php/user/cpagenews"><img src="--><?php //echo base_url(); ?><!--image/slide/home.png" /><p style="margin-left: 43px">BERITA</p></a></li>-->
<!--                <li style="margin-left: 157px"><a href="--><?php //echo base_url(); ?><!--index.php/user/cpageprofile#profile"><img src="--><?php //echo base_url(); ?><!--image/slide/profil.png" class="img_2"/><p style="margin-left: 42px">PROFIL</p></a></li>-->
<!--                <li style="margin-left: 314px"><a href="--><?php //echo base_url(); ?><!--index.php/user/cpagepack#packetW"><img src="--><?php //echo base_url(); ?><!--image/slide/product.png" class="img_2"/><p style="margin-left: 36px">PRODUK</p></a></li>-->
<!--                <li style="margin-left: 470px"><a href="--><?php //echo base_url(); ?><!--index.php/user/cpagetestimonial#testi"><img src="--><?php //echo base_url(); ?><!--image/slide/testimoni.png" class="img_2"/><p style="margin-left: 22px">TESTIMONI</p></a></li>-->
<!--                <li style="margin-left: 626px"><a href="--><?php //echo base_url(); ?><!--index.php/user/cpagereservation"><img src="--><?php //echo base_url(); ?><!--image/slide/reservasi.png" class="img_2"/><p style="margin-left: 23px">RESERVASI</p></a></li>-->
<!--            </ul>-->

            <ul>

                <li><a href="<?php echo base_url(); ?>index.php/user/cpagenews"><img src="<?php echo base_url('image/new/kiri.png'); ?>" class="img_2"/></a></li>
                <li style="margin-left: 157px"><a href="<?php echo base_url(); ?>index.php/user/cpageprofile#profile"><img src="<?php echo base_url('image/new/kiritengah.png'); ?>" class="img_2"/></a></li>
                <li style="margin-left: 314px"><a href="<?php echo base_url(); ?>index.php/user/cpagepack#packetW"><img src="<?php echo base_url('image/new/tengah.png'); ?>" class="img_2"/></a></li>
                <li style="margin-left: 470px"><a href="<?php echo base_url(); ?>index.php/user/cpagetestimonial#testi"><img src="<?php echo base_url('image/new/kanantengah.png'); ?>" class="img_2"/></a></li>
                <li style="margin-left: 626px"><a href="<?php echo base_url(); ?>index.php/user/cpagereservation"><img src="<?php echo base_url('image/new/kanan.png'); ?>" class="img_2"/></a></li>
            </ul>
            <?php }?>

        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                var img5 = $("div.slide2 img:eq(5)");
                var img1 = $("div.slide2 img:eq(1)");
                var img2 = $("div.slide2 img:eq(2)");
                var img3 = $("div.slide2 img:eq(3)");
                var img4 = $("div.slide2 img:eq(4)");

                var p0 = $("div.slide2 ul li p:eq(0)");
                var p1 = $("div.slide2 ul li p:eq(1)");
                var p2 = $("div.slide2 ul li p:eq(2)");
                var p3 = $("div.slide2 ul li p:eq(3)");
                var p4 = $("div.slide2 ul li p:eq(4)");
                $(img5).hover(
                    function (){
                        $(this).css({
                            "opacity":"1"

                        });
                        $(p0).css({
                            "text-shadow":"0px 0px 10px white"
                        });
                    },
                    function(){
                        $(this).css({
                            "opacity":"0.7"
                        });
                        $(p0).css({
                            "text-shadow":"none"
                        });
                    }
                );

                $(img1).hover(
                    function (){
                        $(this).css({
                            "opacity":"1"

                        });
                        $(p1).css({
                            "text-shadow":"0px 0px 10px white"
                        });
                    },
                    function(){
                        $(this).css({
                            "opacity":"0.7"
                        });
                        $(p1).css({
                            "text-shadow":"none"
                        });
                    }
                );

                $(img2).hover(
                    function (){
                        $(this).css({
                            "opacity":"1"

                        });
                        $(p2).css({
                            "text-shadow":"0px 0px 10px white"
                        });
                    },
                    function(){
                        $(this).css({
                            "opacity":"0.7"
                        });
                        $(p2).css({
                            "text-shadow":"none"
                        });
                    }
                );


                $(img3).hover(
                    function (){
                        $(this).css({
                            "opacity":"1"

                        });
                        $(p3).css({
                            "text-shadow":"0px 0px 10px white"
                        });
                    },
                    function(){
                        $(this).css({
                            "opacity":"0.7"
                        });
                        $(p3).css({
                            "text-shadow":"none"
                        });
                    }
                );

                $(img4).hover(
                    function (){
                        $(this).css({
                            "opacity":"1"

                        });
                        $(p4).css({
                            "text-shadow":"0px 0px 10px white"
                        });
                    },
                    function(){
                        $(this).css({
                            "opacity":"0.7"
                        });
                        $(p4).css({
                            "text-shadow":"none"
                        });
                    }
                );
            });
        </script>


    </div>
<img src="<?php echo base_url('image/new/bawah.png'); ?>" alt=""  style="position: relative;height: 153px;width: 786px;margin-top: 49px">

<!--footer-->

<!--    <div class="footer">-->
<!--        <hr/>-->
<!--        <p>site building @ 2012 by <a href ="http://www.facebook.com/hs.yulianto">he he</a></p>-->
<!---->
<!---->
<!--    </div>-->
</div> <!--end wrap-->
</body>
</html>
