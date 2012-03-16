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
            "background-image": "url('../../image/content/bg_batik1.jpg')"
        });


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
        <?php $this->load->view('user/frontend/slide/vslide3'); ?>
        <div class="sub_content_right" >

<div id="news">
            <div id="scrollbar1"  style="word-wrap: break-word;margin-top: 20px">
                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport">
                    <div class="overview">

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