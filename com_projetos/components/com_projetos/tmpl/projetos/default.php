<?php

\defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

?>

<main class="com-projetos" id="projetos">
    <header class="com-projetos__header">
        <h1><?php echo Text::_('COM_PROJETOS_PAGE_TITLE'); ?></h1>
        <p><?php echo Text::_('COM_PROJETOS_PAGE_INTRO'); ?></p>
    </header>
    <section class="com-projetos__list" aria-labelledby="projetos-lista-titulo">
        <h2 id="projetos-lista-titulo"><?php echo Text::_('COM_PROJETOS_LIST_TITLE'); ?></h2>
        <p><?php echo Text::_('COM_PROJETOS_EMPTY'); ?></p>
    </section>
</main>
