<html>
	<head>
		<title>www.template.gov</title>
		<meta charset="utf-8"/>
		<link href="includes/style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="main">
			<div id="header">
				<div id="logo">
					<div id="logo_text">
						<h1><a href="index.php">Template</a></h1>
						<h2>Template PHP para sites de organizações</h2>
					</div>
				</div>
				<div id="menubar">
					<ul id="menu">
						<li <?php if($page==1){ echo 'class="selected"'; } ?>><a href="index.php">Menu</a></li>
						<li <?php if($page==2){ echo 'class="selected"'; } ?>><a href="outros.php">Outros</a></li>
					</ul>
				</div>
			</div>
			<div id="site_content">
				<div class="sidebar">
					<h3>Painel te.te.te</h3>
					<h4>Lorem ipsum</h4>
					<h5>dolor sit amet</h5>
					<p>O rato roeu a roupa do rei de roma.</p>
				</div>
				<div id="content">