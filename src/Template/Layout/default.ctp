<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('reset') ?>
    <?= $this->Html->css('main') ?>
                
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <!-- Loading Bootstrap -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Loading Flat UI -->
    
    <?= $this->Html->css('../js/Flat-UI/dist/css/vendor/bootstrap/css/bootstrap.min') ?>
    <?= $this->Html->css('../js/Flat-UI/dist/css/flat-ui') ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
        <?= $this->Html->script('Flat-UI/dist/js/html5shiv') ?>
        <?= $this->Html->script('Flat-UI/dist/js/respond.min') ?>
    <![endif]-->
    
    <!-- Loading ChartJS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.js"></script>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="preview-html">
            <div id="logomenu">
                <?= $this->Html->image('logo.png') ?>
            </div>
            <div id="navmenu">
                <ul>
                    <li class="active"><a href="/"><span><i class="fa fa-fw fa-home"></i> ホーム</span></a></li>
                    <li><a href="#"><span><i class="fa fa-fw fa-heart"></i> ストレスチェック</span></a></li>
                    <li><a href="#"><span><i class="fa fa-fw fa-user"></i> マイページ</span></a></li>
                    <li><a href="#"><span><i class="fa fa-fw fa-building"></i> 会社概要</span></a></li>
                </ul>
            </div>
    </div>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <div id="footer-bottom">
            <div class="inner-footer">
                <div id="footer-left">
                    <div class="left">
                        © 2016 NURSE RECURREGE
                        <a href="#">ホーム</a>
                        <a href="#">ストレスチェック</a>
                        <a href="#">会社概要</a>
                    </div>
                    <a href="" class="footerCopyright">LOGOを貼る <strong id="nurserecurrege"><span>NURSE RECURREGE</span></strong></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </footer>
    
<?= $this->Html->script('Flat-UI/dist/js/vendor/jquery.min') ?>
<?= $this->Html->script('Flat-UI/dist/js/vendor/video') ?>
<?= $this->Html->script('Flat-UI/dist/js/flat-ui.min') ?>
<?= $this->Html->script('Flat-UI/docs/assets/js/application') ?>
</body>
</html>
