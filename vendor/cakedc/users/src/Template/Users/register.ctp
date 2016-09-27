<?php
/**
 * Copyright 2010 - 2015, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2015, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
use Cake\Core\Configure;
?>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user); ?>
    <fieldset>
        <legend><?= __d('CakeDC/Users', 'Add User') ?></legend>
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
                    <label for="name"><?= __('Password') ?></label>
                </th>
                <td>
                    <?php
                    echo $this->Form->input('password', ['label' => false]);
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="name"><?= __('Password (confirm)') ?></label>
                </th>
                <td>
                    <?php
                    echo $this->Form->input('password_confirm', ['type' => 'password', 'label' => false]);
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
                    <label for="name">利用規約への同意</label>
                </th>
                <td>
                    <?php
                    if (Configure::read('Users.Tos.required')) {
                        echo $this->Form->input('tos', ['type' => 'checkbox', 'label' => __d('CakeDC/Users', 'Accept TOS conditions?'), 'required' => true]);
                    }
                    if (Configure::read('Users.reCaptcha.registration')) {
                        echo $this->User->addReCaptcha();
                    }
                    ?>
                </td>
            </tr>
        </table>
    </fieldset>
    <?= $this->Form->button(__d('CakeDC/Users', 'Submit')) ?>
    <?= $this->Form->end() ?>
</div>
