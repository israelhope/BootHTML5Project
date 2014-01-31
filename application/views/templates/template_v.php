<!doctype html>
<!--[if lt IE 7]>      <html lang="<?= $lang ?>" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="<?= $lang ?>" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="<?= $lang ?>" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?= $lang ?>" class="no-js"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<title><?=$SYS_metaTitle?></title>
	<meta name="description"     content="<?= $SYS_metaDescription; ?>">
	<meta name="keywords" content="<?= implode(', ', $SYS_metaKeywords) ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
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
    <?php $this->load->view('google/analytics_v') ?>
</body>
</html>