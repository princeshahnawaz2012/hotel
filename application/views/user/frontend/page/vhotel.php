<script type="text/javascript">
    $(document).ready(function(){
        $(".menu ul li.list_length_center a:eq(0)").css({
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
            "background-image": "url('<?php echo base_url(); ?>image/content/bg_batik3.jpg')"
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
        <?php $this->load->view('user/frontend/slide/vslidehotel'); ?>
        <div class="sub_content_right">

            <div class="content_judul">
                <?php $bhs = $this->session->userdata('EN');
                if($bhs=="en") {
                    echo " <p>hotel</p>";
                }else {
                    echo " <p>hotel</p>";
                }?>
            </div>
<div id="hotel">
            <div id="scrollbar1"  style="word-wrap: break-word">
                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport">
                    <div class="overview">



                        <div class="content_isi">
                            <?php if(isset ($hotel)) {
                                foreach ($hotel as $r) { ?>

                            <div id="site">

                                <a href="<?php echo $r->urlH?>" target="_blank"><img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarH?>"/>
<?php $bhs = $this->session->userdata('EN');
                if($bhs=="en") {
                    echo " <p>Click Image <br/> Visit Their Website</p>";
                }else {
                    echo " <p>Klik Gambar <br/> Untuk Kunjungi Website</p>";
                }?>

                                </a>
                            </div>
                            <div id="content_site">
<h1><?php echo $r->namaH?></h1><br/>
                                <p><?php echo $r->fasilitasH?>
                                </p>
                            </div><hr></hr><br/>



                                    <?php }
                            }
                            ?>


                        </div>

                    </div>
                </div>
            </div></div>


        </div>
    </div>
</div>
