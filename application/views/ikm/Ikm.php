<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- CSS -->
	<link rel="stylesheet" href="assets/cssIKM/style.css">

	<title>IKM</title>
</head>

<body>
	<div class="jumbotron jumbotron-fluid bg-danger text-white">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-2 col-3 col_imgs">
					<img src="assets/imgIKM/poldabali.png" width="125" height="125" class="img-fluid polda">
				</div>
				<div class="col-lg-8 col-6 text-res">
					<h1 class="display-7"> <b>INDEKS KEPUASAN MASYARAKAT
							<br> DITRESNARKOBA POLDA BALI </b>
					</h1>
				</div>
				<div class="col-lg-2 col-3 col_imgs">
					<img src="assets/imgIKM/narkoba1.png" class="img-fluid narkobagambar ">
				</div>
			</div>

		</div>
	</div>

	<?php

	?>
	<div class="container">

		<!-- <?php

				// if (count((array) $cek_user) > 0 && $cek_user->mac_address == $mac_user_now) {
				?>
			<div class="alert alert-success" role="alert">
				Terima Kasih, Polling Anda Telah Berhasil Tersimpan!
			</div>
		<?php {
		?> -->

		<div class="alert alert-warning" role="alert">
			Perhatian!!! untuk memberikan penilaian/poling/suara silahkan klik Icon / Emoji
		</div>
		<div class="row text-center  box_container">
			<div class="col-md-4 box_btn">
				<div class="bg-primary box text-white">
					<div class="row kotak">
						<div class="col-md-6 text-res btn_text_">
							<br>
							<h5>SANGAT PUAS</h5>
						</div>
						<div class="col-md-4 col-12 btn_img_">
							<a href="<?= base_url('polling/1'); ?>" title="Jika Anda Merasa Sangat Puas dengan Pelayanan kami, Klik Icon ini!">
								<img src="assets/imgIKM/sangatpuas1.png" class="img-emot">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 box_btn">
				<div class="bg-success box text-white">
					<div class="row kotak">
						<div class="col-md-6 text-res btn_text_">
							<br>
							<h5>CUKUP PUAS</h5>
						</div>
						<div class="col-md-4 btn_img_">
							<a href="<?= base_url('polling/2'); ?>" title="Jika Anda Merasa Cukup Puas dengan Pelayanan kami, Klik Icon ini!">
								<img src="assets/imgIKM/puas1.png" class="img-emot">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 box_btn">
				<div class="bg-danger box text-white">
					<div class="row kotak">
						<div class="col-md-6 text-res btn_text_">
							<br>
							<h5>KURANG PUAS</h5>
						</div>
						<div class="col-md-4 btn_img_">
							<a href="<?= base_url('polling/3'); ?>" title="Jika Anda Merasa Kurang Puas dengan Pelayanan kami, Klik Icon ini!">
								<img src="assets/imgIKM/kurangpuas1.png" class="img-emot">
							</a>
						</div>
					</div>
				</div>
			</div>

		</div><?php } ?>
	<!-- Akhir Row -->
	</div>
	<!-- Akhir Container -->
	<footer class="bg-danger text-center text-white mt-3 bt-2 pb-2">

		<br>
		<!-- Current Date -->
		<input style="text-align:center;" type="text" id="currentDate">
		<br><br>
		<script>
			var today = new Date();
			var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
			document.getElementById("currentDate").value = date;
		</script>
		<!-- Current Time -->
		<input style="text-align:center;" type="text" id="currentTime">
		<br><br>
		<script>
			var today = new Date();
			var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
			document.getElementById("currentTime").value = time;
		</script>

		<span>Copyright &copy; Polda Bali <?= date('Y'); ?></span>
	</footer>

</body>

</html>