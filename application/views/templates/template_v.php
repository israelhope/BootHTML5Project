<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<title><?=$SYS_metaTitle?></title>
	<meta name="description"     content="<?= $SYS_metaDescription; ?>">
	<meta name="keywords" content="<?= implode(', ', $SYS_metaKeywords) ?>">
	<?php if ($SYS_index == TRUE): ?>
		<meta name="robots" content="index, follow" >
	<?php else: ?>
		<meta name="robots" content="noindex">
	<?php endif ?>
	<?php foreach ($SYS_css as $file): ?>
    	<link rel="stylesheet" href="<?= site_url(FOLDER_CSS.$file)?>">
    <?php endforeach ?>
</head>
<body>
	
	<?php foreach ($SYS_js as $file): ?>
    	<script type="text/javascript" src="<?= site_url(FOLDER_JS.$file)?>" ></script>
    <?php endforeach ?>
</body>
</html>