
    <div id="content">
        <div class="row">
            <div class="columns large-12 intro">
                <h2 class="btn btn-warning">
                    ストレスチェックを始めます.該当する項目にチェックしてください.
                </h2>
            </div>

            <div class="columns large-12 checks">
                <form role="form">
                    <h4>Environment</h4>
                    <?php foreach ($questionnaires as $questionnaire): ?>
                    <div class="box">
                        <p class="success"><?php $questionnaire->contents ?></p>
                        <div class="form-group">
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                そうだ
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                まあそうだ
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                ややちがう
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                ちがう
                            </label>
                        </div>
                    </div>

                    <hr>
                    
                    <?php endforeach; ?>
                    <div class="box">
                        <p class="success">Your version of PHP is 5.5.9 or higher.</p>
                        <div class="form-group">
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                そうだ
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                まあそうだ
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                ややちがう
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                ちがう
                            </label>
                        </div>
                    </div>

                    <hr>
                    
                    <div class="box">
                        <p class="success">Your version of PHP is 5.5.9 or higher.</p>
                        <div class="form-group">
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                そうだ
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                まあそうだ
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                ややちがう
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                ちがう
                            </label>
                        </div>
                    </div>

                    <hr>
                    
                    <div class="box">
                        <p class="success">Your version of PHP is 5.5.9 or higher.</p>
                        <div class="form-group">
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                そうだ
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                まあそうだ
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                ややちがう
                            </label>
                            <label class="radio">
                                <input type="radio" data-toggle="radio" name="radios" value="0" data-radiocheck-toggle="radio" required>
                                ちがう
                            </label>
                        </div>
                    </div>

                    <hr>
                    
                    <div class="columns large-12 submit_form">
                        <button type="submit" class="btn btn-sm btn-primary">回答を送信する</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>
