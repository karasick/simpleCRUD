<?php
require_once("db/connection.php"); 
?>
<!Doctype html>
<html>
<head>
    <title>my todos</title>
</head>
<body>
    <h2>Next on my agenda</h2>
    <p><a href="newTodo.php">add todo</a></p>
    <?php
    GetLinkToDB();
    global $link;
    $query = "SELECT id, todo_title, todo_text, date FROM todos";
    $result = mysqli_query($link, $query);
    //check if there's any data inside the table
    if(mysqli_num_rows($result) >= 1) {
        while($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $title = $row['todo_title'];
            $date = $row['date'];
            ?>
            <ul>
            <li><a href="detailedTodo.php?id=<?php echo $id?>"><?php echo $title ?></a></li> <?php echo "[[ $date ]]";?>
            </ul>
            <?php
        }
    }
    ?>
</body>
</html>