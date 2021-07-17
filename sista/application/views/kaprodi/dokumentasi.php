<?php if ($users) { ?>
	<table class="table">
		<thead>
			<tr>
				<td>Nama</td>
				<td>Judul Skripsi</td>
				<td>Proposal</td>
				<td>Skripsi</td>
				<td>Nilai</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users->result() as $u) { ?>
				<td>
					<?= $u->Nama ?>
				</td>
				<td>
					<?= $u->JudulSkripsi  ?>
				</td>
				<td>
					<?= anchor('ControllerGlobal/downloadFile/Proposal/' . $u->FileProposal, '<i class="fas fa-download"></i>') ?>
				</td>
				<td>
					<?= anchor('ControllerGlobal/downloadFile/Skripsi/' . $u->FileSkripsi, '<i class="fas fa-download"></i>') ?>
				</td>
				<td>
					<?= $u->Nilai ?>
				</td>
			<?php } ?>
		</tbody>
	</table>
<?php } else { ?>
	<div class="card card-outline-secondary container">
		<div class='row align-items-cente m-5'>
			<div class="col-md mb-5">
				<h2> Dokumentasi Tidak Ditemukan </h2>
				Mohon maaf saat ini tidak ditemukan dokumentasi untuk konsentrasi ini.
			</div>
			<div class="col-md-3">
				<img src="<?= base_url('assets/web/sad.jpg') ?>">
			</div>
		</div>
	</div>
<?php } ?>