<?php
   $conn=mysqli_connect('localhost','root','root','assignment');
       if(!$conn)
       {
         die("connection failed");
       }
       else
       {
        $sql = "CREATE TABLE user (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL
            )";
            $sql2="CREATE TABLE address (
                user_id INT(6),
                street VARCHAR(30),
                pincode INT(6) NOT NULL,
                country VARCHAR(20) NOT NULL,
                state VARCHAR(20) NOT NULL,
                phone INT(10) NOT NULL,
                FOREIGN KEY(user_id) REFERENCES user(id)
                )";
                if (mysqli_query($conn,$sql))
                {
                    if(mysqli_query($conn,$sql2))
                    {
                        echo "Successfully created.";
                    }
                }
                else
                {
                    echo "Creation Error ". mysqli_error($conn);
                }

            $conn->close();
       }

?>