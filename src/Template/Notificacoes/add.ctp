<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notificaco $notificaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Notificacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="notificacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($notificaco) ?>
    <fieldset>
        <legend><?= __('Add Notificaco') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('htmlText');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
