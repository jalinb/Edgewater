<?php
/*
defined( '_JEXEC' ) or die( 'Restricted access' );

require_once( dirname(__FILE__).'/helper.php' );

$doc =& JFactory::getDocument();

$NewsArticlesParams = modNewsArticles::getData($params);

$doc->addStyleSheet(JURI::base(true) . 'modules/mod_newsarticles/tmpl/style.css', 'text/css' );


require( JModuleHelper::getLayoutPath( 'mod_newsarticles' ) );


*/
?>


<?php
/**
 * Hello World! Module Entry Point
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://dev.joomla.org/component/option,com_jd-wiki/Itemid,31/id,tutorials:modules/
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );
 
 
$doc = JFactory::getDocument();
$BoatNewsParams = modBoatNews::getData2($params);
$doc->addStyleSheet(JURI::base(true) . 'modules/mod_boatnews/tmpl/style.css', 'text/css' );
require( JModuleHelper::getLayoutPath( 'mod_boatnews' ) );


?>