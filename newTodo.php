<!DOCTYPE html>
<html>
<head>
    <title>Create Todo list</title>
</head>
<body>
    <h1>Create Todo List</h1>
    <form method="post" action="db/submitForm.php">
        <p>Todo title: </p>
        <input name="todo_title" type="text">
        <p>Todo description text: </p>
        <input name="todo_text" type="text">
        <br /><br />
        <input type="submit" name="submit" value="submit">
    </form>
    <br />
</body>
</html>

