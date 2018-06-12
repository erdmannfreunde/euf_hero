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
 * @author     Richard Henkenjohann
 * @copyright  2016-2018 Erdmann & Freunde
 * @license    LICENSE LGPL-3.0
 * @filesource
 */

namespace ErdmannFreunde\ContaoHeroBundle\ContaoManager;


use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ErdmannFreunde\ContaoHeroBundle\ErdmannFreundeContaoHeroBundle;

class Plugin implements BundlePluginInterface
{

    /**
     * Gets a list of autoload configurations for this bundle.
     *
     * @param ParserInterface $parser
     *
     * @return ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ErdmannFreundeContaoHeroBundle::class)
                ->setLoadAfter(
                    [
                        ContaoCoreBundle::class
                    ]
                )
        ];
    }
}
