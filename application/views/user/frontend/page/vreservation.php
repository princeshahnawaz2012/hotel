<div class="content">
    <script type="text/javascript">
        $(document).ready(function(){
            $("p#jdl").text("reservation").css({
                "font-family":"dis",
                "font-size":"26px",
                "margin-left":"51px",
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
                "background-image": "url('<?php echo base_url(); ?>image/content/bg_batik5.jpg')"
            });
            $(".content_left ul li:eq(1)").css({
                "height":"784px"
            });
            $(".footer p,.footer hr").css({
                "display":"none"

            });
            $(".footer").css({
                "height":"51px"
            });
            $(".page_wrap").css({
                "overflow":"hidden"
            });
            //            $(".content_left img#img_xxxxx").css({
            //                "display":"block"
            //            });
            //            $(".content_left img#img_x,.content_left img#img_xx,.content_left img#img_xxx,.content_left img#img_xxxx").css({
            //                "display":"none"
            //            });
        });
    </script>
    <?php $this->load->view('user/frontend/content/vcontent_left'); ?>
    <?php if($this->session->userdata('EN') == "en"){?>
    <div class="content_right">
        <div class="sub_content_right">
            <div class="content_judul" style="width: 499px;margin-top: -20px">
                <p>reservation</p>
            </div>
            <img src="<?php echo base_url(); ?>image/content/wayang.jpg" id="wayang"/>
<p style="color: white; position: absolute;opacity: 0.7; font-size: 20px;font-family: div; margin-left: 283px; margin-top: 463px">jatmikajati</p>
            <div class="content_isi">
                <?php  $attributes = array('name' => 'mform', 'id' => 'mform');
               echo form_open_multipart(base_url() . 'index.php/user/cpagereservation/pesan', $attributes); ?>
                <form action="<?php echo base_url()?>index.php/user/cpagereservation/pesan" id="myform" name="myform">
                <table style="margin-top: 20px">
                    <tr>
                        <td><?php if($msg=="sukses") {
                                echo "<p style=\"color:blue\">Success Reservation</p><br/>";

                            }else if($msg=="gagal") {
                                echo "<p style=\"color:red\">Error Reservation</p><br/>";
                            }else if($msg=="kosong") {
                                echo "<p style=\"color:red\">Masih ada field yang kosong</p><br/>";
                            }?></td>

                    </tr>
                    <tr>
                        <td>name*</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="nama" <?php if(form_error('nama')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('nama'); ?>" required="required"/>
                        </td>
                    </tr>
                    <tr>
                        <td>company*</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="company" <?php if(form_error('company')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('company'); ?>" required="required"/>

                        </td>
                    </tr>
                    <tr>
                        <td>address*</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="address" <?php if(form_error('address')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('address'); ?>"style="width: 498px" required="required"/>
                        </td>
                    </tr>
                    <tr>
                        <td>email</td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" <?php if(form_error('email')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('email'); ?>" required="required"/>
                        <?php echo form_error('judulB', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>phone*</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="phone" <?php if(form_error('phone')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('phone'); ?>" required="required"/></td>
                    </tr>
                    <tr>
                        <td>mobile*</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="mobile" <?php if(form_error('mobile')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('mobile'); ?>" required="required"/></td>
                    </tr>
                    <tr>
                        <td>fax*</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="fax" <?php if(form_error('fax')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('fax'); ?>" required="required"/></td>
                    </tr>
                    <tr>
                        <td>arrival date(dd-mm-yy)</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="arrbulan" required="required">
                                <option selected="selected" value="">-</option>
                                <option value="01">jan</option>
                                <option value="02">feb</option>
                                <option value="03">mar</option>
                                <option value="04">apr</option>
                                <option value="05">may</option>
                                <option value="06">jun</option>
                                <option value="07">jul</option>
                                <option value="08">agu</option>
                                <option value="09">sep</option>
                                <option value="10">okt</option>
                                <option value="11">nov</option>
                                <option value="12">des</option>
                            </select>

                            <select name="arrtanggal" required="required">
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <input type="text" name="arrtahun" style="width: 76px" required="required"/>
                        </td>

                    </tr>
                    <tr>
                        <td>departure date(dd-mm-yy)</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="depbulan" required="required">
                                <option selected="selected" value="">-</option>
                                <option value="01">jan</option>
                                <option value="02">feb</option>
                                <option value="03">mar</option>
                                <option value="04">apr</option>
                                <option value="05">may</option>
                                <option value="06">jun</option>
                                <option value="07">jul</option>
                                <option value="08">agu</option>
                                <option value="09">sep</option>
                                <option value="10">okt</option>
                                <option value="11">nov</option>
                                <option value="12">des</option>
                            </select>
                            <select name="deptanggal" required="required">
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <input type="text" name="deptahun" style="width: 76px" required="required"/>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            pax*
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="width: 176px" name="pax" required="required">
                                <option selected="selected" value="">&nbsp;</option>
                                <option value="01">01 pax</option>
                                <option value="02">02 pax</option>
                                <option value="03">03 pax</option>
                                <option value="04">04 pax</option>
                                <option value="05">05 pax</option>
                                <option value="06">06 pax</option>
                                <option value="07">07 pax</option>
                                <option value="08">08 pax</option>
                                <option value="09">09 pax</option>
                                <option value="10">10 pax</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            accomodation*
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="width: 176px" name="akomodasi" required="required">
                                <option selected="selected" value="">&nbsp;</option>
                                <option value="5">5&starf;hotel</option>
                                <option value="4">4&starf;hotel</option>
                                <option value="3">3&starf;hotel</option>
                                <option value="2">2&starf;hotel</option>
                                <option value="1">1&starf;hotel</option>
                                <option value="cottage">cottage</option>
                                <option value="villa">villa</option>
                                <option value="resort">resort</option>
                                <option value="boutique hotel">boutique hotel</option>
                            </select><?php echo form_error('hotel', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            transportation*
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="width: 176px" name="transportasi" required="required">
                                <option value="">-</option>
                                <option value="KIA peagio">KIA peagio</option>
                                <option value="kijang innova">kijang innova</option>
                                <option value="kijang capsule">kijang capsule</option>
                                <option value="izusu ELF">izusu ELF</option>
                                <option value="bus 20 seat">bus 20 seat</option>
                                <option value="bus 25 seat">bus 25 seat</option>
                                <option value="bus 35 seat">bus 35 seat</option>
                                <option value="bus 45 seat">bus 45 seat</option>
                                <option value="bus 48 seat">bus 48 seat</option>
                                <option value="bus 54 seat">bus 54 seat</option>
                            </select><?php echo form_error('transportasi', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr
                    <tr>
                        <td>
                            guide service*
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="width: 176px" name="guide" required="required">
                                <option value="">-</option>
                                <option value="indonesia">indonesia</option>
                                <option value="english">english</option>
                                <option value="japan">japan</option>
                                <option value="mandarin">mandarin</option>
                                <option value="korea">korea</option>
                                <option value="france">france</option>
                                <option value="russia">russia</option>
                                <option value="spanish">spanish</option>
                                <option value="german">german</option>
                                <option value="deutch">deutch</option>
                            </select><?php echo form_error('guide', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr
                    <tr>
                        <td>
                            tour packages*
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input style="width: 498px" name="tp" value="<?php echo set_value('tp'); ?>" required="required"/><?php echo form_error('tp', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            special request*
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea style="width: 498px;height: 103px" name="sr"><?php echo set_value('sr'); ?></textarea>
                           <?php echo form_error('sr', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            enter the letters showed into the following image* 
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><img src="<?php echo base_url() ?>cap/cap.php" style="height: 40px;width: 150px"/></td>
                    </tr>
                    <tr>

                        <td style="text-align: center">
                            <ul style="margin: 30px auto 20px auto">

                                <li style="margin-bottom: 10px;">captcha</li>
                                <li><input type="text" style="width: 130px" name="cap" required="required"/></li>
                                
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" value="Send Reservation" id="tmbl"/></td>
                    </tr>

                    <tr>
                        <td>service timescale*</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;width: 300px; height: 92px;white-space: pre-line">
                            we will contacts you to confirm availability and payment requirements within 24-48 hours.
                        </td>

                    </tr>
                </table>
                </form>
                <script type="text/javascript">
                            $(document).ready(function(){
                                $.tools.validator.localize("fi", {
                                    '*'			: 'empty',
                                    ':email'  	: 'empty email',
                                    ':number' 	: 'not valid number',
                                    ':url' 		: 'not valid url',
                                    '[max]'	 	: 'max, kuin $1',
                                    '[min]'		: 'min, kuin $1',
                                    '[required]'	: 'please fill'
                                });

                                $("form#myform").validator({ lang: 'fi' });
                             
                            });


                        </script>
            </div>

        </div>
    </div>
    <?php }else{?>
    <div class="content_right">
        <div class="sub_content_right">
            <div class="content_judul" style="width: 499px;margin-top: -20px">
                <p>reservation</p>
            </div>
            <img src="<?php echo base_url(); ?>image/content/wayang.jpg" id="wayang"/>
            <div class="content_isi">
                <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/user/cpagereservation/pesan', $attributes); ?>
                <form id="myform">
                <table style="margin-top: 20px">
                    <tr>
                        <td><?php if($msg=="sukses") {
                                echo "<p style=\"color:blue\">Reservation Berhasil</p><br/>";

                            }else if($msg=="gagal") {
                                echo "<p style=\"color:red\">Reservation Gagal</p><br/>";
                            }else if($msg=="kosong") {
                                echo "<p style=\"color:red\">Masih ada field yang kosong</p><br/>";
                            }?></td>

                    </tr>
                    <tr>
                        <td>nama*</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="nama" <?php if(form_error('nama')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('nama'); ?>" required="required"/>
                        </td>
                    </tr>
                    <tr>
                        <td>perusahaan*</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="company" <?php if(form_error('company')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('company'); ?>" required="required"/>

                        </td>
                    </tr>
                    <tr>
                        <td>alamat*</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="address" <?php if(form_error('address')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('address'); ?>"style="width: 498px" required="required"/>
                        </td>
                    </tr>
                    <tr>
                        <td>email</td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" <?php if(form_error('email')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('email'); ?>" required="required"/>
                        <?php echo form_error('judulB', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>phone*</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="phone" <?php if(form_error('phone')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('phone'); ?>" required="required"/></td>
                    </tr>
                    <tr>
                        <td>mobile*</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="mobile" <?php if(form_error('mobile')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('mobile'); ?>" required="required"/></td>
                    </tr>
                    <tr>
                        <td>fax*</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="fax" <?php if(form_error('fax')) {
                                echo "style=\"border-color: red\"";
                                   } ?>value="<?php echo set_value('fax'); ?>" required="required"/></td>
                    </tr>
                    <tr>
                        <td>tanggal kedatangan(dd-mm-yy)</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="arrbulan" required="required">
                                <option selected="selected" value="">-</option>
                                <option value="01">jan</option>
                                <option value="02">feb</option>
                                <option value="03">mar</option>
                                <option value="04">apr</option>
                                <option value="05">may</option>
                                <option value="06">jun</option>
                                <option value="07">jul</option>
                                <option value="08">agu</option>
                                <option value="09">sep</option>
                                <option value="10">okt</option>
                                <option value="11">nov</option>
                                <option value="12">des</option>
                            </select>

                            <select name="arrtanggal" required="required">
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <input type="text" name="arrtahun" style="width: 76px" required="required"/>
                        </td>

                    </tr>
                    <tr>
                        <td>tanggal keberangkatan(dd-mm-yy)</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="depbulan" required="required">
                                <option selected="selected" value="">-</option>
                                <option value="01">jan</option>
                                <option value="02">feb</option>
                                <option value="03">mar</option>
                                <option value="04">apr</option>
                                <option value="05">may</option>
                                <option value="06">jun</option>
                                <option value="07">jul</option>
                                <option value="08">agu</option>
                                <option value="09">sep</option>
                                <option value="10">okt</option>
                                <option value="11">nov</option>
                                <option value="12">des</option>
                            </select>
                            <select name="deptanggal" required="required">
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <input type="text" name="deptahun" style="width: 76px" required="required"/>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            pax*
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="width: 176px" name="pax" required="required">
                                <option selected="selected" value="">&nbsp;</option>
                                <option value="01">01 pax</option>
                                <option value="02">02 pax</option>
                                <option value="03">03 pax</option>
                                <option value="04">04 pax</option>
                                <option value="05">05 pax</option>
                                <option value="06">06 pax</option>
                                <option value="07">07 pax</option>
                                <option value="08">08 pax</option>
                                <option value="09">09 pax</option>
                                <option value="10">10 pax</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            akomodasi*
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="width: 176px" name="akomodasi" required="required">
                                <option selected="selected" value="">&nbsp;</option>
                                <option value="5">5&starf;hotel</option>
                                <option value="4">4&starf;hotel</option>
                                <option value="3">3&starf;hotel</option>
                                <option value="2">2&starf;hotel</option>
                                <option value="1">1&starf;hotel</option>
                                <option value="cottage">cottage</option>
                                <option value="villa">villa</option>
                                <option value="resort">resort</option>
                                <option value="boutique hotel">boutique hotel</option>
                            </select><?php echo form_error('hotel', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            transportasi*
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="width: 176px" name="transportasi" required="required">
                                <option value="">-</option>
                                <option value="KIA peagio">KIA peagio</option>
                                <option value="kijang innova">kijang innova</option>
                                <option value="kijang capsule">kijang capsule</option>
                                <option value="izusu ELF">izusu ELF</option>
                                <option value="bus 20 seat">bus 20 seat</option>
                                <option value="bus 25 seat">bus 25 seat</option>
                                <option value="bus 35 seat">bus 35 seat</option>
                                <option value="bus 45 seat">bus 45 seat</option>
                                <option value="bus 48 seat">bus 48 seat</option>
                                <option value="bus 54 seat">bus 54 seat</option>
                            </select><?php echo form_error('transportasi', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr
                    <tr>
                        <td>
                            panduan layanan*
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="width: 176px" name="guide" required="required">
                                <option value="">-</option>
                                <option value="indonesia">indonesia</option>
                                <option value="english">english</option>
                                <option value="japan">japan</option>
                                <option value="mandarin">mandarin</option>
                                <option value="korea">korea</option>
                                <option value="france">france</option>
                                <option value="russia">russia</option>
                                <option value="spanish">spanish</option>
                                <option value="german">german</option>
                                <option value="deutch">deutch</option>
                            </select><?php echo form_error('guide', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr
                    <tr>
                        <td>
                            paket wisata*
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input style="width: 498px" name="tp" value="<?php echo set_value('tp'); ?>" required="required"/><?php echo form_error('tp', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            spesial pesan*
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea style="width: 498px;height: 103px" name="sr"><?php echo set_value('sr'); ?></textarea>
                           <?php echo form_error('sr', '<p style="color:red">', '</p>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            masukkan huruf menunjukkan ke gambar berikut*
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><img src="<?php echo base_url() ?>cap/cap.php" style="height: 40px;width: 150px"/></td>
                    </tr>
                    <tr>

                        <td style="text-align: center">
                            <ul style="margin: 30px auto 20px auto">

                                <li style="margin-bottom: 10px;">captcha</li>
                                <li><input type="text" style="width: 130px;text-align: center" name="cap" required="required"/></li>

                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" value="Send Reservation" id="tmbl"/></td>
                    </tr>

                    <tr>
                        <td>layanan skala waktu*</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;width: 300px; height: 92px;white-space: pre-line">
                            kami akan kontak Anda untuk mengkonfirmasi ketersediaan dan persyaratan pembayaran dalam waktu 24-48 jam.
                        </td>

                    </tr>
                </table>
                </form>
                <script type="text/javascript">
                            $(document).ready(function(){
                                $.tools.validator.localize("fi", {
                                    '*'			: 'empty',
                                    ':email'  	: 'empty email',
                                    ':number' 	: 'not valid number',
                                    ':url' 		: 'not valid url',
                                    '[max]'	 	: 'max, kuin $1',
                                    '[min]'		: 'min, kuin $1',
                                    '[required]'	: 'please fill'
                                });

                                $("form#myform").validator({ lang: 'fi' });

                            });


                        </script>
            </div>

        </div>
    </div>
    <?php }?>
</div>