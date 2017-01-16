<?php include("explorer.php");?>

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