<style>
.card-list{
    display: none;
}

@media(max-width: 600px) {
  .table-list{
    display: none;
  }
  .card-list{
    display: block;
  }
}
</style>

<div class="container mt-3 text-center">
    <a class="btn btn-primary mb-3" href="/tests/order" role="button">Тестирование по порядку</a>

    <table class="table table-striped table-list">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">VERB</th>
            <th scope="col">PAST SIMPLE</th>
            <th scope="col">PAST PARTICIPLE</th>
            <th scope="col">ПЕРЕВОД</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->params[0] as $key=>$values):?>
            <tr>
            <th scope="row"><?=$key?></th>
            <td><?= $values['verb']?></td>
            <td><?= $values['simple']?></td>
            <td><?= $values['participle']?></td>
            <td><?= $values['translate']?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    <div class="card-list">
        <?php foreach($this->params[0] as $key=>$values):?>
            <div class="mb-3 card">
                <div class="card-header bg-primary text-white">
                    <?= $key.' | '.$values['translate']?>
                </div>
                <div class="card-body">
                    <p>VERB: <?= $values['verb']?></p>
                    <p>PAST SIMPLE: <?= $values['simple']?></p>
                    <p>PAST PARTICIPLE: <?= $values['participle']?></p>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>