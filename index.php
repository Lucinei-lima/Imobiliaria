<?php
require_once 'Controller/UsuarioController.php';
require_once 'Controller/ImovelController.php';
require_once 'header.php';


if(isset($_GET['page'])){
    if($_GET['page'] == 'usuario'){
        if(isset($_GET['action'])){
            if($_GET['action'] == 'editar'){
                $usuario = call_user_func(array('UsuarioController','editar'),$_GET['id']);
                require_once 'view/cadUsuario.php';
            }
        
            if($_GET['action'] == 'listar'){
                require_once 'view/listUsuario.php';
            }
        
            if($_GET['action'] == 'excluir'){
                $usuario = call_user_func(array('UsuarioController','excluir'),$_GET['id']);
                require_once 'view/listUsuario.php';
        
            }
        else{
            require_once 'view/listUsuario.php';
            } 
        }
    }   
}
  
if(isset($_GET['page'])){
    if($_GET['page'] == 'imovel'){
        if(isset($_GET['action'])){
            if($_GET['action'] == 'editar'){
                $usuario = call_user_func(array('UsuarioController','editar'),$_GET['id']);
                require_once 'view/listImovel.php';
            }
        
            if($_GET['action'] == 'listar'){
                require_once 'view/listImovel.php';
            }
        
            if($_GET['action'] == 'excluir'){
                $usuario = call_user_func(array('UsuarioController','excluir'),$_GET['id']);
                require_once 'view/listImovel.php';
        
            }
        else{
            require_once 'view/listImovel.php';
            } 
        }
    }    
}

require_once 'footer.php';
?>
<!DOCTYPE html>
<html>
    <body>
    <h1>Tela principal da Imobiliaria</h1>
        <div>
            <button><a href="index.php?page=Usuario">Usuario</a></button>
            <button><a href="index.php?page=Imovel">Imovel</a></button>
            <button><a href="index.php?page=listUsuario&action=listar">Listar usuario</a></button>
            <button><a href="index.php?page=listImovel&action=listar">Listar Imovel</a></button>
        </div>
        
        <p>Encontre seu imovel ideal</p>
        
         
    </body>
</html>