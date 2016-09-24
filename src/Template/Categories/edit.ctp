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
                ['action' => 'delete', $category->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categories form col-md-10 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Edit Category') ?></legend>
            <table>
                <tr>
                    <th>
                        <label for="name"><?= __('Name') ?></label>
                    </th>
                    <td>
                        <?php
                        echo $this->Form->input('name', ['label' => false]);
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="is-show">Is Show</label>
                    </th>
                    <td>
                        <?php
                        echo '<input type="hidden" name="is_show" value="false" />';
                        echo $this->Form->input('is_show', ['type' => 'checkbox', 'label' => false]);
                        ?>
                    <style>
                        .checkbox input[type=checkbox]{
                            position:relative;
                            margin: 0;
                        }
                    </style>
                    </td>
                </tr>
            </table>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
