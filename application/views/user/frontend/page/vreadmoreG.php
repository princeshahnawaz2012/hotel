<script type="text/javascript">
    $(document).ready(function(){
        $(".menu ul li.list_length_center a:eq(1)").css({
            "color":"yellow"
        });
        $("p#jdl").text("product").css({
            "font-family":"dis",
            "font-size":"26px",
            "margin-left":"72px",
            "margin-top":"-57px",
            
        });
        
        $("#banner").css({
            "display":"block"
        });
        $(".content_left ul li:eq(0)").css({
<!--            "background-image": "url('--><?php //echo base_url(); ?><!--image/content/bg_batik3.jpg')"-->
        });

        $(".content_left ul li:eq(1)").css({
            "background-image": "url('<?php echo base_url(); ?>image/content/bg_batik_bwh.jpg')",
            "height":"521px"
        });

        //        $(".content_left img#img_xxx").css({
        //            "display":"block"
        //        });
        //        $(".content_left img#img_x,.content_left img#img_xx,.content_left img#img_xxxx,.content_left img#img_xxxxx").css({
        //            "display":"none"
        //        });

        $(".menu ul li table tr td a#left").attr("href","<?php echo base_url(); ?>index.php/user/cpagepack");
        $(".menu ul li table tr td a#right").attr("href","<?php echo base_url(); ?>index.php/user/cpagegallery");
    });
</script>
<div class="content">
    <?php $this->load->view('user/frontend/content/vcontent_left'); ?>
    <div class="content_right">
        <?php $this->load->view('user/frontend/slide/vslide3'); ?>
        <div class="sub_content_right">
            <?php if(isset ($berit)) {
                foreach ($berit as $r) { ?>
            <div class="content_judul">
                <p><?php echo $r->judulG?></p>
            </div>

            <div id="scrollbar1"  style="word-wrap: break-word">
                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport">
                    <div class="overview">



                        <div class="content_isi">


                            <div id="site">
                                <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarG?>"/>

                            </div>
                            <div id="content_site">
                                <p><?php echo $r->isiG?>
                                </p>
                            </div>






                        </div>

                    </div>
                </div>
            </div>
                    <?php }
            }
            ?>

        </div>
    </div>
</div>