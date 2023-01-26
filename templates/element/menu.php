<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            
            <?php if(isset($current_user)) : ?>
                <uf class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <?= $this->Html->link('Home', ['controller' => 'Users', 'action' => 'home'], ['class' => 'nav-link active']) ?>
                </li>
                <li>
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Usuario: <?= $current_user['role'] ?></a>
                </li>
            <?php if($current_user['role'] == 'admin') : ?>
                
                <li class="nav-item">
                    <?= $this->Html->link('Usuarios', ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link active']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link('Nuevo Usuario', ['controller' => 'Users', 'action' => 'add'], ['class' => 'nav-link active']) ?>
                </li>
            </ul>
            <?php endif; ?>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <?= $this->Html->link('Cerrar Sesión', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link active']) ?>
                </li>
            </ul>
            <?php else : ?>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add'], ['class' => 'nav-link active']) ?>
                </li>
            <?php endif; ?>
        </div>
    </div>
</nav>