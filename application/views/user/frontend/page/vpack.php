<script type="text/javascript">
    $(document).ready(function(){
        $(".menu ul li.list_length a:eq(0)").css({
            "color":"yellow"
        });
        $("p#jdl").text("product").css({
            "font-family":"dis",
            "font-size":"26px",
            "margin-left":"72px",
            "margin-top":"-57px"
        });
$("p#jdl2").text("").css({
            "margin-top":"-125px",
            "font-size":"16px",
            "margin-left":"46px",
            "opacity":"0.4"
            
        });
        $("#banner").css({
                "display":"block"
            });
        $(".content_left ul li:eq(0)").css({
//            "background-image": "url('../../image/content/bg_batik3.jpg')"
        });

        //        $(".content_left img#img_xxx").css({
        //            "display":"block"
        //        });
        //        $(".content_left img#img_x,.content_left img#img_xx,.content_left img#img_xxxx,.content_left img#img_xxxxx").css({
        //            "display":"none"
        //        });

        $(".menu ul li table tr td a#left").attr("href","<?php echo base_url(); ?>index.php/user/cpagehome");
        $(".menu ul li table tr td a#right").attr("href","<?php echo base_url(); ?>index.php/user/cpagehotel");



    });
</script>
<div class="content">
    <?php $this->load->view('user/frontend/content/vcontent_left'); ?>
    <div class="content_right">
        <?php $this->load->view('user/frontend/slide/vslide3'); ?>
        <div class="sub_content_right">
		<div id="packetW">
            <div id="scrollbar1"  style="word-wrap: break-word;margin-top: 20px">
                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport">
                    <div class="overview">
                        <?php if(isset ($wisata)) {
                            foreach ($wisata as $r) {?>
                        <div class="content_judul" >
                            <p><?php echo $r->namaPK ?></p>
                        </div>
                        <div class="content_isi">
                            <p><?php echo $r->isiPK ?></p>
                        </div>
                                <?php }
}
?>


                    </div>
                </div>
            </div>


        </div>
        </div>
    </div>
</div>