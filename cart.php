<?php
session_start();
require 'inc/head.php';
require 'inc/data/products.php';
$quantities = array_count_values($_SESSION['cart']);?>
    <section class="cookies container-fluid">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>Ref.</th>
                    <th>Produit</th>
                    <th>Prix U.</th>
                    <th>Quantité</th>
                    <th>Prix Tot.</th>
                </tr>
                </thead>
                <tbody>
                <?php $totalPrice = 0; ?>
                <?php foreach ($quantities as $productId => $quantities) { ?>
                    <tr>
                        <td><?= $productId; ?></td>
                        <td><?= $catalog[$productId]['name']; ?></td>
                        <td><?= $quantities; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="4">
                        Total :
                    </td>
                    <td>
                        <?= $totalPrice; ?>€
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>