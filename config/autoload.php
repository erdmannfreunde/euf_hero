<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'ContentHero' => 'system/modules/euf_hero/elements/ContentHero.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_hero' => 'system/modules/euf_hero/templates',
));
