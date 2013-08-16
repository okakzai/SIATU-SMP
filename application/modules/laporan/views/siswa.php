<?php
	$kelas=array(
	'0'=>'Pilih Kelas:',
	'1'=>'7A',
	'2'=>'7B',
	'3'=>'7C',
	'4'=>'7D',
	'5'=>'7E',
	'6'=>'7F',
	'7'=>'7G',
	'8'=>'7H',
	
	'9'=>'8A',
	'10'=>'8B',
	'11'=>'8C',
	'12'=>'8D',
	'13'=>'8E',
	'14'=>'8F',
	'15'=>'8G',
	'16'=>'8H',
	
	'17'=>'9A',
	'18'=>'9B',
	'19'=>'9C',
	'20'=>'9D',
	'21'=>'9E',
	'22'=>'9F',
	'23'=>'9G',
	'24'=>'9H',
	
	'25'=>'Semua Kelas'
	);
	echo form_dropdown('combosiswa',$kelas,'0','id="combosiswa" style="font-size:10px;"');
?>
&nbsp;
<?php echo form_button('buttonsiswa','Tampilkan','id="buttonsiswa"');?>
<script>
	$('#siswa').css('background','white');
	$('#siswa').css('color','black');
</script>
