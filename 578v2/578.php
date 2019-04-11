<!DOCTYPE html>
<?php

	$url_host = 'http://'.$_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
	
	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);

	if (!class_exists('lessc')) {
		$dir_block = dirname($_SERVER['SCRIPT_FILENAME']);		
		require_once($dir_block.'/libs/lessc.inc.php');
	}
	
	$less = new lessc;
	$less->compileFile('less/578.less', 'css/578.css');
	
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>578</title>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/578.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo $url_path ?>/js/swiperr.min.js"></script>
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js" ></script>
    </head>

    <body>
    <?php include $dir_block.'/5781-content.php'; ?>
    </body>

</html>


