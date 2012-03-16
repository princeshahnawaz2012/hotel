<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">Master</a></li>
        <li class="icon point_right active"><a href="#">Hotel</a></li>

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


        <h2 class="icon pages">Input Hotel</h2>

        <!-- Tab Select: Start -->
        <ul class="sorting">
            <li><a href="#listing" class="active">Input Berbahasa Indonesia</a></li>
            <li><a href="#addnews">Input Berbahasa Inggris</a></li>
        </ul>
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
					Input hotel berbahasa Indonesia, untuk pemilihan halaman bahasa Indonesia.
                </p>

                <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/mas/hotel/add/id', $attributes); ?>

                <div class="field">
                    <label class="left">Nama Hotel</label>
                    <input type="text" name="namaH" value="<?php echo set_value('namaH'); ?>" class="left validate">
                    <?php echo form_error('namaH', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>
                </div>
                <div class="field">
                    <label class="left">Url</label>
                    <input type="text" name="url" value="<?php echo set_value('url'); ?>" class="left validate">
                    <?php echo form_error('url', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>
                </div>



                <div class="field">
                    <label>fasilitas</label>
                    <textarea name="fasilitas" class="wysiwyg"><?php echo set_value('fasilitas'); ?></textarea>
                    <?php echo form_error('fasilitas', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>
                </div>
                <div class="field">

                    <label class="left nomargin">Gambar</label>
                    <input type="file" name="file" accept="image/*"/><br/><p>Note : Image extension .jpg, size max 100kb</p>
                </div>


                <button>Simpan</button>
                </form>
            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->
            <div id="addnews" class="padding">

                <p class="note">
                    <span class="icon info"></span>
					Input hotel to English,  choice to English page.
                </p>

                <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/mas/hotel/add/en', $attributes); ?>

                <div class="field">
                    <label class="left">Name Hotel</label>
                    <input type="text" name="namaH" value="<?php echo set_value('namaH'); ?>" class="left validate">
                    <?php echo form_error('namaH', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>


                </div>
                <div class="field">
                    <label class="left">Url</label>
                    <input type="text" name="url" value="<?php echo set_value('url'); ?>" class="left validate">
                    <?php echo form_error('url', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>


                </div>


                <div class="field">
                    <label>Hotel Content</label>

                    <textarea name="fasilitas" class="wysiwyg"><?php echo set_value('fasilitas'); ?></textarea>
                    <?php echo form_error('fasilitas', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>

                </div>
                <div class="field">

                    <label class="left nomargin">Image</label>
                    <input type="file" name="file" accept="image/*"/><br/><p>Note : Image extension .jpg, size max 100kb</p>
                </div>

                <button>Publish Hotel</button>


            </div>
            <!-- News Sorting Table - Add News Tab: End -->


        </div>
        <!-- News Table Tabs: End -->

    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/menu_bawah'); ?>