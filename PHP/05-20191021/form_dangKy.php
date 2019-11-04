<form action="xulydangki.php" method="POST">
    <h1> Register </h1>
    Enter your Email:<br>
    <input type="email" name="email" placeholder="email@gmail.com"><br>
    Enter your password:<br>
    <input type="password" name="password" placeholder="password"><br>
    Choice your roles: <br>
    <select name="nameRole">
        <?php
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $databaseName = "ap_21_5";

        // Create connection
        $conn = mysqli_connect($serverName, $userName, $password, $databaseName);

        $a = "SELECT * FROM ap_21_5.roles";
        $result = mysqli_query($conn, $a);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>

                <option value="<?php echo $row['id']; ?>">
                    <?php echo $row['roleName']; ?>
                </option>
        <?php }
        }
        ?>
    </select> <br> <br>
    <button type="sumit">DANG KY</button>
</form>