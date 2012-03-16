<div id="home" class="slide2">
    <?php if($this->session->userdata('EN') == "en") { ?>
    <ul>
        <li><a href="<?php echo base_url(); ?>index.php/user/cpagehome#home"><img src="<?php echo base_url(); ?>image/slide/home.png"/><p style="margin-left: 47px">HOME</p></a></li>
        <li style="margin-left: 157px"><a href="<?php echo base_url(); ?>index.php/user/cpageprofile#profile"><img src="<?php echo base_url(); ?>image/slide/profil.png" class="img_2"/><p style="margin-left: 36px">PROFILE</p></a></li>
        <li style="margin-left: 314px"><a href="<?php echo base_url(); ?>index.php/user/cpagepack#packetW"><img src="<?php echo base_url(); ?>image/slide/product.png" class="img_2"/><p style="margin-left: 32px">PRODUCT</p></a></li>
        <li style="margin-left: 470px"><a href="<?php echo base_url(); ?>index.php/user/cpagetestimonial#testi"><img src="<?php echo base_url(); ?>image/slide/testimoni.png" class="img_2"/><p style="margin-left: 14px">TESTIMONIAL</p></a></li>
        <li style="margin-left: 626px"><a href="<?php echo base_url(); ?>index.php/user/cpagereservation"><img src="<?php echo base_url(); ?>image/slide/reservasi.png" class="img_2"/><p style="margin-left: 14px">RESERVATION</p></a></li>
    </ul>

        <?php }else {?>
    <ul>
        <li><a href="<?php echo base_url(); ?>index.php/user/cpagehome#home"><img src="<?php echo base_url(); ?>image/slide/home.png"/><p style="margin-left: 30px">BERANDA</p></a></li>
        <li style="margin-left: 157px"><a href="<?php echo base_url(); ?>index.php/user/cpageprofile#profile"><img src="<?php echo base_url(); ?>image/slide/profil.png" class="img_2"/><p style="margin-left: 42px">PROFIL</p></a></li>
        <li style="margin-left: 314px"><a href="<?php echo base_url(); ?>index.php/user/cpagepack#packetW"><img src="<?php echo base_url(); ?>image/slide/product.png" class="img_2"/><p style="margin-left: 36px">PRODUK</p></a></li>
        <li style="margin-left: 470px"><a href="<?php echo base_url(); ?>index.php/user/cpagetestimonial#testi"><img src="<?php echo base_url(); ?>image/slide/testimoni.png" class="img_2"/><p style="margin-left: 22px">TESTIMONI</p></a></li>
        <li style="margin-left: 626px"><a href="<?php echo base_url(); ?>index.php/user/cpagereservation"><img src="<?php echo base_url(); ?>image/slide/reservasi.png" class="img_2"/><p style="margin-left: 23px">RESERVASI</p></a></li>
    </ul>
        <?php }?>

</div>
<script type="text/javascript">
    $(document).ready(function(){
        var img0 = $("div.slide2 img:eq(0)");
        var img1 = $("div.slide2 img:eq(1)");
        var img2 = $("div.slide2 img:eq(2)");
        var img3 = $("div.slide2 img:eq(3)");
        var img4 = $("div.slide2 img:eq(4)");

        var p0 = $("div.slide2 ul li p:eq(0)");
        var p1 = $("div.slide2 ul li p:eq(1)");
        var p2 = $("div.slide2 ul li p:eq(2)");
        var p3 = $("div.slide2 ul li p:eq(3)");
        var p4 = $("div.slide2 ul li p:eq(4)");
        $(img0).hover(
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