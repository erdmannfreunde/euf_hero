<?php

/**
 * * This file is part of ErdmannFreunde/euf_contact.
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


$GLOBALS['TL_DCA']['tl_content']['palettes']['hero'] = '{type_legend},type,headline;'
                                                       . '{text_legend},text;'
                                                       . '{image_legend},addImage;'
                                                       . '{template_legend:hide},customTpl;'
                                                       . '{protected_legend:hide},protected;'
                                                       . '{expert_legend:hide},guests,cssID,space;'
                                                       . '{invisible_legend:hide},invisible,start,stop';
