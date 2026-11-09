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
        <?php if (empty($this->items)) : ?>
            <p><?php echo Text::_('COM_PROJETOS_EMPTY'); ?></p>
        <?php else : ?>
            <ul class="com-projetos__items">
                <?php foreach ($this->items as $item) : ?>
                    <li class="com-projetos__item">
                        <article>
                            <h3><?php echo htmlspecialchars($item->title, ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p><?php echo htmlspecialchars($item->category, ENT_QUOTES, 'UTF-8'); ?></p>
                            <p><?php echo nl2br(htmlspecialchars($item->description, ENT_QUOTES, 'UTF-8')); ?></p>
                            <?php
                            $url = trim((string) $item->github_url);
                            $parts = parse_url($url);
                            $valid = $parts !== false
                                && strtolower($parts['scheme'] ?? '') === 'https'
                                && strtolower($parts['host'] ?? '') === 'github.com';
                            ?>
                            <?php if ($valid) : ?>
                                <a href="<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo Text::_('COM_PROJETOS_GITHUB_LINK'); ?>
                                </a>
                            <?php endif; ?>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>
</main>
