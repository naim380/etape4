<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>AddItem</title>
    </head>

    <body>

    <form method="POST" action="displayItem.php">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" name="nom">
        <?php
        if ($_POST["nom"] === "empty") {
            echo "<p>Name is empty</p>";
        }
        ?>
    </div>

    <div>
        <label for="prix">Prix :</label>
        <input type="text" name="prix">
        <?php
        if ($_POST["prix"] === "empty") {
            echo "<p>Prix is empty</p>";
        }
        ?>
    </div>

    <div>
        <label for="image">Image :</label>
        <input type="text" name="image">
        <?php
        if ($_POST["image"] === "empty") {
            echo "<p>Prix is empty</p>";
        }
        ?>
    </div>




<button type="submit">Validate</button>
</form>
</body>
</html>