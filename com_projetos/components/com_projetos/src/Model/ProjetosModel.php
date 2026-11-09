<?php

namespace Gabriel\Component\Projetos\Site\Model;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\Model\ListModel;

class ProjetosModel extends ListModel
{
    protected function getListQuery()
    {
        $db = $this->getDatabase();
        $query = $db->getQuery(true);

        return $query
            ->select($db->quoteName(['id', 'title', 'category', 'description', 'github_url']))
            ->from($db->quoteName('#__projetos'))
            ->where($db->quoteName('state') . ' = 1')
            ->order($db->quoteName('title') . ' ASC')
            ->order($db->quoteName('id') . ' ASC');
    }
}
