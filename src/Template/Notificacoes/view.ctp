<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notificaco $notificaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Notificaco'), ['action' => 'edit', $notificaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Notificaco'), ['action' => 'delete', $notificaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Notificacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notificaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="notificacoes view large-9 medium-8 columns content">
    <h3><?= h($notificaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($notificaco->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($notificaco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($notificaco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($notificaco->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('HtmlText') ?></h4>
        <?= $this->Text->autoParagraph(h($notificaco->htmlText)); ?>
    </div>
</div>
