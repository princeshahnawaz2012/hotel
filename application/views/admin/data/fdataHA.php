<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">Data</a></li>
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

    <?php if ($msg == "success") { ?>
    <div class="notice success">
        <p><b>Success:</b> Data berhasil diedit.</p>
    </div>
        <?php } else if($msg == "successDel") { ?>
    <div class="notice success">
        <p><b>Success:</b> Data berhasil di hapus.</p>
    </div>
        <?php }
    ?>
    <!-- Box Header: Start -->
    <div class="box_top">


        <h2 class="icon pages">Data Gambar</h2>

        <!-- Tab Select: Start -->

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
                            <th class="align_left center">Gambar</th>
                            <th class="align_left center">Lihat Gambar</th>

                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=0;
                        $url = base_url();
                        $up="uploads/";
                        if(isset ($gambar)) {
                            foreach ($gambar as $r) {
                                $i++;

                                echo "<tr>
                            <td class=\"align_left\">$i</td>
                            <td class=\"align_left center\">$r->gambarW</td>
                            <td class=\"align_left center\"><a class=\"view popup tip\" href=\"$url$up$r->gambarW\" title=\"View Gambar\">view</a>
                            <td class=\"align_left tools center\">
                            <a href=\"javascript:void(0);\" class=\"edit tip edit-gambar\" title=\"edit\" idG=\"$r->idwelcome\">edit</a>";?>
                    <a href="<?php echo base_url();?>index.php/data/dataHa/delete/<?php echo $r->idwelcome?>" class="delete tip" title="delete" onclick="return confirm('Apakah anda ingin menghapus data ini?')">delete</a><?php
                            echo "</td>
                            </tr>";

                        }
                    }

                    ?>




                    </tbody>
                </table>

                <div class="box_content padding editGambar" title="Merubah Gambar">
                    <?php $attributes = array('name' => 'con', 'id' => 'con');
                    echo form_open_multipart(base_url() . 'index.php/data/dataHa/edit', $attributes); ?>


                    <div class="field">

                        <label class="left nomargin">File Input</label>
                        <input type="hidden" id="idG" name="idG"/>
                        <input type="file" name="file"/>
                    </div>

                    <button>Ubah Gambar</button>

                    </form>
                </div> 

                <!-- News Sorting Table Actions: Start -->

                <!-- News Sorting Table Actions: End -->

            </div>
            <!-- News Sorting Table: End -->




        </div>
        <!-- News Table Tabs: End -->

    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<script type="text/javascript">
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $(".edit-gambar").click( function (){
            $('.editGambar').dialog('open');
            var id = $(this).attr("idG");
            $('#idG').val(id);
        });
        $(".editGambar").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 200,
            width :450,
            modal: true

        });
    });
</script>