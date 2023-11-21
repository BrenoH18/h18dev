<header>
    <div class="header">
        <a href="../index.php?id=<?php echo $user_data['id']?>" class="logo">H18 Dev.</a>
        <a href="../backend/sair.php" class="icon-sair">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
        </a>
    </div>
    <nav class="navbar">
        <a href="../templates/compras.php?=id<?php echo $user_data['id']?>" class="icon-compras">Compra de Produtos</a>
        <a href="../templates/vendas.php?=id<?php echo $user_data['id']?>" class="icon-vendas">Venda de Produtos</a>
        <a href="../templates/estoque.php?id=<?php echo $user_data['id']?>&tipo=todos" class="icon-estoque">Estoque de Produtos</a>
        <a href="../templates/cadastro-empresas.php?id=<?php echo $user_data['id']?>&tipo=todos" class="icon-estoque">Cadastro de Empresas</a>
    </nav>
</header>