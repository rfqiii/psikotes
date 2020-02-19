<div class="container mt-3">


	<div class="row mx-auto">
		<div class="form-group form-inline">

			<input type="text" onkeyup="cari_nama()" class="form-control" name="" id="posSearch" aria-describedby="helpId" placeholder="Cari...">
			<select class="form-control form-inline" name="" id="kategori">
				<option value="0">ID Psikotes</option>
				<option value="1">Nomor Peserta</option>
				<option value="2">Nama Peserta</option>
				<option value="4">Nomor Telepon</option>
				<option value="5">Bulan</option>
			</select>
		</div>
	</div>
	<div class="row mx-auto">

		<div class="form-group text-center" style="width: 70px;">
			<label for="">Hari</label>
			<select class="form-control" name="" id="hari" required>
				<option value=""></option>
				<?php
				for ($i = 1; $i <= 31; $i++) {
					if ($i < 10) {
						echo '<option value="0' . $i . '">0' . $i . '</option>';
					} else {
						echo '<option value="' . $i . '">' . $i . '</option>';
					}
				}
				?>
			</select>

		</div>
		<div class="form-group text-center" style="width: 110px;">
			<label for="">
				Bulan
			</label>
			<select class="form-control" name="" id="bulan" required>
				<option value=""></option>
				<?php
				$_bulan = array(
					'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
				);
				foreach ($_bulan as $bulan) {
					echo '<option value="' . $bulan . '">' . $bulan . '</option>';
				}
				?>
			</select>
		</div>
		<div class="form-group text-center" style="width: 90px;">
			<label for="">Tahun</label>
			<select class="form-control" name="" id="tahun" required>
				<option value=""></option>
				<?php
				for ($i = 2000; $i <= 2025; $i++) {
					echo '<option value="' . $i . '">' . $i . '</option>';
				}
				?>
			</select>

		</div>
		<div class="form-group">
			<label class="fade" for="">Cari</label>
			<button type="submit" onclick="cari_tgl()" class="btn btn-primary form-control"><i class="fa fa-search" aria-hidden="true"></i></button>
		</div>

		<div id="tes">

		</div>
	</div>


	<table id="table" class="table display table-bordered bg-white table-hover">

		<thead class="text-center">

			<tr role="row">
				<th>ID Psikotes</th>
				<th>Nomor Peserta</th>
				<th>Nama Peserta</th>
				<th>Jenis Kelamin</th>
				<!-- <th>Tanggal Lahir</th> -->
				<th>No. Telepon</th>
				<th>Tanggal Psikotes</th>
				<th>Score</th>
				<th>Benar</th>
				<th>Salah</th>
			</tr>
		</thead>
		<tbody id="posTable">
			<?php
			foreach ($peserta->result_array() as $d) {

			?>
				<tr>
					<td><?php echo $d['id_psikotes']; ?></td>
					<td><?php echo $d['nomor_peserta']; ?></td>
					<td class="pr-1"><?php echo $d['nama']; ?><span class="pull-right btn btn-primary text-white py-0"><a class="text-white" href="<?php echo base_url(); ?>dashboard/peserta"><i class="fa fa-search" aria-hidden="true"></i></a></span></td>
					<td><?php echo $d['kelamin']; ?></td>
					<!-- <td><?php //echo date('d F Y', strtotime($d['tgl_lahir'])); 
								?></td> -->
					<td><?php echo $d['nomor_telepon']; ?></td>
					<td id="tgl"><?php echo date('d F Y', strtotime($d['tgl_tes'])); ?></td>
					<td><?php echo $d['score']; ?></td>
					<td></td>
					<td></td>
				</tr>
			<?php

			}
			?>
		</tbody>

	</table>
</div>
