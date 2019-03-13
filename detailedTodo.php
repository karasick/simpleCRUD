<?php 
require_once "db/connection.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    GetLinkToDB();
    global $link;
    $query = "SELECT todo_title, todo_text, date FROM todos WHERE id = '$id'";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result)==1) {
        $row = mysqli_fetch_array($result);
        if($row) {
            $title = $row['todo_title'];
            $description = $row['todo_text'];
            $date = $row['date'];
            echo "
            <h2>$title</h2>
            <h3>description</h3>
            <p>$description</p>
            <small>$date</small>
            ";
        }
    } else {
        echo 'no todo';
    }
}