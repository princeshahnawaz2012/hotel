<div class="menu">
    <ul>
        <li>
            <table>
                <tr>
                    <td><a id="left"><img src="<?php echo base_url(); ?>image/menu/left_arrow.gif" id="left_arrow"/></a></td>
                    <td><a href="<?php echo base_url(); ?>index.php/user/cpagehome"><img src="<?php echo base_url(); ?>image/menu/home_arrow.gif" id="home_arrow"/></a></td>
                    <td><a id="right"><img src="<?php echo base_url(); ?>image/menu/right_arrow.gif" id="right_arrow"/></a></td>
                </tr>
            </table>
        </li>
        <?php if($this->session->userdata('EN') == "en") { ?>
        <li  class="list_length"><a href="<?php echo base_url(); ?>index.php/user/cpagepack#packetW">packages tour</a></li>
        <li class="list_length_center"><a href="<?php echo base_url(); ?>index.php/user/cpagehotel#hotel">hotel</a></li>
        <li class="list_length_center"><a href="<?php echo base_url(); ?>index.php/user/cpagegallery#gallery">gallery</a></li>
        <li class="list_length_center"><a href="<?php echo base_url(); ?>index.php/user/cpagerent#rent">rent car</a></li>
        <li  class="list_length" style="margin-right: -185px"><a href="<?php echo base_url(); ?>index.php/user/cpageterm#term">term and condition</a></li>
            <?php }else {?>
        <li  class="list_length"><a href="<?php echo base_url(); ?>index.php/user/cpagepack#packetW">paket wisata</a></li>
        <li class="list_length_center"><a href="<?php echo base_url(); ?>index.php/user/cpagehotel#hotel">hotel</a></li>
        <li class="list_length_center"><a href="<?php echo base_url(); ?>index.php/user/cpagegallery#gallery">galleri</a></li>
        <li class="list_length_center"><a href="<?php echo base_url(); ?>index.php/user/cpagerent#rent">sewa mobil</a></li>
        <li  class="list_length" style="margin-right: -185px"><a href="<?php echo base_url(); ?>index.php/user/cpageterm#term">term dan condition</a></li>
    
            <?php }?>
    </ul>
</div>