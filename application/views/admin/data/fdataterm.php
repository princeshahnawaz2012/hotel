<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="<?php echo base_url(); ?>index.php/admin/dashboar">Dashboard</a></li>
        <li class="icon point_right"><a href="#">Data</a></li>
        <li class="icon point_right active"><a href="#">Term n' Condition</a></li>

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


        <h2 class="icon pages">Data Term n' Condition</h2>

        <!-- Tab Select: Start -->
        <ul class="sorting">
            <li><a href="#listing" class="active">Bahasa Indonesia</a></li>
            <li><a href="#addnews">Bahasa Inggris</a></li>
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

                            <th class="align_left center">Isi</th>

                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i=0;
                        $url = base_url();
                        $up="uploads/";
                        if(isset ($id)) {
                            foreach ($id as $r) {
                                $i++;
                                echo"<tr>
							<td class=\"align_left\">$i</td>
							
                                                        <td class=\"align_left center\">";echo word_limiter($r->isiT, 20)."</td>
							
							<td class=\"align_left tools center\">
								<a href=\"dataTerm/getById/$r->idterm\" class=\"edit tip\" title=\"edit\">edit</a>
";?>

                    <a href="<?php echo base_url();?>index.php/data/dataTerm/delete/<?php echo $r->idterm?>" class="delete tip" title="delete" onclick="return confirm('Apakah anda ingin menghapus data ini?')">delete</a>
							<?php echo "</td>
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
            <div id="addnews">

                <table class="sorting">

                    <thead>
                        <tr>

                            <th class="align_left">No.</th>

                            <th class="align_left center">Content</th>

                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i=0;
                        $url = base_url();
                        $up="uploads/";
                        if(isset ($en)) {
                            foreach ($en as $r) {
                                $i++;
                                echo"<tr>
							<td class=\"align_left\">$i</td>

                                                       <td class=\"align_left center\">";echo $r->isiT."</td>

							<td class=\"align_left tools center\">
								<a href=\"dataTerm/getById/$r->idterm\" class=\"edit tip\" title=\"edit\">edit</a>
";?>

                    <a href="<?php echo base_url();?>index.php/data/dataTerm/delete/<?php echo $r->idterm?>" class="delete tip" title="delete" onclick="return confirm('Apakah anda ingin menghapus data ini?')">delete</a>
							<?php echo "</td>
						</tr>";

                            }
                        }?>




                    </tbody>
                </table>


                <!-- News Sorting Table Actions: Start -->

            </div>
            <!-- News Sorting Table - Add News Tab: End -->


        </div>
        <!-- News Table Tabs: End -->

    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
