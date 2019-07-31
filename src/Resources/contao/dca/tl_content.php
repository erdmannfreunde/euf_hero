<?php

/**
 * * This file is part of ErdmannFreunde/euf_hero.
 *
 * (c) 2016-2018 Erdmann & Freunde.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    euf_hero
 * @author     Dennis Erdmann
 * @author     Richard Henkenjohann
 * @copyright  2016-2018 Erdmann & Freunde
 * @license    LICENSE LGPL-3.0
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addText';

$GLOBALS['TL_DCA']['tl_content']['palettes']['hero'] = '{type_legend},type,headline;'
                                                       . '{text_legend},addText;'
                                                       . '{image_legend},addImage;'
                                                       . '{link_primary_legend},urlPrimary,targetPrimary,linkTitlePrimary,titleTextPrimary,relPrimary,linkClassPrimary;'
                                                       . '{link_secondary_legend},urlSecondary,targetSecondary,linkTitleSecondary,titleTextSecondary,relSecondary,linkClassSecondary;'
                                                       . '{template_legend:hide},customTpl;'
                                                       . '{protected_legend:hide},protected;'
                                                       . '{expert_legend:hide},guests,cssID,space;'
                                                       . '{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addText'] = 'text';

$GLOBALS['TL_DCA']['tl_content']['fields']['urlPrimary'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['url'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'dcaPicker'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['targetPrimary'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['target'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['titleTextPrimary'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['titleText'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['linkTitlePrimary'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['linkTitle'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['relPrimary'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['rel'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['linkClassPrimary'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_content']['linkClass'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['urlSecondary'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['url'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'dcaPicker'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['targetSecondary'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['target'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['titleTextSecondary'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['titleText'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['linkTitleSecondary'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['linkTitle'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['relSecondary'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['rel'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['linkClassSecondary'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_content']['linkClass'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['addText'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_content']['addText'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);
