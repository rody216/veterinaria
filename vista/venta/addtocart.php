<?php
/*
* Agrega el producto a la variable de sesion de productos.
*/
session_start();
if(!empty($_POST)){
	if(isset($_POST["id_prod"])  && isset($_POST["canti"]) && isset($_POST["stock"]) ){
		// si es el primer producto simplemente lo agregamos
		if(empty($_SESSION["carts"])){
			$_SESSION["carts"]=array( array("id_prod"=>$_POST["id_prod"], "canti"=>$_POST["canti"],"stock"=>$_POST["stock"]));
		}else{
			// apartie del segundo producto:
			$carts = $_SESSION["carts"];
			$repeated = false;
			// recorremos el carrito en busqueda de producto repetido
			foreach ($carts as $c) {
				// si el producto esta repetido rompemos el ciclo
				if($c["id_prod"]==$_POST["id_prod"]){
					$repeated=true;
					break;
				}
			}
			// si el producto es repetido no hacemos nada, simplemente redirigimos
			if($repeated){
				print "<script>alert('Error: Producto Repetido!');</script>";
			}else{
				// si el producto no esta repetido entonces lo agregamos a la variable cart y despues asignamos la variable cart a la variable de sesion
				array_push($carts, array("id_prod"=>$_POST["id_prod"],"canti"=> $_POST["canti"],"stock"=> $_POST["stock"]));
				$_SESSION["carts"] = $carts;
			}
		}
		print "<script>window.location='nuevo';</script>";
	}
}

?>

