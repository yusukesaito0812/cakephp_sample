<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $questionnaire->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $questionnaire->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Questionnaires'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="questionnaires form col-md-10 columns content">
    <?= $this->Form->create($questionnaire) ?>
    <fieldset>
        <legend><?= __('Edit Questionnaire') ?></legend>
        <?php
            echo $this->Form->input('contents');
            echo $this->Form->input('created_at', ['empty' => true]);
            echo $this->Form->input('updated_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
