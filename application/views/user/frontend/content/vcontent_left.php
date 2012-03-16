<?php $bhs = $this->session->userdata('EN');?>
<div class="content_left">
    <ul>
        <li>
<!--            <img src="<?php echo base_url(); ?>image/content/gmbr_kiri.gif" class="img1" id="img_x"/>
            <img src="<?php echo base_url(); ?>image/content/gmbr_kiri2.gif" class="img1" id="img_xx"/>
            <img src="<?php echo base_url(); ?>image/content/gmbr_kiri3.gif" class="img1" id="img_xxx"/>
            <img src="<?php echo base_url(); ?>image/content/gmbr_kiri4.gif" class="img1" id="img_xxxx"/>
            <img src="<?php echo base_url(); ?>image/content/gmbr_kiri5.gif" class="img1" id="img_xxxxx"/>-->
        </li>
        <li style="text-align: center;overflow: hidden">
            <img src="<?php echo base_url(); ?>image/content/atas.gif" class="img2"/>
<p id="jdl2"></p>
            <a id="<?php echo base_url(); ?>index.php/user/cpagenews"><p id="jdl"></p></a>
            <table>
                <tr>
                    <td><a href="ymsgr:sendIM?javasmiletours">
                                <img width="100" border=0 src="http://opi.yahoo.com/online?u=javasmiletours&amp;m=g&amp;t=16" class="img3"/> </a></td>
                        
                </tr>
                <tr>
                    <td><a href="http://www.facebook.com/javasmiletours" target="_blank"><img src="<?php echo base_url(); ?>image/content/fb_icon.jpg"  class="img4"/></a></td>
                </tr>
                <tr>
                    <td>
                        <a href="<?php echo base_url(); ?>index.php/user/cpagereservation">
                        <img src="<?php echo base_url(); ?>image/content/wayang_booking.gif"  class="img5"/>
<p id="jdl3" style="display: none"></p>
                        <?php if($bhs == "en"){
                        
                                echo "<p style=\"margin-left: -1px;font-weight: bold;font-size: 25px;margin-top: -55px\">book now</p>";
                            }else{
                                echo "<p style=\"margin-left: -19px;font-weight: bold;font-size: 20px;margin-top: -55px\">Pesan Sekarang</p>";
                            }?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="img6"> <?php
                            if (isset($pengunjung)) {
                                foreach ($pengunjung as $r) {
                                    echo $r->jum;
                                }
                            }
                            
                            ?></div>
                        
                            <?php if($bhs == "en"){
                                echo "<p style=\"position: absolute;margin-left: 24px; margin-top: 1px;font-size: 18px\">guest</p>";
                            }else{
                                echo "<p style=\"position: absolute;margin-left: 9px; margin-top: 1px;font-size: 18px\">pengunjung</p>";
                            }?>
                            
                    </td>
                </tr>
            </table>

        </li>
    </ul>
</div>