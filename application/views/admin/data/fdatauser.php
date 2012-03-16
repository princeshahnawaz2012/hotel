<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">Data</a></li>
        <li class="icon point_right active"><a href="#">User</a></li>

    </ul>

    <!-- Breadcrumb: End -->

    <!-- Breadcrumb Icon Links: Start -->

    <ul class="right">

        <li><a href="<?php echo base_url(); ?>index.php/admin/dashboar" class="icon home tip" title="Dashboard">Home</a></li>
    </ul>
    <!-- Breadcrumb Icon Links: End -->

</div>
<!-- Breadcrumb Bar: End -->

</div>
<!-- 100% Box Grid Container: Start -->
<div class="grid_24">
    <?php if ($msg == "success") { ?>
    <div class="notice success">
        <p><b>Success:</b> Data berhasil diedit.</p>
    </div>
        <?php } else if($msg == "successDel") { ?>
    <div class="notice success">
        <p><b>Success:</b> Data berhasil di hapus.</p>
    </div>
        <?php
    } else if($msg == "gagal") { ?>
    <div class="notice error">
        <p><b>Gagal : </b> Masih ada field yang kosong.</p>
    </div>
        <?php }
    ?>
    <!-- Box Header: Start -->
    <div class="box_top">


        <h2 class="icon pages">Data Reservation</h2>

        <!-- Tab Select: Start -->
        <ul class="sorting">


        </ul>
        <!-- Tab Select: End -->


    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">

        <!-- News Table Tabs: Start -->
        <div class="tabs">

            <!-- News Sorting Table: Start -->
            <div id="listing">

                <table class="sorting">

                    <thead>
                        <tr>

                            <th class="align_left">No.</th>
                            <th class="align_left center">Nama User</th>
                            <th class="align_left center">Perusahaan</th>
                            <th class="align_left center">Alamat</th>
                            <th class="align_left center">Detail Contact</th>
                            <th class="align_left center">Detail Pemesanan</th>
                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0;
                        $url = base_url();
                        $up="uploads/";

                        if(isset ($user)) {
                            foreach ($user as $r) {
                                $i++;
//                                $tanggal = str_replace("-", "/", $r->tanggalN);
//                                $t = substr($tanggal, 0,4);
//                                $a = substr($tanggal, 5,2);
//                                $g = substr($tanggal, 8);
//                                $tgl = "$a/$g/$t";
                                echo"<tr>
							<td class=\"align_left\">$i</td>
							<td class=\"align_left center\">$r->nama</td>
                                                        <td class=\"align_left center\">$r->perusahaan</td>
                                                        <td class=\"align_left center\">$r->alamat</td>
                                        <td class=\"align_left center\"><a class=\"view tip\" href=\"javascript:void(0);\" id=\"detail-contact\" nama=\"$r->nama\"email=\"$r->email\"telp=\"$r->telp\"hp=\"$r->hp\"fax=\"$r->fax\"title=\"Detail Contact\">view</a></td>
							<td class=\"align_left center\"><a class=\"view tip\" href=\"dataUser/detail/$r->iduser\" title=\"Detail Pemesanan\">view</a></td>
							<td class=\"align_left tools center\">"; ?>
								
								<a href="<?php echo base_url(); ?>index.php/data/dataUser/delete/<?php echo $r->iduser?>" class="delete tip" title="delete" onclick="return confirm('Apakah anda ingin menghapus data ini?')">delete</a>
						<?php	echo "</td>
						</tr>";

                            }
                        }?>




                    </tbody>
                </table>


                <!-- News Sorting Table Actions: Start -->

                <!-- News Sorting Table Actions: End -->

            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->

            <!-- News Sorting Table - Add News Tab: End -->


        </div>
        <!-- News Table Tabs: End -->
        <div id="detailC" class="box_content padding" title="Detail Pemesanan">
            <?php echo form_open('auth/change'); ?>
            <div class="field" >
                <label>Nama</label>
                <input type="text" name="nama" id="nama" readonly="true" class="big validate">

                <label>Email</label>
                <input type="text" name="email" id="email" readonly="true" class="big validate">

                <label>Telp</label>
                <input type="text" name="telp" id="telp" readonly="true" class="big validate">



                <label>Mobile</label>
                <input type="text" name="hp" id="hp" readonly="true" class="big validate">


                <label>Fax</label>
                
                <input type="text" name="fax" id="fax" readonly="true" class="big validate">

            </div>

            </form>

        </div>
    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<script type="text/javascript">
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $("#detail-contact").click( function (){
            $('#detailC').dialog('open');
            var nama = $(this).attr("nama");
            var email = $(this).attr("email");
            var telp = $(this).attr("telp");
            var hp = $(this).attr("hp");
            var fax = $(this).attr("fax");
            $('#nama').val(nama);
            $('#email').val(email);
            $('#telp').val(telp);
            $('#hp').val(hp);
            $('#fax').val(fax);
        });
        $("#detailC").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 600,
            width :500,
            modal: true

        });
    });
</script>