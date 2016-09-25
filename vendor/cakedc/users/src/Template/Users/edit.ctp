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
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $Users->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $Users->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form col-md-10 columns content">
    <?= $this->Form->create($Users) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('hospital');
            echo $this->Form->input('ward');
            echo $this->Form->input('section');
            echo $this->Form->input('occupation');
            echo $this->Form->input('active');
            echo $this->Form->input('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
