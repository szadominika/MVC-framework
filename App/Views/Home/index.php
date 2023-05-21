<!DOCTYPE html>
<html>
<head>
    <title>Output escaping</title>
    <meta charset="utf-8"> 
</head>
<body>
   <h1>Welcome</h1>

    <p>Hello <?php echo htmlspecialchars($name);?>!</p>

    <ul>
        <?php foreach ($colours as $colour): ?>
            <li><?php echo htmlspecialchars($colour); ?></li>
            <?php endforeach; ?>
    </ul>
</body>
</html>
