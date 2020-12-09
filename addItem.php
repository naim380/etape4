<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>AddItem</title>
    </head>

    <body>
    <?php var_dump ($_POST) ?>

    <form method="POST" action="displayItem.php">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" name="nom">
        <?php
        if ( isset($_POST["nom"])  &&   $_POST["nom"] === "empty") {
            echo "<p>Name is empty</p>";
        }
        ?>
    </div>

    <div>
        <label for="prix">Prix :</label>
        <input type="text" name="prix">
        <?php
        if ( isset ($_POST["prix"])   &&   $_POST["prix"] === "empty") {
            echo "<p>Prix is empty</p>";
        }
        ?>
    </div>

    <div>
        <label for="image">Image :</label>
        <input type="text" name="image">
        <?php
        if ( isset ($_POST["image"])   &&  $_POST["image"] === "empty") {
            echo "<p>Prix is empty</p>";
        }
        ?>
    </div>

<button type="submit">Validate</button>
</form>
</body>
</html>