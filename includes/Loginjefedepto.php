<?php

if(!empty($_POST)){
    if(empty($_POST['login']) || empty($_POST['pass'])){
        echo '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"></button> Todos los campos son necesarios</div>';
    }else {
        require_once ' conexion.php';
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $sql = 'SELECT * FROM usuarios as u INNER JOIN rol as r ON a.rol = r.rol_id WHERE u.usuario = ?';
        $query = $pdo->prepare($sql);
        $query->execute(array($Login));
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($query->rowCount() > 0){
            if(password_verify($pass, $result['clave'])) {
            $_SESSION['active'] = true;
            $_SESSION['id_usuario'] = $result['usuario_id'];
            $_SESSION['nombre'] = $result['usuario'];
            $_SESSION['rol'] = $result['rol_id'];
            $_SESSION['nombre_rol'] = $result['nombre_rol'];

            echo '<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert"></button>redirecting</div>';
        }else {
                echo '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"></button>Usuario o clave incorrecto</div>';
        
        }
        } else {
            echo '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"></button>Usuario o claves incorrectos</div>';


        }
        

     }
}