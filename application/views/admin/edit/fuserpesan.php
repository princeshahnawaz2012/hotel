<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">data</a></li>

        <li class="icon point_right active"><a href="<?php echo base_url()?>index.php/data/dataUser">Reservation</a></li>
        <li class="icon point_right"><a href="#">Detail</a></li>
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

<div class="grid_24">

    <?php if ($msg == "gagal") { ?>
    <div class="notice warning">
        <p><b>PERHATIAN:</b> Gagal simpan gambar tidak mendukung.</p>
    </div>
        <?php } else if ($msg == "success") { ?>
    <div class="notice success">
        <p><b>Success:</b> Data berhasil disimpan.</p>
    </div>
        <?php } ?>
    <!-- Box Header: Start -->
    <div class="box_top">


        <h2 class="icon pages">Detail Reservation</h2>

        <!-- Tab Select: Start -->

        <!-- Tab Select: End -->


    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">

        <!-- News Table Tabs: Start -->
        <div class="tabs">

            <!-- News Sorting Table: Start -->
            <div id="listing" class="padding">

                <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/data/dataBerita/edit', $attributes);
                if(isset ($user)) {
                    foreach ($user as $r) {

                        $tanggal = str_replace("-", "/", $r->arrival);
                        $t = substr($tanggal, 0,4);
                        $a = substr($tanggal, 5,2);
                        $g = substr($tanggal, 8);
                        $tgl = "$g/$a/$t";
                        $tanggal2 = str_replace("-", "/", $r->departure);
                        $t2 = substr($tanggal2, 0,4);
                        $a2 = substr($tanggal2, 5,2);
                        $g2 = substr($tanggal2, 8);
                        $tgl2 = "$g2/$a2/$t2";?>
                <div class="field">
                    <label class="left">Nama Pemesan</label>
                    <label class="left">:</label>
                    <label class="left"><?php echo $r->nama ?></label>
                </div>
                <div class="field">
                    <label class="left">Arrival</label>
                    <label class="left">:</label>
                    <label class="left"><?php echo $tgl ?></label>
                </div>
                 <div class="field">
                    <label class="left">Departure</label>
                    <label class="left">:</label>
                    <label class="left"><?php echo $tgl2 ?></label>
                </div>
                <div class="field">
                    <label class="left">Pax</label>
                    <label class="left">:</label>
                    <label class="left"><?php echo $r->pax." Pax" ?></label>
                </div>
                 <div class="field">
                    <label class="left">Akomodasi</label>
                    <label class="left">:</label>
                    <label class="left"><?php echo $r->akomodasi."&starf;hotel" ?></label>
                </div>
                <div class="field">
                    <label class="left">Transportasi</label>
                    <label class="left">:</label>
                    <label class="left"><?php echo $r->transportasi ?></label>
                </div>
                <div class="field">
                    <label class="left">Guide</label>
                    <label class="left">:</label>
                    <label class="left"><?php echo $r->guide ?></label>
                </div>

                


                        <?php  }
                }?>
                </form>
            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->

            <!-- News Sorting Table - Add News Tab: End -->


        </div>
        <!-- News Table Tabs: End -->

    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/menu_bawah'); ?>