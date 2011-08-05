<?php
/**
 * @version    $Id: index.php
 * @package    Joomla.Site
 * @subpackage  tpl_ht5live
 * @copyright  Copyright (C) 2011 Dennis Appelon Nielsen, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

JHTML::_('behavior.framework', true);
$app = JFactory::getApplication();
?>

<?php echo '<!DOCTYPE html>'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
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
    <div id=breadcrumbs>
      <jdoc:include type="modules" name="breadcrumbs_top" />    
    </div>

    <nav id=nav_main>
      <jdoc:include type="modules" name="nav_main_top"/>    
    </nav>
    
    <aside id=right>
      <jdoc:include type="modules" name="nav_right"/>
    </aside>
  </div>
  <div id=main>
    <article>
      <jdoc:include type="component" />
      <jdoc:include type="message" />
    </article>
  </div>
  <footer><jdoc:include type="modules" name="footer" /></footer>
  </div>
  
  <div id=cool>
    <div id=googleplus><jdoc:include type="modules" name="googleplus" /></div>
    <div id=fedora><jdoc:include type="modules" name="fedora" /></div>
    <div id=python><jdoc:include type="modules" name="python"/></div>
    
  </div>
</body>
</html>
