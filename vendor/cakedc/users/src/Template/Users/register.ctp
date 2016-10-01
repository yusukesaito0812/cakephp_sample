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
                    <label for="name"class="label-required"class="label-required"><?= __('Username') ?></label>
                    <?php echo $this->Form->input('username', ['label' => false, 'class' => 'form-control register-form-text']); ?>
                    <label for="name"class="label-required"><?= __('Email') ?></label>
                    <?php echo $this->Form->input('email', ['label' => false, 'class' => 'form-control register-form-text']); ?>
                    <label for="name"class="label-required"><?= __('Password') ?></label>
                    <?php echo $this->Form->input('password', ['label' => false, 'class' => 'form-control register-form-text']); ?>
                    <label for="name"class="label-required"><?= __('Password (confirm)') ?></label>
                    <?php echo $this->Form->input('password_confirm', ['type' => 'password', 'label' => false, 'class' => 'form-control register-form-text']); ?>
                    <label for="name"class="label-required"><?= __('First Name') ?></label>
                    <?php echo $this->Form->input('first_name', ['label' => false, 'class' => 'form-control register-form-text']); ?>
                    <label for="name"class="label-required"><?= __('Last Name') ?></label>
                    <?php echo $this->Form->input('last_name', ['label' => false, 'class' => 'form-control register-form-text']); ?>
                    <label for="name"class="label-required"><?= __('Hospital') ?></label>
                    <?php echo $this->Form->input('hospital', ['label' => false, 'class' => 'form-control register-form-text']); ?>
                    <label for="name"class="label-required"><?= __('Ward') ?></label>
                    <?php echo $this->Form->input('ward', ['label' => false, 'class' => 'form-control register-form-text']); ?>
                    <label for="name"class="label-required"><?= __('Section') ?></label>
                    <?php echo $this->Form->input('section', ['label' => false, 'class' => 'form-control register-form-text']); ?>
                    <label for="name"class="label-required"><?= __('Occupation') ?></label>
                    <?php echo $this->Form->input('occupation', ['label' => false, 'class' => 'form-control register-form-text']); ?>
                    <?php
                    if (Configure::read('Users.Tos.required')) {
                        echo $this->Form->input('tos', ['type' => 'checkbox', 'label' => __d('CakeDC/Users', 'Accept TOS conditions?'), 'required' => true]);
                    }
                    if (Configure::read('Users.reCaptcha.registration')) {
                        echo $this->User->addReCaptcha();
                    }
                    ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__d('CakeDC/Users', 'Submit')) ?>
    <?= $this->Form->end() ?>
</div>
