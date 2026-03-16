<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | My PHP Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/nav.php'; ?>
    <main>
        <h1>Welcome to My PHP Website</h1>
        <p>This is the home page of a basic PHP website. Use the navigation bar above to explore the different sections of the site.</p>
        <p>This site was built with PHP and demonstrates a simple multi-page layout with a shared navigation component.</p>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> My PHP Website</p>
    </footer>
</body>
</html>
