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
        <table>
            <tr>
                <th>
                    <label for="name"><?= __('Username') ?></label>
                </th>
                <td>
                    <?php
            echo $this->Form->input('username', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('Email') ?></label>
                </th>
                <td>
                    <?php
            echo $this->Form->input('email', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('First Name') ?></label>
                </th>
                <td>
                    <?php
            echo $this->Form->input('first_name', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('Last Name') ?></label>
                </th>
                <td>
                    <?php
            echo $this->Form->input('last_name', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('Hospital') ?></label>
                </th>
                <td>
                    <?php
            echo $this->Form->input('hospital', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('Ward') ?></label>
                </th>
                <td>
                    <?php
            echo $this->Form->input('ward', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('Section') ?></label>
                </th>
                <td>
                    <?php
            echo $this->Form->input('section', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('Occupation') ?></label>
                </th>
                <td>
                    <?php
            echo $this->Form->input('occupation', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('Active') ?></label>
                </th>
                <td>
                    <?php
            echo $this->Form->input('active', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('Role') ?></label>
                </th>
                <td>
                    <?php
            echo $this->Form->input('role', ['label' => false]);
                    ?>
                </td>
            </tr>
        </table>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
