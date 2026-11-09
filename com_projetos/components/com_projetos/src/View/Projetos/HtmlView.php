<?php

namespace Gabriel\Component\Projetos\Site\View\Projetos;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

class HtmlView extends BaseHtmlView
{
    protected array $items = [];

    public function display($tpl = null)
    {
        $this->items = $this->getModel()->getItems();

        return parent::display($tpl);
    }
}
