<?php
/*
Plugin Name: tabla_ordenes
Plugin URL: --
Description: Este plugin muestra la tabla de pedidos
Version: 1.0
Author: Nicolas Orecchia
Author URL: --
*/

function Activar() {
        
}

function Desactivar() {

}

function Borrar() {

}


register_activation_hook(__FILE__, "Activar");
register_activation_hook(__FILE__, "Desactivar");
register_uninstall_hook(__FILE__, "Borrar");

add_action('admin_menu', 'CrearMenu');

function CrearMenu(){
    add_menu_page(
        'Mostrar Ventas',
        'Ventas',
        'manage_options',
        plugin_dir_path(__FILE__).'lista_ordenes.php',
        null,
        '',
        '1'
    );
}

function MostrarContenido() {
    echo "<h1>Contenido</h1>";
}

