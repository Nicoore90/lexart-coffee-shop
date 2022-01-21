<?php 
    global $wpdb;
    $query = "SELECT * FROM wp_wc_order_stats WHERE MONTH(date_created) = MONTH(CURDATE())";
    $lista_ordenes = $wpdb->get_results($query,ARRAY_A);
    $queryTotal = "SELECT * FROM wp_wc_order_stats";
    $lista_total = $wpdb->get_results($queryTotal,ARRAY_A);
?>

<div class="wrap">
    <?php

        echo "<h1>" . get_admin_page_title() . "</h1>";
    ?>

    

    <br><br><br>

    <?php

        echo "<h2>Ventas del mes</h2>"

    ?>

    <table class="wp-list-table widefat fixed striped pages">
        <thead>
            <th>orden_id</th>
            <th>Fecha</th>
            <th>Venta</th>
        </thead>
        <tbody id=the-list>
            <?php 
                foreach ($lista_ordenes as $key => $value) {
                $order = $value['order_id'];
                $fecha = $value['date_created'];
                $venta = $value['total_sales'];
                echo "
                <tr>
                    <td>$order</td>
                    <td>$fecha</td>
                    <td>$venta</td>
                </tr>
                ";
                }
            ?>
        </tbody>
    </table>

    <?php

        echo "<h2>Ventas totales</h2>"

    ?>

    <table class="wp-list-table widefat fixed striped pages">
        <thead>
            <th>orden_id</th>
            <th>Fecha</th>
            <th>Venta</th>
        </thead>
        <tbody id=the-list>
            <?php 
                foreach ($lista_total as $key => $value) {
                $order = $value['order_id'];
                $fecha = $value['date_created'];
                $venta = $value['total_sales'];
                echo "
                <tr>
                    <td>$order</td>
                    <td>$fecha</td>
                    <td>$venta</td>
                </tr>
                ";
                }
            ?>
        </tbody>
    </table>

</div>