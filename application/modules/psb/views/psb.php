<div id="container" class="box">
	<div id="intro">
      	<div id="intro-in">
        	<h2>Pengisian Data Siswa</h2>
        	<p class="intro">Form pendaftaran ini hanya untuk siswa. Harap mengisi data dengan sejujur-jujurnya dan lengkap.</p>
      	</div>
    </div>
    <div id="obsah" class="content box">
      	<div class="in">
        	<?php echo form_open_multipart('psb/simpan');?>
          	<table class="form">
          		<tr>
          			<td>NIS</td>
          			<td>
          				<?php
          					$count=19106+($row-721);
          					$nis=array('value'=>$count,'name'=>'nis','readonly'=>'readonly','style'=>'color:blue;text-align:left'); 
          					echo form_input($nis);
						?>
          			</td>
          		</tr>
          		<tr>
          			<td>NISN (Bila Ada)</td>
          			<td>
						<?php 
          					$nisn=array('name'=>'nisn','value'=>set_value('nisn'));
          					echo form_input($nisn);
          				?>          		
          			</td>
          		</tr>
          		<tr>
          			<td>Nama Lengkap</td>
          			<td>
          				<?php 
          					$nama=array('name'=>'nama','value'=>set_value('nama'));
          					echo form_input($nama);
          				?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('nama'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Jenis Kelamin</td>
          			<td>
          				<?php
							$gender=array('#'=>'Pilih Jenis Kelamin:','1'=>'Laki-laki','2'=>'Perempuan');
							echo form_dropdown('gender',$gender,set_value('gender'),'id="gender"');
						?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('gender'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Tempat Lahir</td>
          			<td>
          				<?php 
          					$tempat_lahir=array('name'=>'tempat_lahir','value'=>set_value('tempat_lahir'));
          					echo form_input($tempat_lahir);
          				?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('tempat_lahir'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Tanggal Lahir</td>
          			<td>
						<?php
							$tgl['#']='Pilih Tanggal:';
							for($n=1; $n<=31; $n++){$tgl[$n]=$n;}
							echo form_dropdown('tgl',$tgl,set_value('tgl'),'id="tgl"');
						?>
						&nbsp;
						<?php
          					$bln=array('#'=>'Pilih Bulan:','1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
							echo form_dropdown('bln',$bln,set_value('bln'),'id="bln"');
						?>
						&nbsp;
						<?php
          					$now=date("Y");
							$thn['#']='Pilih Tahun:';
							for($n=1990; $n<=$now; $n++){$thn[$n]=$n;}
							echo form_dropdown('thn',$thn,set_value('thn'),'id="thn"');
						?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('tgl'); ?><br>
						<?php echo form_error('bln'); ?><br>
						<?php echo form_error('thn'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Agama</td>
          			<td>
          				<?php
							$agama=array('#'=>'Pilih Agama:','1'=>'Islam','2'=>'Kristen','3'=>'Katolik','4'=>'Hindu','5'=>'Budha','6'=>'Kong Hu Cu');
							echo form_dropdown('agama',$agama,set_value('agama'),'id="agama"');
						?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('agama'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Nama Ayah</td>
          			<td>
          				<?php 
          					$nama_ayah=array('name'=>'nama_ayah','value'=>set_value('nama_ayah'));
          					echo form_input($nama_ayah);
          				?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('nama_ayah'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Pekerjaan Ayah</td>
          			<td>
          				<?php 
          					$kerja_ayah=array('name'=>'kerja_ayah','value'=>set_value('kerja_ayah'));
          					echo form_input($kerja_ayah);
          				?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('kerja_ayah'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Nama Ibu</td>
          			<td>
          				<?php 
          					$nama_ibu=array('name'=>'nama_ibu','value'=>set_value('nama_ibu'));
          					echo form_input($nama_ibu);
          				?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('nama_ibu'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Pekerjaan Ibu</td>
          			<td>
          				<?php 
          					$kerja_ibu=array('name'=>'kerja_ibu','value'=>set_value('kerja_ibu'));
          					echo form_input($kerja_ibu);
          				?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('kerja_ibu'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Alamat</td>
          			<td>
          				<?php 
          					$alamat=array('name'=>'alamat','value'=>set_value('alamat'));
          					echo form_input($alamat);
          				?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('alamat'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Nilai UN SD</td>
          			<td>
          				<?php 
          					$unsd=array('name'=>'unsd','value'=>set_value('unsd'));
          					echo form_input($unsd);
          				?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('unsd'); ?>
					</td>
          		</tr>
				<tr>
          			<td>Kelas</td>
          			<td>
          				<?php
          					$kelas=array(
								'#'=>'Pilih Kelas:',
								'1'=>'7A','2'=>'7B','3'=>'7C','4'=>'7D','5'=>'7E','6'=>'7F','7'=>'7G','8'=>'7H',
								'9'=>'8A','10'=>'8B','11'=>'8C','12'=>'8D','13'=>'8E','14'=>'8F','15'=>'8G','16'=>'8H',
								'17'=>'9A','18'=>'9B','19'=>'9C','20'=>'9D','21'=>'9E','22'=>'9F','23'=>'9G','24'=>'9H'
							);
							echo form_dropdown('kelas',$kelas,set_value('kelas'),'id="kelas"');
						?>
          			</td>
					<td style="color:red;">
						<?php echo form_error('kelas'); ?>
					</td>
          		</tr>
          		<tr>
          			<td>Keterangan (Bila Ada)</td>
          			<td><?php echo form_textarea('ket');?></td>
          		</tr>
				<tr>
          			<td>Foto</td>
          			<td><input type="file" name="userfile" size="20" /></td>
					<td style="color:red;">
						<?php if(isset($error)) echo $error;?>
					</td>
          		</tr>
          		<tr>
          			<td></td>
          			<td><?php echo form_submit('submit','Daftar')?></td>
          		</tr>
          	</table>        
          	<?php echo form_close()?>        
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#psb').css('background','white');
		$('#psb').css('color','black');
	});
</script>