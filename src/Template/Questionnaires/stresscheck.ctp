<div id="content">
    <div class="row">
        <div class="columns col-md-12 intro">
            <h2 class="notification">
                ストレスチェックを始めます.該当する項目にチェックしてください.
            </h2>
        </div>
        <div class="columns col-md-10 col-md-offset-1 checks">
            <form role="form" method="POST" action="/questionnaires/score">
                <table>
                <?php $count = 1; ?>
                <?php foreach ($questionnaires as $questionnaire): ?>
                <?php echo '<input type="hidden" name=questionnaire_list['. $questionnaire->id .']'.' value="'.$questionnaire->id.'">' ?>
                
                    <?php if($count % 10 == 1){ ?>
                        <tr class="category_header">
                            <th>
                                <h3><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;<?= h($questionnaire->category->name); ?></h3>
                            </th>
                            <td>
                                そうだ
                            </td>
                            <td>
                                まあ<br>そうだ
                            </td>
                            <td>
                                やや<br>ちがう
                            </td>
                            <td>
                                ちがう
                            </td>
                        </tr>
                    <?php } ?>
                        <tr class="questionnaire_row">
                        <th>
                        <p class="success"><?php echo 'Q' . $count . '.'; ?>&nbsp;&nbsp;<?= h($questionnaire->contents); ?></p>
                        </th>
                        <td>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="answer_list[<?php echo $questionnaire->id . "]" ?>" value="1" data-radiocheck-toggle="radio" required>
                            </label>
                        </td>
                        <td>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="answer_list[<?php echo $questionnaire->id . "]" ?>" value="2" data-radiocheck-toggle="radio" required>
                            </label>
                        </td>
                        <td>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="answer_list[<?php echo $questionnaire->id . "]" ?>" value="3" data-radiocheck-toggle="radio" required>
                            </label>
                        </td>
                        <td>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="answer_list[<?php echo $questionnaire->id . "]" ?>" value="4" data-radiocheck-toggle="radio" required>
                            </label>
                        </td>
                        </tr>
                    <?php $count++; ?>
                <?php endforeach; ?>
                </table>
                <div class="columns col-md-12 submit_form">
                    <button type="submit" class="btn btn-sm btn-primary">回答を送信する</button>
                    <p class="btn btn-sm btn-primary checker">自動チェックボタン</p>
                    <?= $this->Html->script('checker') ?>
                </div>
            </form>
        </div>
    </div>
</div>