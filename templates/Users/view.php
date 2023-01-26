<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center py-5">Perfil</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Modificado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $user->first_name ?></td>
                        <td><?= $user->last_name ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->role ?></td>
                        <td><?= $user->created->nice() ?></td>
                        <td><?= $user->modified->nice() ?></td>
                        <td>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $user->id], ['class' => 'btn btn-secondary']) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>