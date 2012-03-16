<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">Master</a></li>
        <li class="icon point_right active"><a href="#">Halaman Awal</a></li>

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


        <h2 class="icon pages">Input Gambar Halaman Awal</h2>

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

                <p class="note">
                    <span class="icon info"></span>
					Gambar yang akan tampil di halaman awal bawah.
                </p>

                <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/mas/ha/add', $attributes); ?>
                <div class="field">

                    <label class="left nomargin">File Input</label>
                    <input type="file" name="file" accept="image/*"/><br/><p>Note : Image extension .jpg, size max 100kb</p>
                </div>

                <button>Publish Gambar</button>

                </form>
                <!-- News Sorting Table Actions: End -->

            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->



        </div>
        <!-- News Table Tabs: End -->

    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/menu_bawah'); ?>