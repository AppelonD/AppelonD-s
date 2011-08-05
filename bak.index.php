<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/default.css" type="text/css" />
</head>
<body>
	<div id=pos>
		<header id=banner></header>
	<div id=nav>
		<nav id=breadcrumbs>Home > </nav>
		<nav id=nav_main>Home | About Me</nav>
		<aside>
			<h4>
				This is the aside bar
			</h4>
			<p>Nullam venenatis gravida orci. Curabitur lorem risus, sagittis vitae, 
				accumsan a, iaculis id, metus. Aenean scelerisque metus eget sem. 
				Pellentesque convallis dolor vel libero. Nam consectetuer mollis dolor. 
				Mauris et pede. Aliquam justo lectus, iaculis a, auctor sed, congue in,
			</p>
		</aside>
	</div>
	<div id=main>
		<article>
			<section>
				<h2>This is the section of an article</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
					Fusce consectetuer tellus ut nisl. Nulla sed lacus. Phasellus at purus sed purus cursus iaculis. 
					In hac habitasse platea dictumst. Praesent aliquet, neque pretium congue mattis, ipsum augue dignissim ante, 
					ac pretium nisl lectus at magna. Donec ut purus. Suspendisse potenti. Curabitur tincidunt tellus nec purus. 
					Mauris et pede. Quisque dictum quam vel neque. Suspendisse potenti. Aenean justo ipsum, luctus ut, volutpat 
					laoreet, vehicula in, libero. Aenean scelerisque metus eget sem. Cras ac enim vel dui vestibulum suscipit. 
					Sed non ipsum. Quisque arcu ante, cursus in, ornare quis, viverra ut, justo. Praesent semper, neque vel condimentum 
					hendrerit, lectus elit pretium ligula, nec consequat nisl velit at dui. Phasellus auctor enim eget sem. 
					Praesent a eros. 
				</p>
			</section>
		</article>
	</div>
	<footer>OpenSource is the answer to all human problems</footer>
	</div>
	<div id=cool>
		<div id=fedora><img src="images/Logo_fedoralogo.png" alt="Fedora Logo"></img></div>
		<div id=python><img src="images/python-logo-master-v3-TM.png" alt="Python Logo"></img></div>
	</div>
</body>
</html>