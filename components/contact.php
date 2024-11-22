<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    input, textarea{
        width: 100%;
        padding: 12px;
        border: 1px solid darkgrey;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }
    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    form {
        background-color: lightgrey;
        padding: 10px;
        width: 500px;
        text-align: center;
        border-radius: 5px;
    }
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
<div class="container">
    <form action="contact.php" method="POST">
        <h1>Contact Us</h1>
        <?php 
            echo "<input type='text' name='name' placeholder='Enter your Name'><br>";
            echo "<input type='email' name='email' placeholder='Enter your Email'><br>";
            echo "<textarea name='message' placeholder='Enter your Message'></textarea><br>"; 
            echo "<input type='submit' name='submit-btn'>";  
        ?>  
    </form>
</div>
