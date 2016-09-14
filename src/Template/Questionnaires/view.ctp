<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questionnaire'), ['action' => 'edit', $questionnaire->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questionnaire'), ['action' => 'delete', $questionnaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionnaire->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questionnaires'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionnaire'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionnaires view large-9 medium-8 columns content">
    <h3><?= h($questionnaire->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionnaire->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($questionnaire->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($questionnaire->updated_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Title') ?></h4>
        <?= $this->Text->autoParagraph(h($questionnaire->title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Contents') ?></h4>
        <?= $this->Text->autoParagraph(h($questionnaire->contents)); ?>
    </div>
</div>
