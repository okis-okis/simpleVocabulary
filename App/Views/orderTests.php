<div class="container mt-3">
    <h3 class="text-center">
        <?=$_SESSION['id']+1??null?> | 
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

                <?php if(isset($this->params['verbResult']) && $this->params['verbResult'] == 'is-valid'):?>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                <?php elseif(isset($this->params['verbResult']) && $this->params['verbResult'] == 'is-invalid'):?>
                    <div class="invalid-feedback">
                        Wrong answer!
                    </div>
                <?php endif;?>
                <button type="submit" class="btn btn-outline-primary m-1" name="hintVerb">Подсказка</button>  
                <?php if(isset($_POST['hintVerb'])):?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Right answer is <strong><?=$this->params['verb']??null?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif;?>       
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
            <?php if(isset($this->params['simpleResult']) && $this->params['simpleResult'] == 'is-valid'):?>
                <div class="valid-feedback">
                    Looks good!
                </div>
            <?php elseif(isset($this->params['simpleResult']) && $this->params['simpleResult'] == 'is-invalid'):?>
                <div class="invalid-feedback">
                    Wrong answer!
                </div>
            <?php endif;?>
            <button type="submit" class="btn btn-outline-primary m-1" name="hintSimple">Подсказка</button>  
            <?php if(isset($_POST['hintSimple'])):?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Right answer is <strong><?=$this->params['simple']??null?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif;?>
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
            <?php if(isset($this->params['participleResult']) && $this->params['participleResult'] == 'is-valid'):?>
                <div class="valid-feedback">
                    Looks good!
                </div>
            <?php elseif(isset($this->params['participleResult']) && $this->params['participleResult'] == 'is-invalid'):?>
                <div class="invalid-feedback">
                    Wrong answer!
                </div>
            <?php endif;?>
            <button type="submit" class="btn btn-outline-primary m-1" name="hintParticiple">Подсказка</button>  
            <?php if(isset($_POST['hintParticiple'])):?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Right answer is <strong><?=$this->params['participle']??null?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif;?>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary m-1" name="previous">Предыдущий</button>
            <button type="submit" class="btn btn-success m-1" name="check">Проверить</button>
            <button type="submit" class="btn btn-primary m-1" name="next">Следующий</button>
        </div>
    </form>
</div>