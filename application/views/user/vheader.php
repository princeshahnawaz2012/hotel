<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="description" content="javasmiletours.com - Tours and travel" />
        <meta name="keywords" content="sewa mobil jogja,cari hotel jogja,yogyakarta, javasmile,paket wisata yogyakarta,paket wisata jogja,java,wisata jogja" />
        <meta name="rating" content="General">

        <meta name="robots" content="index,follow">
<link rel="shortcut icon" href="<?php echo base_url(); ?>image/padi.ico" >
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" media="all"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" media="all"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tools.min.js"></script>
<!--        <script type="text/javascript" src="<?php echo base_url(); ?>scroll/js/jquery-1.4.2.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>scroll/js/jquery.tinyscrollbar.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/song.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                //                $(".header ul li a:eq(0)").css({
                //                    "color":"yellow"
                //                });
                $(".content_left ul li:eq(1)").css({
                    "background-image": "url('<?php echo base_url(); ?>image/content/bg_batik_bwh.jpg')",
                    "height":"491px"
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#scrollbar1').tinyscrollbar();
            });
        </script>

<!--        <script language="javascript" type="text/javascript">
            function lanfTrans(lan)
            {
                switch(lan)
                {
                    case 'en': document.getElementById('dlang').value='en';document.langForm.submit(); break;
                    case 'fr': document.getElementById('dlang').value='fr'; document.langForm.submit(); break;
                    case 'es': document.getElementById('dlang').value='es'; document.langForm.submit(); break;
                }
            }
        </script>-->
    </head>

    <body>
<!--        <div id="google_translate_element" ></div><script>
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
    </script><script src="<?php echo base_url(); ?>js/id.js"></script>-->
<!--    <audio autoplay="autoplay">-->
<!--        <source src="--><?php //echo base_url(); ?><!--audio/AYUN_2.ogg" type="audio/ogg" />-->
<!--    </audio>-->
    <div class="page_wrap"> <!--start wrap-->
        <div class="header">



            <?php $bhs= $this->uri->segment(2);
$b3= $this->uri->segment(3);
$b2= $this->uri->segment(2);
$b1= $this->uri->segment(1);
if($b3 !="success" && $b3 != "error" && $b3 != "pesan"){
            if($this->session->userdata('EN') == "en") { ?>
            <ul>
                <li style="border-right: 1px solid white;margin-left: 17px;"><a href="<?php echo $bhs."/ubahBhs/en";?>"><div style="color:yellow">english</div></a></li>
                <li><a href="<?php echo $bhs."/ubahBhs/id";?>">indonesia</a></li>
            </ul>
                <?php }else {?>
            <ul>
                <li style="border-right: 1px solid white;margin-left: 17px;"><a href="<?php echo $bhs."/ubahBhs/en";?>">english</a></li>
                <li><a href="<?php echo $bhs."/ubahBhs/id";?>"><div style="color:yellow">indonesia</div></a></li>
            </ul><?php }

            }else {?>
<?php if($this->session->userdata('EN') == "en") { ?>
            <ul>
                <li style="border-right: 1px solid white;margin-left: 17px;"><a href="<?php echo base_url()."index.php/$b1/$b2/"."/ubahBhs/en";?>"><div style="color:yellow">english</div></a></li>
                <li><a href="<?php echo base_url()."index.php/$b1/$b2/"."/ubahBhs/id";?>" id="indo">indonesia</a></li>
            </ul>
                <?php }else {?>
            <ul>
                <li style="border-right: 1px solid white;margin-left: 17px;"><a href="<?php echo base_url()."index.php/$b1/$b2/"."/ubahBhs/en";?>">english</a></li>
                <li><a href="<?php echo base_url()."index.php/$b1/$b2/"."/ubahBhs/id";?>"><div style="color:yellow">indonesia</div></a></li>


<?php } }?>
            <h2>JAV <span style="margin-left: -22px">A</span> SMILE</h2>
            <h4>tours and travel</h4>




        </div>

