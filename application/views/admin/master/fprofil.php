<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">Master</a></li>
        <li class="icon point_right active"><a href="#">Profil</a></li>

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


        <h2 class="icon pages">Input Profil</h2>

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
					Input profil berbahasa Indonesia, untuk pemilihan halaman bahasa Indonesia.
                </p>

                <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/mas/profil/add/id', $attributes); ?>

                <div class="field">
                    <label>About Us</label>

                    <textarea class="wysiwyg" name="aboutus" value="<?php echo set_value('aboutus'); ?>"></textarea>
                    <?php echo form_error('aboutus', '<br/><p class="error left small"><span class="icon error"></span>', '</p>'); ?>
                </div>

                <div class="field">
                    <label>Contact</label>

                    <textarea class="wysiwyg" name="contact" value="<?php echo set_value('contact'); ?>"></textarea>
                    <?php echo form_error('contact', '<br/><p class="error left small"><span class="icon error"></span>', '</p>'); ?>
                </div>

                <div class="field">
                    <label class="left">Peta</label>
                    <input type="text" name="peta" value="<?php echo set_value('peta'); ?>" class="left validate">
                    <?php echo form_error('peta', '<p class="error left small"><span class="icon error"></span>', '</p>'); ?>
                </div>






                <button>Simpan Profil</button>
                </form>
            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->
            <div id="addnews" class="padding">

                <p class="note">
                    <span class="icon info"></span>
					Input profil to English,  choice to English page.
                </p>

                <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/mas/profil/add/en', $attributes); ?>

                <div class="field">
                    <label>About Us</label>

                    <textarea class="wysiwyg" name="aboutus" value="<?php echo set_value('aboutus'); ?>"></textarea>
                    <?php echo form_error('aboutus', '<br/><p class="error left small"><span class="icon error"></span>', '</p>'); ?>
                </div>

                <div class="field">
                    <label>Contact</label>

                    <textarea class="wysiwyg" name="contact" value="<?php echo set_value('contact'); ?>"></textarea>
                    <?php echo form_error('contact', '<br/><p class="error left small"><span class="icon error"></span>', '</p>'); ?>
                </div>

                <div class="field">
                    <label class="left">Peta</label>
                    <input type="text" name="peta" value="<?php echo set_value('peta'); ?>" class="left validate">
                    <?php echo form_error('peta', '<p class="error left small"><span class="icon error"></span>', '</p>'); ?>
                </div>


                <button>Publish Profil</button>
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