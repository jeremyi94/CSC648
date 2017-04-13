<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <div class="panel">
        <h2 class="text-center">Please Register</h2>
        <?php
            echo $this->Form->input('last_name');
            echo $this->Form->input('first_name');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('screen_name');
            echo $this->Form->input('is_admin');
            echo $this->Form->input('is_seller');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>