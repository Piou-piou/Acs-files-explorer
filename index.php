<?php include("explorer.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Files explorer</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<h1>Files Explorer</h1>

		<div id="ajax">
			<?php foreach($dirs as $dir):?>
				<?php if (is_dir($base_url.$dir)){?>
					<?php if ($dir == "..") {?>
						<div>
							<a href="index.php"><?=$dir?></a><br>
						</div>
					<?php } else {?>
						<div>
							<?php if (isset($_GET['dossier'])) {?>
								<a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><?=$dir?></a><br>
							<?php } else {?>
								<a href="index.php?dossier=<?=$dir?>/"><?=$dir?></a><br>
							<?php }?>
						</div>
					<?php }?>
				<?php } else {?>
					<div>
						<p><?=$dir;?></p>
					</div>
				<?php }?>
			<?php endforeach;?>
		</div>
		
		
		<script>
			$(document).ready(function() {
			    $(document).on("click", "div a", function(e) {
			        e.preventDefault();
			        
			        var adresse = $(this).attr("href").split("?");
			        var dossier = adresse[1];
			        
			        console.log(dossier);
			        
			        $.ajax({
			            method: "GET",
				        data: dossier,
				        url: "get_file_ajax.php",
				        success: function(data) {
			                $("#ajax").html(data);
				        }
			        });
			    });
			});
		</script>
	</body>
</html>