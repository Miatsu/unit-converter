<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaires de conversion</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>
</head>
<body>

<form method="get">
    <input type="text" name="volume_to_convert" value="<?php echo $current_volume_to_convert; ?>">
    <select class="" name="volume_unit_to_convert">
        <?php foreach ($volume_units as $volume_unit): ?>
            <option
                value="<?php echo $volume_unit; ?>"
                <?php echo $current_volume_unit_to_convert === $volume_unit ? 'selected' : '' ?>
            >
                <?php echo $volume_unit; ?>
            </option>
        <?php endforeach; ?>
    </select>
    →
    <select class="" name="volume_unit_converted">
        <?php foreach ($volume_units as $volume_unit): ?>
            <option
                value="<?php echo $volume_unit; ?>"
                <?php echo $current_volume_unit_converted === $volume_unit ? 'selected' : '' ?>
            >
                <?php echo $volume_unit; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" />
</form>

</body>
</html>
