<?php
    include("db.php");

    if(isset($_POST['save_task'])){
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "INSERT INTO Tareas(titulo, descripcion) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Insercion Fallida");
        }
        
        $_SESSION['message']='Guardado Satisfactoriamente..';
        $_SESSION['message_type'] = 'success';

        header("location: index.php");
    }
?>