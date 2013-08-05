<?php
	$now=date("Y");
	$thn['#']='Pilih Tahun:';
	for($n=2009; $n<=$now+17; $n++){$thn[$n]=$n;}
	echo form_dropdown('lapthn',$thn,set_value('thn'),'id="lapthn" style="font-size:10px;"');
?>
&nbsp;
<?php
	$bln=array('#'=>'Pilih Bulan:','1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
	echo form_dropdown('lapbln',$bln,set_value('bln'),'id="lapbln" style="font-size:10px;"');
?> 
&nbsp;
<?php
	$kelas=array('#'=>'Pilih Kelas:',
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
	'24'=>'9H'
	);
	echo form_dropdown('lapbln',$kelas,set_value('kelas'),'id="lapkelas" style="font-size:10px;"');
?>  
<?php echo form_button('button','Tampilkan','id="buttonabsensi"');?> 
<script>
	$(document).ready(function(){
		$('#buttonabsensi').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
			var lapthn = $('#lapthn option:selected').text();
			var lapbln = $('#lapbln option:selected').val();
			var lapkelas = $('#lapkelas option:selected').val();
			if((lapthn=='Pilih Tahun:')||(lapbln=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?echo site_url();?>/laporan/tabelabsensi',    
					data: 'thn='+lapthn+'&bln='+lapbln+'&kelas='+lapkelas,   
					success: function (absensi){                 
						$('.subcontent').html(absensi);
					}	  
				});
			}
		});
		$('#absensi').css('background','white');
		$('#absensi').css('color','black');
	});
</script>