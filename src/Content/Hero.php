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

namespace ErdmannFreunde\ContaoHeroBundle\Content;

use Contao\Config;
use Contao\ContentElement;
use Contao\FilesModel;
use Contao\StringUtil;
use Contao\Validator;

class Hero extends ContentElement
{

    /**
     * Template
     *
     * @var string
     */
    protected $strTemplate = 'ce_hero';

    /**
     * Generate the content element
     */
    protected function compile()
    {
        /** @var \PageModel $objPage */
        global $objPage;

        // Clean the RTE output
        if ('xhtml' === $objPage->outputFormat) {
            $this->text = StringUtil::toXhtml($this->text);
        } else {
            $this->text = StringUtil::toHtml5($this->text);
        }

        // Add the static files URL to images
        if (TL_FILES_URL) {
            $path       = Config::get('uploadPath') . '/';
            $this->text = str_replace(' src="' . $path, ' src="' . TL_FILES_URL . $path, $this->text);
        }

        $this->Template->text     = StringUtil::encodeEmail($this->text);
        $this->Template->addImage = false;

        // Add an image
        if ($this->addImage && $this->singleSRC) {
            $objModel = FilesModel::findByUuid($this->singleSRC);

            if ($objModel === null) {
                if (!Validator::isUuid($this->singleSRC)) {
                    $this->Template->text = '<p class="error">' . $GLOBALS['TL_LANG']['ERR']['version2format'] . '</p>';
                }
            } elseif (is_file(TL_ROOT . '/' . $objModel->path)) {
                $this->singleSRC = $objModel->path;
                static::addImageToTemplate($this->Template, $this->arrData, null, null, $objModel);
            }
        }

        $this->Template->targetPrimary = '';
        $this->Template->relPrimary = '';
        $this->Template->targetSecondary = '';
        $this->Template->relSecondary = '';
        
        // Override the link target
        if ($this->targetPrimary)
        {
            $this->Template->targetPrimary = ' target="_blank"';
            $this->Template->relPrimary = ' rel="noreferrer noopener"';
        }
        
        if ($this->targetSecondary)
        {
            $this->Template->targetSecondary = ' target="_blank"';
            $this->Template->relSecondary = ' rel="noreferrer noopener"';
        }
    }
}
