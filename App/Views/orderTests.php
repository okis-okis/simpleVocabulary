<div class="container mt-3">
    <h3 class="text-center">
        <?=$this->params['translate']??null?>
    </h3>
    <form action="/tests/order" method="post">
        <div class="form-group">
            <label for="verb">VERB</label>
            <input
              type="text"
              class="form-control <?=$this->params['verbResult']??null?>"
              id="verb"
              placeholder="Enter verb form"
              name='verb'
              value='<?=$_POST['verb']??null?>'
              autocomplete="off"
            />
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Wrong answer!
            </div>
        </div>
        <div class="form-group">
            <label for="simple">PAST SIMPLE</label>
            <input
              type="text"
              class="form-control <?= $this->params['simpleResult']??null?>"
              id="simple"
              placeholder="Enter past simple form"
              name='simple'
              value='<?=$_POST['simple']??null?>'
              autocomplete="off"
            />
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Wrong answer!
            </div>
        </div>
        <div class="form-group">
            <label for="participle">PAST PARTICIPLE</label>
            <input
              type="text"
              class="form-control <?= $this->params['participleResult']??null?>"
              id="participle"
              placeholder="Enter past participle form"
              name='participle'
              value='<?=$_POST['participle']??null?>'
              autocomplete="off"
            />
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Wrong answer!
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary m-1" name="previous">Предыдущий</button>
            <button type="submit" class="btn btn-success m-1" name="check">Проверить</button>
            <button type="submit" class="btn btn-primary m-1" name="next">Следующий</button>
        </div>
    </form>
</div>