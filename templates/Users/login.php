

<div class="container col-md-6 p-5">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <h2 class="mb-4 text-center">Ingrese sus datos</h2>
        <div class="mb-3">
            <?= $this->Form->input('email', ['class' => 'form-control']) ?>
        </div>
        <div class="mb-3">
        <?= $this->Form->input('password', ['class' => 'form-control']) ?>
        </div>
    </fieldset>
    <div class="row justify-content-center">
        <div class="col-4">
            <?= $this->Form->button(__('Acceder'), ['class' => 'btn btn-success']); ?>
        </div>
        <div class="col-4">
            <?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>
</div>


