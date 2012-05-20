<script type="text/javascript">
    $(document).ready(function(){

        $("p#jdl").text("news").css({
            "font-size":"29px",
            "margin-left":"79px",
            "margin-top":"-59px"
        });
        $("#banner").css({
                "display":"block"
            });
        $(".content_left ul li:eq(0)").css({
//            "background-image": "url('../../image/content/bg_batik1.jpg')"

        });
        $("#hilang").css({
            "display":"none"
        });
        $(".sub_content_right").css({
            "margin-left":"-215px",
            "margin-top":"-120px"
        });
<!--        $(".content").css({-->
<!--            "background-image":"url('--><?php //echo base_url(); ?><!--image/content/bg_utama.jpg')"-->
<!--        });-->


        //        $(".content_left img#img_x").css({
        //            "display":"block"
        //        });
        //        $(".content_left img#img_xx,.content_left img#img_xxx,.content_left img#img_xxxx,.content_left img#img_xxxxx").css({
        //            "display":"none"
        //        });


    });
</script>
<div class="content">

    <?php $this->load->view('user/frontend/content/vcontent_left'); ?>

    <div class="content_right">
        <p style="background-color: #D2340F;padding: 20px;width: 50px;border-bottom-right-radius: 43px;height:0px;border-bottom-left-radius: 43px;border: 10px;font-family: arial,sans-serif;color: white;margin-top: -20px;margin-left: -233px;"></p>
        <p id="gantitext" style="font-family: arial,sans-serif;color: white;font-size: 18px;margin-left: -216px;margin-top: -30px;position: absolute;">NEWS</p>

<!--        <script type="text/javascript">-->
<!--            $(function(){-->
<!--                $('#indo').click(function(){-->
<!--                    $('#gantitext').hide();-->
<!--                });-->
<!--            });-->
<!--        </script>-->

        <?php $this->load->view('user/frontend/slide/vslide'); ?>


        <div class="sub_content_right" >

<div id="news">
            <div id="scrollbar1"  style="word-wrap: break-word;margin-top: 20px">
                <div class="scrollbar" style="margin-right: -237px"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport" style="width: 740px">
                    <div class="overview" style="width: 740px">

                        <?php if(isset ($berit)) {
                            foreach ($berit as $r) {

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
                        <div class="content_judul">
                            <p><?php echo $r->judulN?></p>
                        </div>
                        <div class="content_isi">
                            <h3><?php echo "$g $bl $t" ?></h3>
                            <br/>
                            <p><?php echo $r->isiN?>
                            </p>
                        </div><br/><br/>

                                <?php

                            }
                        }?>



                    </div>
                </div>
            </div>
</div>

        </div>
    </div>
</div>