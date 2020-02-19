<!doctype html>
<html lang="en">

<head>
	<title><?php echo $judul; ?></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">

</head>

<body class="p-5 container-fluid">

	<div id="soal" class="show">
		<hr class="my-2">
		<div class="h1 d-flex justify-content-center font-weight-bold">
			<p>
				Selamat Mengerjakan
			</p>
		</div>
		<?php
		echo validation_errors();
		echo form_open('asoy/koreksi');
		?>
		<input type="hidden" name="nama_tes" value="tes_1">
		<div class="row">
			<?php
			foreach ($soal->result_array() as $d) {
				$soal = json_decode($d['soal']);
				?>
				<div class="card mb-2 m-1 col-8 h5 col-md-3 mx-auto">
					<div class="card-body">
						<table class="table table-borderless text-center grey lighten-4">
							<tr class="border-top">
								<td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_1; ?></td>
								<td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_2; ?></td>
								<td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_3; ?></td>
								<td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_4; ?></td>
							</tr>
							<tr class="border-bottom">
								<td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_5; ?></td>
								<td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_6; ?></td>
								<td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_7; ?></td>
								<td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_8; ?></td>

							</tr>
						</table>
					</div>
					<div class="card-footer">
						<input type="hidden" name="id_soal[]" value="<?php echo $d['id_soal']; ?>">
						<div class="btn-group-toggle row d-flex justify-content-center" data-toggle="buttons">
							<label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded">0
								<input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="0" id="">
							</label>
							<label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded">1
								<input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="1" id="">
							</label>
							<label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded">2
								<input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="2" id="">
							</label>
							<label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded">3
								<input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="3" id="">
							</label>
							<label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded">4
								<input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="4" id="">
							</label>

						</div>
					</div>


				</div>

			<?php } ?>
		</div>
		<hr>
		<div class="d-flex justify-content-center">
			<button type="submit" id="submit" class="btn btn-primary">Tes Selanjutnya</button>
		</div>
		<?php
		echo form_close();

		?>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
