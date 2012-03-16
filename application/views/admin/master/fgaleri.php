<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">Master</a></li>
        <li class="icon point_right active"><a href="#">Galeri</a></li>

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


        <h2 class="icon pages">Input Galery</h2>

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
					Input galery berbahasa Indonesia, untuk pemilihan halaman bahasa Indonesia.
                </p>

                <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/mas/galery/add/id', $attributes); ?>

                <div class="field">
                    <label class="left">Judul Galery</label>
                    <input type="text" name="judulG" id="judulG" value="<?php echo set_value('judulG'); ?>" class="left validate">
                    <?php echo form_error('judulG', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>


                </div>



                <div class="field">
                    <label>Isi</label>
                    <textarea name="isi" class="wysiwyg"><?php echo set_value('isi'); ?></textarea>
                    <?php echo form_error('isi', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>

                </div>

                <div class="field">

                    <label class="left nomargin">Gambar</label>
                    <input type="file" name="file" accept="image/*"/><br/><p>Note : Image extension .jpg, size max 100kb</p>
                </div>

                <button>Simpan Berita</button>
                </form>
            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->
            <div id="addnews" class="padding">

                <p class="note">
                    <span class="icon info"></span>
					Input galery to English,  choice to English page.
                </p>
                <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/mas/galery/add/en', $attributes); ?>


                <div class="field">
                    <label class="left">Galery Title</label>
                    <input type="text" name="judulG" id="judulG" value="<?php echo set_value('judulG'); ?>" class="left validate">
                    <?php echo form_error('judulG', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>


                </div>



                <div class="field">
                    <label>Galery Content</label>

                    <textarea name="isi" class="wysiwyg"><?php echo set_value('isi'); ?></textarea>
                    <?php echo form_error('isi', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>

                </div>
                <div class="field">

                    <label class="left nomargin">Image</label>
                    <input type="file" name="file" accept="image/*"/><br/><p>Note : Image extension .jpg, size max 100kb</p>
                </div>
                <button>Publish Galery</button>

            </form>
            </div>
            <!-- News Sorting Table - Add News Tab: End -->


        </div>
        <!-- News Table Tabs: End -->

    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/menu_bawah'); ?>