<script type="text/javascript">
    $(document).ready(function(){
        $(".menu ul li.list_length_center a:eq(2)").css({
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
        $(".content_left ul li:eq(1)").css({
            "background-image": "url('<?php echo base_url(); ?>image/content/bg_batik_bwh.jpg')",
            "height":"521px"
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

        $(".menu ul li table tr td a#left").attr("href","<?php echo base_url(); ?>index.php/user/cpagegallery");
        $(".menu ul li table tr td a#right").attr("href","<?php echo base_url(); ?>index.php/user/cpageterm");
    });
</script>
<div class="content">
    <?php $this->load->view('user/frontend/content/vcontent_left'); ?>
    <div class="content_right">
        <?php $this->load->view('user/frontend/slide/vsliderent'); ?>
        <div class="sub_content_right">
            <div class="content_judul">
                <?php $bhs = $this->session->userdata('EN');
                if($bhs=="en") {
                    echo " <p>rent car</p>";
                }else {
                    echo " <p>sewa mobil</p>";
                }?>

            </div>
            <div id="scrollbar1"  style="word-wrap: break-word">
            <div id="rent">
                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport">
                    <div class="overview">




                        <div class="content_isi">
                            <?php if(isset ($mobil)) {
                                foreach ($mobil as $r) { ?>
                            <div id="site">
                                <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarM?>"/>
                            </div>
                            <div id="content_site">
<h2><?php echo $r->namaM?></h2><br/>
                                <p><?php echo $r->spesifikasiM?></p>
                            </div>
<hr></hr><br/>


                            <!--<ul>
                                     <li style="border: 1px solid black;float: left" id="site">

                                             <img src="<?php echo base_url(); ?>uploads/<?php echo $r->gambarM?>"/>

                                       </li>
                                       <li style="border: 1px solid black;float: left" id="content_site">


                                               <p><?php echo $r->spesifikasiM?>
                                              </p>


                                     </li>
                                  </ul>-->
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
</div>