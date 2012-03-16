<!-- 100% Box Grid Container: Start -->
<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="#">Dashboard</a></li>
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

    <!-- Box Header: Start -->
    <div class="box_top">


        <h2 class="icon graph">Visitor Country</h2>

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">

        <!-- Stats Table: Start -->
        <table>
            <?php
            
            foreach ($negara as $r) {
                
                    ?>
                    <tr>

                        <td>
                            <span class="icon pictures"></span>
                            <?php echo $r->negara ?> <span class="icon">:</span> &nbsp; <?php echo $r->total ?>
                        </td>
                        <td>
                        	<a href="<?php echo base_url(); ?>index.php/admin/dashboar/cekVisited/<?php echo $r->negara ?>"><== Klik here to detail top pages ==></a>
                        </td>


                    </tr>

                <?php  }?>


            </table>
            <!-- Stats Table: End -->

            <!-- Pagination: Start -->


            <!-- Pagination: End -->

        </div>
        <!-- Box Content: End -->

    </div>

<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon graph">Top Pages ( <?php echo $ngr ?> )</h2>
		
		<!-- Graphs Stats Sorting: Start -->
		<ul class="sorting">
			<li><a href="#line" class="active">Line</a></li>
			<li><a href="#area">Area</a></li>

			<li><a href="#pie">Pie</a></li>
			<li><a href="#bar">Bars</a></li>
		</ul>
		<!-- Graphs Stats Sorting: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">

		
		<!-- Graphs Stats Table: Start -->
		<table class="stats">
			<thead>
		        <tr>
		         <td></td>
		         <th scope="col"> Welcome </th>
		         <th scope="col"> Home </th>

		         <th scope="col"> Profil </th>
		         <th scope="col"> News </th>
		         <th scope="col"> P.Tours </th>
		         <th scope="col"> Hotel </th>
		         <th scope="col"> Gallery </th>

		         <th scope="col"> Rental </th>
		         <th scope="col"> Testimoni </th>
		         <th scope="col"> Term </th>
		         <th scope="col"> Reservasi </th>
		         

		        </tr>
      		</thead>
			<tbody>
		        <tr>
		         <th scope="row"> Views </th>
		         <td> <?php echo $welcome ?> </td>
		         <td> <?php echo $home ?></td>

		         <td> <?php echo $profil ?> </td>
		         <td> <?php echo $news ?> </td>
		         
		         <td> <?php echo $tour ?> </td>
		         <td> <?php echo $hotel ?> </td>
		         <td> <?php echo $gallery ?> </td>

		         <td> <?php echo $rental ?> </td>
		         <td> <?php echo $testi ?> </td>
		         <td> <?php echo $term ?> </td>
			<td> <?php echo $product ?> </td>
		         

		        </tr>
		        

		    </tbody>
		</table>	
		<!-- Graphs Stats Table: End -->

	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 100% Box Grid Container: End -->



<div class="grid_24">
    <?php if ($msg == "gagal") { ?>
    <div class="notice warning">
        <p><b>PERHATIAN:</b> Ada field yang masih kosong, silahkan lengkapi field yang ada.</p>
    </div>
        <?php } else if ($msg == "success") { ?>
    <div class="notice success">
        <p><b>Success:</b> Data berhasil disimpan.</p>
    </div>
        <?php } else if ($msg == "gagal2") { ?>
    <div class="notice warning">
        <p><b>PERHATIAN:</b> Password lama salah atau password baru tidak sama dengan ulangi password baru.</p>
    </div>
        <?php } ?>
    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon graph">Visitor Statistics</h2>

        <!-- Graphs Stats Sorting: Start -->
        <ul class="sorting">
            <li><a href="#line" class="active">Line</a></li>
            <li><a href="#area">Area</a></li>

            <li><a href="#pie">Pie</a></li>
            <li><a href="#bar">Bars</a></li>
        </ul>
        <!-- Graphs Stats Sorting: End -->

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">


        <!-- Graphs Stats Table: Start -->
        <table class="stats">
            <thead>
                <tr>
                    <td></td>
                    <?php
                    $i = 0;
                    foreach ($conTgl as $r):
                        $i++;
                    $tgl = substr($r->tanggal, 8);
                                $bln = substr($r->tanggal, 5, 2);
                                $th = substr($r->tanggal, 0, 4);
                                if($bln=="01"){
                                    $bl="Jan";
                                }else if($bln=="02"){
                                    $bl="Feb";
                                }else if($bln=="03"){
                                    $bl="Mar";
                                }else if($bln=="04"){
                                    $bl="Apr";
                                }else if($bln=="05"){
                                    $bl="Mei";
                                }else if($bln=="06"){
                                    $bl="Jun";
                                }else if($bln=="07"){
                                    $bl="Jul";
                                }else if($bln=="08"){
                                    $bl="Ags";
                                }else if($bln=="09"){
                                    $bl="Sep";
                                }else if($bln=="10"){
                                    $bl="Okt";
                                }else if($bln=="11"){
                                    $bl="Nov";
                                }else if($bln=="12"){
                                    $bl="Des";
                                }
                        $balik[$i] = "$tgl-$bl";
                    endforeach;
                    ?>
                    <th scope="col"><?php

                    echo $balik[12]; ?></th>
                    <th scope="col"><?php echo $balik[11]; ?> </th>
                    <th scope="col"> <?php echo $balik[10]; ?> </th>
                    <th scope="col"> <?php echo $balik[9]; ?> </th>
                    <th scope="col"> <?php echo $balik[8]; ?> </th>
                    <th scope="col"> <?php echo $balik[7]; ?> </th>
                    <th scope="col"> <?php echo $balik[6]; ?></th>
                    <th scope="col"> <?php echo $balik[5]; ?> </th>
                    <th scope="col"> <?php echo $balik[4]; ?> </th>
                    <th scope="col"> <?php echo $balik[3]; ?> </th>
                    <th scope="col"> <?php echo $balik[2]; ?> </th>
                    <th scope="col"> <?php echo $balik[1]; ?> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> Pengunjung <?php echo "Tahun $th"?></th>
                    <td><?php echo $aa12; ?> </td>
                    <td> <?php echo $aa11; ?> </td>
                    <td> <?php echo $aa10; ?> </td>
                    <td> <?php echo $aa9; ?> </td>
                    <td> <?php echo $aa8; ?> </td>
                    <td> <?php echo $aa7; ?> </td>
                    <td> <?php echo $aa6; ?> </td>
                    <td> <?php echo $aa5; ?> </td>
                    <td> <?php echo $aa4; ?> </td>
                    <td> <?php echo $aa3; ?> </td>
                    <td> <?php echo $aa2; ?> </td>
                    <td> <?php echo $aa1; ?></td>
                </tr>

            </tbody>
        </table>	
        <!-- Graphs Stats Table: End -->

    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<?php $this->load->view('admin/menu_bawah'); ?>