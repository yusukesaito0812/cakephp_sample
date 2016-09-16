<div id="content">
    <div class="row">
        <div class="columns large-12 intro">
            <h2 class="notification">
                ストレスチェックを始めます.該当する項目にチェックしてください.
            </h2>
        </div>
        <div class="columns large-12 checks">
            <form role="form" method="POST" action="/questionnaires/score">
                <h3>対人関係</h3>
                <?php $count=1; ?>
                <?php foreach ($questionnaires as $questionnaire): ?>
                <div class="box">
                    <p class="success"><?php echo 'Q'.$count.'.'; ?><?= h($questionnaire->contents); ?></p>
                    <div class="form-group">
                        <label class="radio">
                            <input type="radio" data-toggle="radio" name="radios-<?= h($questionnaire->id); ?>" value="1" data-radiocheck-toggle="radio" required>
                            そうだ
                        </label>
                        <label class="radio">
                            <input type="radio" data-toggle="radio" name="radios-<?= h($questionnaire->id); ?>" value="2" data-radiocheck-toggle="radio" required>
                            まあそうだ
                        </label>
                        <label class="radio">
                            <input type="radio" data-toggle="radio" name="radios-<?= h($questionnaire->id); ?>" value="3" data-radiocheck-toggle="radio" required>
                            ややちがう
                        </label>
                        <label class="radio">
                            <input type="radio" data-toggle="radio" name="radios-<?= h($questionnaire->id); ?>" value="4" data-radiocheck-toggle="radio" required>
                            ちがう
                        </label>
                    </div>
                </div>

                <hr>

                <?php $count++; ?>
                <?php if($count==5){ 
                 break;   
                }?>
                <?php endforeach; ?>
                <div class="columns large-12 submit_form">
                    <button type="submit" class="btn btn-sm btn-primary">回答を送信する</button>
                </div>
            </form>
        </div>
    </div>
</div>