<?php
include_once "connection.php";

if(isset($_POST['submit'])) {
    $title = $_POST['todo_title'];
    $text = $_POST['todo_text'];

    //connect to database
    require_once('connection.php');
    GetLinkToDB();
    global $link;

    $query = "INSERT INTO todos(todo_title, todo_text, date) VALUES ('$title', '$text', now())";
    $insertTodo = mysqli_query($link, $query);
    if($insertTodo) {
        echo "Successfully";
    } else {
        echo mysqli_error($link);
    }
    mysqli_close($link);
}

header("Location: http://localhost/projects/GitHub/simpleCRUD/");
?>