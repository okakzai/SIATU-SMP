<div id="container" class="box">
	<div id="intro">
    	<div id="intro-in">
        	<h2><?php echo anchor('log/out/'.$tipe,'Log Out');?></h2>
        	<p class="intro">
        		<div class='hompimenu'>
    				<ul>
						<li>
							<?php echo anchor('admin','Edit Data Siswa','id="editsiswa"');?>
							<ul>
								<li>
									<?php echo anchor('admin/siswa/7A','Kelas 7A');?>
									<?php echo anchor('admin/siswa/7B','Kelas 7B');?>
									<?php echo anchor('admin/siswa/7C','Kelas 7C');?>
									<?php echo anchor('admin/siswa/7D','Kelas 7D');?>
									<?php echo anchor('admin/siswa/7E','Kelas 7E');?>
									<?php echo anchor('admin/siswa/7F','Kelas 7F');?>
									<?php echo anchor('admin/siswa/7G','Kelas 7G');?>
									<?php echo anchor('admin/siswa/7H','Kelas 7H');?>
									<?php echo anchor('admin/siswa/7A','Kelas 8A');?>
									<?php echo anchor('admin/siswa/7B','Kelas 8B');?>
									<?php echo anchor('admin/siswa/7C','Kelas 8C');?>
									<?php echo anchor('admin/siswa/7D','Kelas 8D');?>
									<?php echo anchor('admin/siswa/7E','Kelas 8E');?>
									<?php echo anchor('admin/siswa/7F','Kelas 8F');?>
									<?php echo anchor('admin/siswa/7G','Kelas 8G');?>
									<?php echo anchor('admin/siswa/7H','Kelas 8H');?>
									<?php echo anchor('admin/siswa/7A','Kelas 9A');?>
									<?php echo anchor('admin/siswa/7B','Kelas 9B');?>
									<?php echo anchor('admin/siswa/7C','Kelas 9C');?>
									<?php echo anchor('admin/siswa/7D','Kelas 9D');?>
									<?php echo anchor('admin/siswa/7E','Kelas 9E');?>
									<?php echo anchor('admin/siswa/7F','Kelas 9F');?>
									<?php echo anchor('admin/siswa/7G','Kelas 9G');?>
									<?php echo anchor('admin/siswa/7H','Kelas 9H');?>
								</li>
							</ul>
						</li>
						<li>
							<?php echo anchor('admin/listguru','Edit Data Guru','id="editguru"');?>
							<ul>
								<li>
									<?php echo anchor('admin/inputguru','Input Data Guru');?>
								</li>
							</ul>
						</li>
						<li>
							<?php echo anchor('admin','Absensi','id="editabsensi"');?>
							<ul>
								<li>
									<?php echo anchor('admin/absensiguru','Absensi Guru');?>
									<?php echo anchor('admin/absensisiswa','Laporan Absensi Siswa');?>
									<?php echo anchor('admin/laporanguru','Laporan Absensi Guru');?>
								</li>
							</ul>
						</li>
						<li>
							<?php echo anchor('admin','Admin','id="editadmin"');?>
							<ul>
								<li>
									<?php echo anchor('admin/fotoadmin','Foto Admin');?>
									<?php echo anchor('admin/idadmin','ID Admin');?>
								</li>
							</ul>
						</li>
					</ul>
				</div>	
        	</p>
      	</div>
    </div>
	<div id="obsah" class="content box">
    	<div class="in">
			<?php 
      			if(!isset($subcontent)){ die();}
      			$this->load->view($subcontent);
			?>	
			<p class="subcontent"></p>
	  	</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.hompimenu li').hover(function() {
			$(this).children('ul').filter(':not(:animated)').slideDown(400);
		}, function() {
			$(this).children('ul').slideUp(400);
		});	
		$('#buttonabsensi').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
			var lapthn = $('#lapthn option:selected').text();
			var lapbln = $('#lapbln option:selected').val();
			if((lapthn=='Pilih Tahun:')||(lapbln=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/admin/tabelabsensi',    
					data: 'thn='+lapthn+'&bln='+lapbln,   
					success: function (absensi){                 
						$('.subcontent').html(absensi);
					}	  
				});
			}
		});	
		$('#buttonguru').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
			var lapthn = $('#lapthn option:selected').text();
			var lapbln = $('#lapbln option:selected').val();
			if((lapthn=='Pilih Tahun:')||(lapbln=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/admin/tabelguru',    
					data: 'thn='+lapthn+'&bln='+lapbln,   
					success: function (absensi){                 
						$('.subcontent').html(absensi);
					}	  
				});
			}
		});
		$('#admin').css('background','white');
		$('#admin').css('color','black');
	});
</script>