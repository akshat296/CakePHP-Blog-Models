<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Add Conatct') ?></legend>
        <?php
            echo $this->Form->control('name');
             echo $this->Form->control('subject');
            echo $this->Form->control('enquiry',['height'=>'200px']);
          //  echo $this->Form->control('enquiry');
          // echo $this->Form->input('name',[ 'options' => $categories]);
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enquiry')) ?>
    <?= $this->Form->end() ?>
</div>
