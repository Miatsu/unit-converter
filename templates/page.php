<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<?php pre($shopping_list); ?>

<?php foreach ($shopping_list as $product_type): ?>
    <table>
        <tr>
            <th>
                <?php echo $product_type['title']; ?>
            </th>
            <th>
                Quantité ( <?php echo get_product_total_quantity($product_type['products']); ?> )
            </th>
        </tr>
        <?php foreach ($product_type['products'] as $product): ?>
            <tr>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['quantity']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endforeach; ?>

</body>
</html>
