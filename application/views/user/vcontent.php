




<script type="text/javascript">
    $(document).ready(function(){
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
            "background-image": "url('<?php echo base_url(); ?>image/content/bg_utama.jpg')",
            "height":"975px",
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
    <img src="<?php echo base_url(); ?>image/content/atas.gif" id="img_pjk"/>
    <a href="<?php echo base_url(); ?>index.php/user/cpagenews">
        <?php if($this->session->userdata('EN') == "en") { ?>
        <p id="img_text_pjk">news</p>         <?php }else {?>
        <p id="img_text_pjk" style="margin-left: 10px">berita</p>
            <?php }?>


    </a>
    <?php $this->load->view('user/frontend/slide/vslide'); ?>
    <div style="clear: both"></div>
    <?php $this->load->view('user/frontend/slide/vslide2'); ?>
</div>

