<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Aqui você salvaria os dados no banco (exemplo com array simulado)
    file_put_contents("usuarios.txt", "$usuario:$senha\n", FILE_APPEND);
    
    echo "Usuário cadastrado com sucesso! <a href='login.php'>Faça login</a>.";
}
?>
