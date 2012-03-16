<div class="content">
    <script type="text/javascript">
        $(document).ready(function(){
            $("p#jdl").text("product");
            $(".content_left img#img_xx").css({
                "display":"block"
            });
            $(".content_left img#img_x,.content_left img#img_xxx,.content_left img#img_xxxx").css({
                "display":"none"
            });
            $("#banner").css({
                "display":"block"
            });
        });

    </script>
    <?php $this->load->view('user/frontend/content/vcontent_left'); ?>
    <div class="content_right">
        <?php
	echo form_open('user/cpageproduct/languages',array('name'=>'langForm','id'=>'langForm'));
?>
	<input type="hidden" name="dlang" id="dlang">
	<input type="hidden" name="current" id="current" value="<?php echo substr(uri_string(),1,strlen(uri_string()));?>">

	<img src="<?php base_url()?>images/fr.png" onClick="lanfTrans('fr');" width="16" height="11" title="French"> &nbsp;
	<img src="<?php base_url()?>images/en.png" onClick="lanfTrans('en');" width="16" height="11" title="English"> &nbsp;
	<img src="<?php base_url()?>images/es_flag.gif" onClick="lanfTrans('es');" width="16" height="11" title="Spanish"> &nbsp;
<?php
	echo form_close();
?>

        <?php google_translate("Ini bahasa indonesia menjadi..?",$lang,"id","text");?>
    </div>
</div>