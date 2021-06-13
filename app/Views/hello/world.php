<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="style.css">






<!-- section pertama -->
<section class="pertama">
	<div class="container">
	<div class="row">
		<div class="col-6">
			<img src="<?php echo base_url(); ?>/image/shop.png" class="gpertama">
		</div>
		<div class="col-6">
			<div class="kata1">
				<h1>Yuyu Thrift</h1>
				<p>Berbelanja baju dengan mudah cukup duduk dirumah saja, dan baju Anda akan datang. Daftar sekarang juga dan beli bajunya</p>

			</div>
			
		</div>
	</div>
</div>
</section>
<!-- akhir section pertama -->

<!-- section kedua -->
<section class="bagian2">
	<div class="kata2">
				<h1>Crewneck</h1>
			</div>
	<div class="row">
        <div class="col-3"><img src="<?php echo base_url(); ?>/image/Levis.jpg" class="gkedua"></div>
        <div class="col-3"><img src="<?php echo base_url(); ?>/image/MB_LA.jpg" class="gkedua"></div>
        <div class="col-3"><img src="<?php echo base_url(); ?>/image/Disney.jpg" class="gkedua"></div>
        <div class="col-3"><img src="<?php echo base_url(); ?>/image/uniqlo_A.jpg" class="gkedua"></div>
    </div>
</section>

<!-- akhir section kedua -->





<?= $this->endSection() ?>