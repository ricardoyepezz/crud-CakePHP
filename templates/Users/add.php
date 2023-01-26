<div class="row p-5">
    <div class=" container col-6">
        <div class="page-header">
            <h2><?= __('Agregar Usuario') ?></h2>
        </div>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <?php
                echo $this->Form->control('first_name', ['label' => 'Nombre']); 
                echo $this->Form->control('last_name', ['label' => 'Apellido']);
                echo $this->Form->control('email');
                echo $this->Form->control('password', ['label' => 'Contraseña']);
/*              echo $this->Form->control('role',  ['options' => ['admin' => 'admin', 'user' => 'user'], 'label' => 'Rol']);
                echo $this->Form->control('active', ['label' => 'Activo']); */
            ?>
        </fieldset>
        <?= $this->Form->button(__('Enviar')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
