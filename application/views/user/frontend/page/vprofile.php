<div class="content">
    <script type="text/javascript">
        $(document).ready(function(){
            $("p#jdl").text("profile").css({
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
                "background-image": "url('../../image/content/bg_batik2.jpg')"
            });
            //            $(".content_left img#img_xx").css({
            //                "display":"block"
            //            });
            //            $(".content_left img#img_x,.content_left img#img_xxx,.content_left img#img_xxxx").css({
            //                "display":"none"
            //            });
            $(".content").css({
                "background-color":"white"
            });
            $(".footer").css({
                "background-color":"white"
            });
        });
    
    </script>
    <?php $this->load->view('user/frontend/content/vcontent_left'); ?>
    <div class="content_right" >
        <?php $this->load->view('user/frontend/slide/vslide3'); ?>
        <div class="sub_content_right">
<div id="profile">
            <div id="scrollbar1"  style="word-wrap: break-word;margin-top: 20px">
                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport">
                    <div class="overview">
                    <?php if(isset ($profil)) {
                            foreach ($profil as $r) { ?>
                        <div class="content_judul">
                            <p>about us</p>
                        </div>
                        <div class="content_isi">
                            <p><?php echo $r->tentangP ?></p>
                        <div class="content_judul">
                            <p>contact us</p>
                        </div>
                        <div class="content_isi">
                            <p><?php echo $r->contactP ?></p>
                         </div>
                        <div class="content_judul">
                            <p>map</p>
                        </div>
                        <div class="content_isi">
                           <?php echo $r->mapP ?>
                        </div>
                        <?php }}?>
                    </div>
                </div>
            </div>
</div>
        </div>
    </div>
</div>