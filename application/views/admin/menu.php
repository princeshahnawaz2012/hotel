<!-- Header Grid Container: Start -->
<div class="grid_24">

    <!-- User Panel: Start -->
    <div id="userpanel">


        <!-- User: Start -->
        <ul id="user" class="dropdown">
            <li class="topnav">
                <!-- User Name -->
                <a href="#" class="top icon user">Administrator</a>

                <!-- User Dropdown Content: Start -->
                <ul class="subnav">
                    <li><a href="javascript:void(0);" id="setting-admin" class="icon settings">Settings</a></li>

                    <li><a href="<?php echo base_url(); ?>index.php/auth/logout" class="icon lock">Log out</a></li>
                </ul>
                <!-- User Dropdown Content: End -->
                <div id="settingAdmin" class="box_content padding" title="Merubah Password Admin">
                    <?php echo form_open('auth/change'); ?>
                    <div class="field" >
                        <label>Username</label>
                        <input type="hidden" name="idadmin" value="<?php echo $this->session->userdata('ID');?>" class="big validate" readonly="true">

                        <input type="text" name="admin" value="<?php echo $this->session->userdata('USERNAME');?>" class="big validate">

                        <label>Password Lama</label>
                        <input type="password" name="pl" class="big validate">

                        <label>Password Baru</label>
                        <input type="password" name="pb" class="big validate">

                        <label>Ulangi Password Baru</label>
                        <input type="password" name="upb" class="big validate">
                    </div>
                    <input type="submit" value="Ganti Password" class="button"/>
                    </form>

                </div> 
            </li>
        </ul>
        <!-- User: End -->

        <!-- Messages: Start -->




        <!-- Style (Themes) Switcher: Start -->

        <!-- Width Switcher: End -->

    </div>
    <!-- User Panel: End -->


    <!-- Header: Start -->
    <div id="header">

        <!-- Logo: Start -->
        <a href="<?php echo base_url(); ?>index.php/admin/dashboar" id="logo">Simplpan - Admin Panel</a>
        <!-- Logo: End -->

        <!-- Navigation: Start -->
        <ul id="navigation" class="dropdown">
            <?php if($menuActive == "dashboar") {?>
                <li><a class="dashboard active" href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
           <?php  }else { ?>
                <li><a class="dashboard" href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
          <?php  }?>



            <!-- Navigation Dropdown Menu Item: Start -->
            <li class="topnav">
                <?php if($menuActive == "master") {
                    echo "<a class=\"frames active\" href=\"#\">Master</a>";
                }else {
                    echo "<a class=\"frames\" href=\"#\">Master</a>";
                }?>



                <!-- Navigation Dropdown Menu Item Content: Start -->
                <ul class="subnav">
                    <li><a href="<?php echo base_url(); ?>index.php/mas/ha" class="icon typography">Halaman Awal</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/mas/berita" class="icon typography">Berita</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/mas/profil" class="icon typography">Profil</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/mas/pt" class="icon typography">Paket Tour</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/mas/hotel" class="icon typography">Hotel</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/mas/galery" class="icon typography">Galery</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/mas/sm" class="icon typography">Sewa Mobil</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/mas/tc" class="icon typography">Term n' Condition</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/mas/testimoni" class="icon typography">Testimoni</a></li>
                </ul>
                <!-- Navigation Dropdown Menu Item Content: End -->
            </li>

            <!-- Navigation Dropdown Menu Item: End -->

            <!-- Navigation Dropdown Menu Item: Start -->
            <li class="topnav">
                <?php if($menuActive == "master") {
                    echo "<a class=\"pages active\" href=\"#\">Data</a>";
                }else {
                    echo "<a class=\"pages\" href=\"#\">Data</a>";
                }?>

                <!-- Navigation Dropdown Menu Item Content: Start -->
                <ul class="subnav">
                    <li><a href="<?php echo base_url(); ?>index.php/data/dataHa" class="icon list">Halaman Awal</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/data/dataBerita" class="icon list">Berita</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/data/dataProfil" class="icon list">Profil</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/data/dataPt" class="icon list">Paket Tour</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/data/dataHotel" class="icon list">Hotel</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/data/dataGaleri" class="icon list">Galery</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/data/dataMobil" class="icon list">Sewa Mobil</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/data/dataTerm" class="icon list">Term n' Condition</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/data/dataTestimoni" class="icon list">Testimoni</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/data/dataUser" class="icon user">Data Reservation</a></li>
                </ul>
                <!-- Navigation Dropdown Menu Item Content: End -->
            </li>

            <!-- Navigation Dropdown Menu Item: End -->

            <!-- Navigation Menu Item: Start -->

            <!-- Navigation Menu Item: End -->
        </ul>
        <!-- Navigation: End -->

    </div>
    <!-- Header: End -->


    <!-- Breadcrumb Bar: Start -->


    <!-- Header Grid Container: End -->
    <script type="text/javascript">
        $(function() {
            //$("#dialog").css({'display': 'none'});
            $("#setting-admin").click( function (){
                $('#settingAdmin').dialog('open');
            });
            $("#settingAdmin").dialog({
                bgiframe: true,
                autoOpen: false,
                height: 500,
                width :450,
                modal: true

            });
        });
    </script>