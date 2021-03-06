<?php

########################################################################
# Extension Manager/Repository config file for ext: "sf_tv2fluidge"
#
# Auto generated by Extension Builder 2013-10-21
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TemplaVoila to Fluid/Grid Elements',
	'description' => 'Backend module with tools that can be helpful when migration from Templavoila to Fluidtemplate and Grid Elements',
	'category' => 'module',
	'author' => 'Torben Hansen',
	'author_email' => 'derhansen@gmail.com',
	'author_company' => 'Skyfillers GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.4.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5.0-6.2.99',
			'templavoila' => '1.8.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>