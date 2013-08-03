<div id="container" class="box">
	<div id="intro">
      	<div id="intro-in">
        	<h2>Pengisian Data Siswa</h2>
        	<p class="intro">Form pendaftaran ini hanya untuk siswa. Harap mengisi data dengan sejujur-jujurnya dan lengkap.</p>
      	</div>
    </div> 
    <div id="obsah" class="content box">
    	<div class="in">
			<center>
				<img src="C:\wamp\www\siatusmp\asset\img\kop.png" width="70%">
			</center>
			<div class="user_info_header">
				<H2>Formulir Pendaftaran Siswa Baru</H2>
			</div>
			<div class="user_info">
			<table>
				<tr>
					<td rowspan=15><img src="C:\wamp\www\siatusmp\asset\img\psb\<?php echo $user_info['foto']?>" width="30%" height="30%"></td>				
					<td><strong>NIS</strong></td><td><strong>:</strong></td><td><?php echo $user_info['nis']?></td>			
				</tr>
				<?php if($user_info['nisn'])
				echo'
				<tr>
					<td><strong>NISN</strong></td><td><strong>:</strong></td><td>'.$user_info['nisn'].'</td>
				</tr>'
				?>
				<tr>
					<td><strong>Nama Lengkap</strong></td><td><strong>:</strong></td><td><?php echo $user_info['nama']?></td>
				</tr>
				<tr>
					<td><strong>Jenis Kelamin</strong></td><td><strong>:</strong></td><td><?php echo $user_info['gender']?></td>
				</tr>
				<tr>
					<td><strong>Tempat Lahir</strong></td><td><strong>:</strong></td><td><?php echo $user_info['tempat_lahir']?></td>
				</tr>
				<tr>
					<td><strong>Tanggal Lahir</strong></td><td><strong>:</strong></td><td><?php echo $user_info['tgl_lahir']?></td>
				</tr>
				<tr>
					<td><strong>Agama</strong></td><td><strong>:</strong></td><td><?php echo $user_info['agama']?></td>
				</tr>
				<tr>
					<td><strong>Nama Ayah</strong></td><td><strong>:</strong></td><td><?php echo $user_info['nama_ayah']?></td>
				</tr>
				<tr>
					<td><strong>Pekerjaan Ayah</strong></td><td><strong>:</strong></td><td><?php echo $user_info['kerja_ayah']?></td>
				</tr>
				<tr>
					<td><strong>Nama Ibu</strong></td><td><strong>:</strong></td><td><?php echo $user_info['nama_ibu']?></td>
				</tr>
				<tr>
					<td><strong>Pekerjaan Ibu</strong></td><td><strong>:</strong></td><td><?php echo $user_info['kerja_ibu']?></td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td><td><strong>:</strong></td><td><?php echo $user_info['alamat']?></td>
				</tr>
				<tr>
					<td><strong>Nilai UN SD</strong></td><td><strong>:</strong></td><td><?php echo $user_info['unsd']?></td>
				</tr>
				<tr>
					<td><strong>Kelas</strong></td><td><strong>:</strong></td><td><?php echo $user_info['kelas']?></td>
				</tr>
				<?php if($user_info['ket'])
				echo'
				<tr>
					<td><strong>Keterangan</strong></td><td><strong>:</strong></td><td>'.$user_info['ket'].'</td>
				</tr>'
				?>
			</table>
			</div>
			<div class="pdf_download">
				<?php echo $link_download?>
			</div>   
      	</div>
    </div>
</div>
