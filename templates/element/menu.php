<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <?= $this->Html->link('Usuarios', ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link active']) ?>
                </li>

                <li class="nav-item">
                    <?= $this->Html->link('Nuevo Usuario', ['controller' => 'Users', 'action' => 'add'], ['class' => 'nav-link active']) ?>
                </li>


            </ul>

        </div>
    </div>
</nav>