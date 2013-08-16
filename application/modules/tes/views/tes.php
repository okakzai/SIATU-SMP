<div id="container" class="box">
	<div id="intro">
		<div id="intro-in">
        	<h2>Form Tes</h2>
		</div>
    </div>
	<div id="obsah" class="content box">
		<?php echo form_open_multipart('tes/simpan');?>
		<table class="form">
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
          		<td>Foto</td>
          		<td>
          			<input type="file" name="userfile" size="20" />
          		</td>
				<td style="color:red;">
					<?php if(isset($error)) echo $error;?>
				</td>
          	</tr>
			<tr>
          		<td valign="top"></td>
          		<td><?php echo form_submit('submit','Daftar')?></td>
          	</tr>
		</table>
		<?php echo form_close()?>  
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tes').css('background','white');
		$('#tes').css('color','black');
	});
</script>