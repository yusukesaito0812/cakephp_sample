<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Questionnaire'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionnaires index col-md-10 columns content">
    <h3><?= __('Questionnaires') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contents') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questionnaires as $questionnaire): ?>
            <tr>
                <td><?= $this->Number->format($questionnaire->id) ?></td>
                <td><?= h($questionnaire->contents) ?></td>
                <td><?= h($questionnaire->category->name) ?></td>
                <td><?= h($questionnaire->created_at) ?></td>
                <td><?= h($questionnaire->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $questionnaire->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionnaire->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questionnaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionnaire->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
