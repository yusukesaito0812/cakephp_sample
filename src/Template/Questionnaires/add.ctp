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
        <li><?= $this->Html->link(__('List Questionnaires'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="questionnaires form col-md-10 columns content">
    <?= $this->Form->create($questionnaire) ?>
    <fieldset>
        <legend><?= __('Add Questionnaire') ?></legend>
        <table>
            <tr>
                <th>
                    <label for="name"><?= __('contents') ?></label>
                </th>
                <td>
                    <?php
                    echo $this->Form->input('contents', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="is-show"><?= __('Categories') ?></label>
                </th>
                <td>
                    <?php
                    echo $this->Form->input('category_id', [
                        'label' => 'カテゴリ',
                        'options' => $categories,
                        'type' => 'select',
                        'label' => false
                    ]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('contents') ?></label>
                </th>
                <td>
                    <?php
                    echo $this->Form->input('point_rate', ['type' => 'float', 'label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('is_show') ?></label>
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
