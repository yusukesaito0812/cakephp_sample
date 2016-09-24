<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">メニュー</li>
        <li><a href="/users"><?= __('users') ?></a></li>
        <li><a href="/questionnaires"><?= __('questionnaires') ?></a></li>
        <li><a href="/categories"><?= __('categories') ?></a></li>
        <li><a href="/answers"><?= __('answers') ?></a></li>
    </ul>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questionnaire'), ['action' => 'edit', $questionnaire->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questionnaire'), ['action' => 'delete', $questionnaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionnaire->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questionnaires'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionnaire'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionnaires view col-md-10 columns content">
    <h3><?= h($questionnaire->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionnaire->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contents') ?></th>
            <td><?= h($questionnaire->contents) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($questionnaire->category->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('point_rate') ?></th>
            <td><?= h($questionnaire->point_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('is_show') ?></th>
            <td><?= h($questionnaire->is_show) ?></td>
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
</div>
