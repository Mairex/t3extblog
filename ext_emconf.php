<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3extblog".
 *
 * Auto generated 18-02-2014 01:36
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'T3Blog Extbase',
	'description' => 'A flexible blog extension powered by Extbase / Fluid which aims to replace t3blog.',
	'category' => 'plugin',
	'author' => 'Felix Nagel',
	'author_email' => 'info@felixnagel.com',
	'author_company' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.1.1-dev',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.0.0-6.2.99',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
			't3blog' => '',
		),
		'suggests' => array(
			'dd_googlesitemap' => '2.0.0-2.0.99',
		),
	),
);

?>