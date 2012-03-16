<script type="text/javascript">
    $(document).ready(function(){
        $(".menu ul li.list_length_center a:eq(1)").css({
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
            "background-image": "url('../../image/content/bg_batik3.jpg')"
        });

        //        $(".content_left img#img_xxx").css({
        //            "display":"block"
        //        });
        //        $(".content_left img#img_x,.content_left img#img_xx,.content_left img#img_xxxx,.content_left img#img_xxxxx").css({
        //            "display":"none"
        //        });


        $(".menu ul li table tr td a#left").attr("href","<?php echo base_url(); ?>index.php/user/cpagehotel");
        $(".menu ul li table tr td a#right").attr("href","<?php echo base_url(); ?>index.php/user/cpagerent");
    });
</script>

<div class="content">
    <?php $this->load->view('user/frontend/content/vcontent_left'); ?>
    <div class="content_right">
        <?php $this->load->view('user/frontend/slide/vslidegall'); ?>
        <div class="sub_content_right">
	<div id="gallery">
            <div id="scrollbar1"  style="word-wrap: break-word;margin-top: 20px">
                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport">
                    <div class="overview">

                        <?php  if(isset ($galeri)) {
                            foreach ($galeri as $r) { ?>
                        <div class="content_judul">
                            <p><?php echo $r->judulG?></p>
                        </div>
                        <div class="content_isi" >
                            
                                    <div id="site" >
                                        <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarG?>"/>

                                    </div>

                                    <div  id="content_site" style="margin-top: -2px">

                                        <p>
                                                    <?php echo word_limiter($r->isiG, 40)?>                                 </p>
                                        <br/><p style="text-align: right;color: blue"><a href="<?php echo base_url()?>index.php/user/cpagegallery/more/<?php echo $r->idgalery?>" style="color: blue;"><?php if($this->session->userdata('EN') == "en") { echo "readmore...";}else{echo "selanjutnya...";}?></a></p>
                                    </div>
                           

                        </div><br/>
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