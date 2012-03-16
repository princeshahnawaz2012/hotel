<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">Master</a></li>
        <li class="icon point_right active"><a href="#">Testimoni</a></li>

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


        <h2 class="icon pages">Input Testimoni</h2>

        <!-- Tab Select: Start 
        <ul class="sorting">
            <li><a href="#listing" class="active">Input Berbahasa Indonesia</a></li>
            <li><a href="#addnews">Input Berbahasa Inggris</a></li>
        </ul>
         Tab Select: End -->


    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">

        <!-- News Table Tabs: Start -->
        <div class="tabs">

            <!-- News Sorting Table: Start -->
            <div id="listing" class="padding">
              <!--  <p class="note">
                    <span class="icon info"></span>
					Input berbahasa Indonesia, untuk pemilihan halaman bahasa Indonesia.
                </p>-->
                 <?php //$attributes = array('name' => 'con', 'id' => 'con');
                //echo form_open_multipart(base_url() . 'index.php/mas/testimoni/add/id', $attributes); ?>
<form method="post" action="<?php echo base_url();?>index.php/mas/testimoni/add/id" enctype="multipart/form-data" />

                <div class="field">
                    <label class="left">Nama</label>
                      <input type="text" name="namaT" value="<?php echo set_value('namaT'); ?>" class="left validate">
                    <?php echo form_error('namaT', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>


                </div>
                <div class="field">
                    <label class="left">Umur</label>
                     <input type="text" name="umurT" value="<?php echo set_value('umurT'); ?>" class="left validate">
                    <?php echo form_error('umurT', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>


                </div>
                <div class="field">
                    <label class="left">Negara</label>
                   <input type="text" name="negaraT" value="<?php echo set_value('negaraT'); ?>" class="left validate">
                    <?php echo form_error('negaraT', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>


                </div>

               

                <div class="field">
                    <label>Isi Testimoni</label>

                    <textarea name="isi" class="wysiwyg"><?php echo set_value('isi'); ?></textarea>
                    <?php echo form_error('isi', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>

                </div>
                <div class="field">

                    <label class="left nomargin">Gambar</label>
                    <input type="file" name="file" accept="image/*"/>
                    <br/>
                    <p>Note : Image extension .jpg, size max 100kb</p>
                </div>



                <button>Simpan</button>
            </form>
            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->
            <!--<div id="addnews" class="padding">

                <p class="note">
                    <span class="icon info"></span>
					Input to English,  choice to English page.
                </p>

                 <?php $attributes = array('name' => 'con', 'id' => 'con');
                echo form_open_multipart(base_url() . 'index.php/mas/testimoni/add/en', $attributes); ?>

                 <div class="field">
                    <label class="left">Name</label>
                      <input type="text" name="namaT" value="<?php echo set_value('namaT'); ?>" class="left validate">
                    <?php echo form_error('namaT', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>


                </div>
                <div class="field">
                    <label class="left">Age</label>
                     <input type="text" name="umurT" value="<?php echo set_value('umurT'); ?>" class="left validate">
                    <?php echo form_error('umurT', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>


                </div>
                <div class="field">
                    <label class="left">Country</label>
                    <input type="text" name="negaraT" value="<?php echo set_value('negaraT'); ?>" class="left validate">
                    <?php echo form_error('negaraT', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>


                </div>



                <div class="field">
                    <label>Testimoni</label>

                    <textarea name="isi" class="wysiwyg"><?php echo set_value('isi'); ?></textarea>
                    <?php echo form_error('isi', '<p class="error right small"><span class="icon error"></span>', '</p>'); ?>

                </div>
                <div class="field">

                    <label class="left nomargin">Image</label>
                    <input type="file" name="file" accept="image/*"/>
                   
                </div>

                <button>Publish</button>
               
            </form>
            </div>
            News Sorting Table - Add News Tab: End -->


        </div>
     

    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/menu_bawah'); ?>