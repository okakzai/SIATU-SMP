<div id="container" class="box">
	<div id="intro">
    	<div id="intro-in">
        	<h2><?php echo anchor('log/out/'.$tipe,'Log Out');?></h2>
        	<p class="intro">
        		<div class='hompimenu'>
    				<ul>
						<li>
							<?php echo anchor('guru','Absensi','id="absensi"');?>
							<ul>
                				<li><?php echo anchor('guru/absensi/7A','7A');?></li>
                				<li><?php echo anchor('guru/absensi/7B','7B');?></li>
                				<li><?php echo anchor('guru/absensi/7C','7C');?></li>
                				<li><?php echo anchor('guru/absensi/7D','7D');?></li>
                				<li><?php echo anchor('guru/absensi/7E','7E');?></li>
                				<li><?php echo anchor('guru/absensi/7F','7F');?></li>
								<li><?php echo anchor('guru/absensi/7G','7G');?></li>
								<li><?php echo anchor('guru/absensi/7H','7H');?></li>
								<li><?php echo anchor('guru/absensi/8A','8A');?></li>
                				<li><?php echo anchor('guru/absensi/8B','8B');?></li>
                				<li><?php echo anchor('guru/absensi/8C','8C');?></li>
                				<li><?php echo anchor('guru/absensi/8D','8D');?></li>
                				<li><?php echo anchor('guru/absensi/8E','8E');?></li>
                				<li><?php echo anchor('guru/absensi/8F','8F');?></li>
								<li><?php echo anchor('guru/absensi/8G','8G');?></li>
								<li><?php echo anchor('guru/absensi/8H','8H');?></li>
								<li><?php echo anchor('guru/absensi/9A','9A');?></li>
                				<li><?php echo anchor('guru/absensi/9B','9B');?></li>
                				<li><?php echo anchor('guru/absensi/9C','9C');?></li>
                				<li><?php echo anchor('guru/absensi/9D','9D');?></li>
                				<li><?php echo anchor('guru/absensi/9E','9E');?></li>
                				<li><?php echo anchor('guru/absensi/9F','9F');?></li>
								<li><?php echo anchor('guru/absensi/9G','9G');?></li>
								<li><?php echo anchor('guru/absensi/9H','9H');?></li>
            				</ul>
            			</li>
						<li><?php echo anchor('guru/nilai','Nilai','id="nilai"');?></li>
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
		$('#guru').css('background','white');
		$('#guru').css('color','black');
	});
</script>