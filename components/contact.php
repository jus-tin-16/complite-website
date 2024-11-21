<style>
    
</style>

<?php
    require '../utils/database.php';

    if(isset($_POST['submit-btn'])){
        $n = $_POST['name'];
        $e = $_POST['email'];
        $m = $_POST['message'];
        
        $sql = "INSERT INTO inquire(name, email, message) VALUES(?,?,?)";
        $stmtinsert = $conn->prepare($sql);
        $stmtinsert->bind_param("sss", $n, $e, $m);
        $result = $stmtinsert->execute();
        if($result){
            echo "<script>alert('Success'); window.location.href = 'index.php';</script>";
        }
    }
?>

<form action="contact.php" method="POST">
    <?php 
        echo "<input type='text' name='name' placeholder='Enter your Name'><br>";
        echo "<input type='email' name='email' placeholder='Enter your Email'><br>";
        echo "<textarea name='message' placeholder='Enter your Message' ></textarea><br>"; 
        echo "<input type='submit' name='submit-btn'>";  
    ?>  
</form>
