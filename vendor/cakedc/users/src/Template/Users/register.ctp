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
<div class="users form col-md-6 col-md-offset-3">
    <?= $this->Form->create($user); ?>
    <fieldset>
        <div class="sign-up">
        <h1 class="sign-up-title"><?= __d('CakeDC/Users', 'Add User') ?></h1>
                    <label for="name" class="required-label" class="required-label"><?= __('Username') ?></label>
                    <?php echo $this->Form->input('username', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => 'ログインの時に必要になります']); ?>
                    <label for="name" class="required-label"><?= __('Email') ?></label>
                    <?php echo $this->Form->input('email', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => '例）××××@example.com']); ?>
                    <label for="name" class="required-label"><?= __('Password') ?></label>
                    <?php echo $this->Form->input('password', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => '8文字以上','minlength' => '8']); ?>
                    <label for="name" class="required-label"><?= __('Password (confirm)') ?></label>
                    <?php echo $this->Form->input('password_confirm', ['type' => 'password', 'label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => 'もう一度パスワードを入力してください']); ?>
                    <label for="name" class="required-label"><?= __('First Name') ?></label>
                    <?php echo $this->Form->input('first_name', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => '例）山田']); ?>
                    <label for="name" class="required-label"><?= __('Last Name') ?></label>
                    <?php echo $this->Form->input('last_name', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => '例）花子']); ?>
                    <label for="name" class="required-label"><?= __('Hospital') ?></label>
                    <?php echo $this->Form->input('hospital', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => '例）○○総合病院']); ?>
                    <label for="name" class="required-label"><?= __('Ward') ?></label>
                    <?php echo $this->Form->input('ward', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => '例）3B病棟']); ?>
                    <label for="name" class="required-label"><?= __('Section') ?></label>
                    <?php echo $this->Form->input('section', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => '例）内科/外科']); ?>
                    <label for="name" class="required-label"><?= __('Occupation') ?></label>
                    <?php echo $this->Form->input('occupation', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => '例）看護師/作業療法士']); ?>
                    <?php
                    if (Configure::read('Users.Tos.required')) {
                        echo $this->Form->input('tos', ['type' => 'checkbox', 'label' => __d('CakeDC/Users', 'Accept TOS conditions?'), 'required' => true]);
                    }
                    if (Configure::read('Users.reCaptcha.registration')) {
                        echo $this->User->addReCaptcha();
                    }
                    ?>
    <?= $this->Form->button(__d('CakeDC/Users', 'Submit'),['class' => 'btn btn-block btn-lg btn-primary']) ?>
    <?= $this->Form->end() ?>
        </div>
    </fieldset>
</div>
