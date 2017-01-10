<?php include("explorer.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Files explorer</title>
	</head>
	<body>
		<h1>Files Explorer</h1>

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
	</body>
</html>