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

use ErdmannFreunde\ContaoHeroBundle\Content\Hero;


/**
 * EuF Hero ContentElement
 */
array_insert(
    $GLOBALS['TL_CTE']['media'],
    4,
    [
        'hero' => Hero::class
    ]
);
