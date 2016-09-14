<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Questionnaires'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="questionnaires form large-9 medium-8 columns content">
    <?= $this->Form->create($questionnaire) ?>
    <fieldset>
        <legend><?= __('Add Questionnaire') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('contents');
            echo $this->Form->input('created_at', ['empty' => true]);
            echo $this->Form->input('updated_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
