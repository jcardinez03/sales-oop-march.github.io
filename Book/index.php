<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK OOP</title>
</head>
<body>
    <form action="" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    
        <br>

        <label for="price">Price</label>
        <input type="number" name="price" id="price">

        <br>

        <button type="submit" name="btn_submit">Submit</button>
    </form>

    <?php
    include 'Book.php';

    if(isset($_POST['btn_submit'])){
        // INPUT
        $title = $_POST['title'];
        $price = $_POST['price'];

        // OBJECT
        $book = new Book;

        // SET VALUES
        $book->setValues($title, $price);

        // OUTPUT
        echo "Title: " . $book->getTitle();
        echo "<br>";
        echo "Price: " . $book->getPrice();    
        
    }
    ?>
</body>
</html>