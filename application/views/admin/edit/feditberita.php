<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">Master</a></li>

        <li class="icon point_right active"><a href="<?php echo base_url()?>index.php/data/dataBerita">Berita</a></li>
        <li class="icon point_right"><a href="#">EDIT</a></li>
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


        <h2 class="icon pages">Edit Berita</h2>

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
                if(isset ($en)) {
                    foreach ($en as $r) {
                       
                        $tanggal = str_replace("-", "/", $r->tanggalN);
                        $t = substr($tanggal, 0,4);
                        $a = substr($tanggal, 5,2);
                        $g = substr($tanggal, 8);
                        $tgl = "$a/$g/$t";?>
                <div class="field">
                    <label class="left">Judul Berita</label>
                    <input type="text" name="judulB" id="judulB" value="<?php echo $r->judulN ?>" class="left validate">
                    <input type="text" name="idnews" id="judulB" value="<?php echo $r->idnews ?>" class="left validate">
                </div>

                <div class="field">
                    <label class="left">Tanggal</label>

                    <input type="text" name="tanggal" id="tanggal" value="<?php echo $tgl ?>" class="date">
                           
                </div>

                <div class="field">

                    <label class="left nomargin">Gambar</label>
                    <input type="file" name="file" accept="image/*"/><br/><p>Note : Image extension .jpg, size max 100kb</p>
                </div>

                <div class="field">
                    <label>Isi Berita</label>

                    <textarea class="wysiwyg" name="isiB"><?php echo $r->isiN ?></textarea>
                            
                </div>



                <button>Simpan Berita</button>
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