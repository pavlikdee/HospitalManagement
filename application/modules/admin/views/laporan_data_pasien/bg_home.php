	<section class="container">
	
		<!-- Headings
			================================================== -->
		<section class="row-fluid">
			<h1 class="box-header"><span class="icon-file"></span> Laporan Data Pasien | <?php echo $GLOBALS['site_title']; ?></h1>
			<div class="box">
				<div class="well">
					<a class="btn btn-warning" href="<?php echo base_url(); ?>admin/laporan_data_pasien/cetak">Cetak Data</a>
					<?php echo $data_retrieve; ?>
				</div>
			</div>
		</section>