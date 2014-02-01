<?php if(empty($og['og:site_name'])) 	$og['og:site_name'] = $SYS_siteName;?>
<?php if(empty($og['og:title'])) 		$og['og:title'] = $SYS_metaTitle;?>
<?php if(empty($og['og:description'])) 	$og['og:description'] = $SYS_metaDescription;?>
<?php foreach ($og as $property => $content):?>
	<?php if(is_array($content)): ?>
		<?php foreach($content as $value): ?>
			<?php if (!empty($value)): ?>
				<meta property="<?= $property?>" content="<?= $value?>" />
			<?php endif ?>
		<?php endforeach; ?>
	<?php elseif(!empty($content)): ?>
		<meta property="<?= $property?>" content="<?= $content?>" />
	<?php endif; ?>
<?php endforeach; ?>