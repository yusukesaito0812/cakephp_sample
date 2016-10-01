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
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <div class="sign-up">
        <h1 class="sign-up-title">ログイン</h1>
                    <label for="name""><?= __('Username') ?></label>
                    <?php echo $this->Form->input('username', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => '']); ?>
                    <label for="name"><?= __('Password') ?></label>
                    <?php echo $this->Form->input('password', ['label' => false, 'class' => 'form-control', 'label' => false,'placeholder' => '','minlength' => '8']); ?>
        <?php
        if (Configure::read('Users.reCaptcha.login')) {
            echo $this->User->addReCaptcha();
        }
        if (Configure::read('Users.RememberMe.active')) {
            echo $this->Form->input(Configure::read('Users.Key.Data.rememberMe'), [
                'type' => 'checkbox',
                'label' => __d('CakeDC/Users', 'Remember me'),
                'checked' => 'checked',
                'class' => 'remember_me',
            ]);
        }
        ?>
            <?php
            $registrationActive = Configure::read('Users.Registration.active');
            if ($registrationActive) {
                echo $this->Html->link(__d('CakeDC/Users', 'Register'), ['action' => 'register']);
            }
            if (Configure::read('Users.Email.required')) {
                if ($registrationActive) {
                    echo ' | ';
                }
                echo $this->Html->link(__d('CakeDC/Users', 'Reset Password'), ['action' => 'requestResetPassword']);
            }
            ?>
    <?= implode(' ', $this->User->socialLoginList()); ?>
    <?= $this->Form->button(__d('CakeDC/Users', 'Login'),['class' => 'btn btn-block btn-lg btn-primary']); ?>
    <?= $this->Form->end() ?>
        </div>
    </fieldset>
</div>
