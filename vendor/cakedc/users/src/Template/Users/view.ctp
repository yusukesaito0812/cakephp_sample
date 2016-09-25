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
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $Users->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $Users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $Users->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view col-md-10 columns content">
    <h3><?= h($Users->username) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($Users->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($Users->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($Users->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($Users->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($Users->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hospital') ?></th>
            <td><?= h($Users->hospital) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ward') ?></th>
            <td><?= h($Users->ward) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Section') ?></th>
            <td><?= h($Users->section) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation') ?></th>
            <td><?= h($Users->occupation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($Users->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activation Date') ?></th>
            <td><?= h($Users->activation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($Users->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($Users->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $Users->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Superuser') ?></th>
            <td><?= $Users->is_superuser ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
