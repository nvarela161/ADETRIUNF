<?php
session_start();

if (!empty($_POST)) {
    if (empty($_POST['login']) || empty($_POST['pass'])) {
        echo '<div class="alert alert-danger">Todos los campos son necesarios</div>';
    } else {
        require_once 'conexion.php';

        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $sql = 'SELECT * FROM usuarios AS u INNER JOIN rol AS r ON u.rol = r.rol_id WHERE u.usuario = ?';
        $query = $pdo->prepare($sql);
        $query->execute([$login]);

        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($query->rowCount() > 0) {
            if (password_verify($pass, $result['clave'])) {
                $_SESSION['active'] = true;
                $_SESSION['id_usuario'] = $result['usuario_id'];
                $_SESSION['nombre'] = $result['usuario'];
                $_SESSION['rol'] = $result['rol_id'];
                $_SESSION['nombre_rol'] = $result['nombre_rol'];

                echo '<div class="alert alert-success">Login exitoso. Redirigiendo...</div>';
            } else {
                echo '<div class="alert alert-danger">Usuario o clave incorrecto</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Usuario o claves incorrectos</div>';
        }
    }
}
