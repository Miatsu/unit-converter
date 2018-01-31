<?php
    $fruits = [
        'title' => 'Fruits',
        'products' => ['Banane', 'Pomme', 'Tomate'],
    ];

    $shopping_list = [
        'fruits' => $fruits,
        'veggies' => [
            'title' => 'Légumes',
            'products' => ['Asperge', 'Brocolis'],
        ],
    ]
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<pre>
    <?php print_r($shopping_list); ?>
</pre>

<?php foreach ($shopping_list as $product_type_id => $product_type): ?>
    <table>
        <tr>
            <th>
                <?php echo $product_type['title']; ?>
            </th>
        </tr>
        <?php foreach ($product_type['products'] as $product): ?>
            <tr>
                <td><?php echo $product; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endforeach; ?>


</body>
</html>
