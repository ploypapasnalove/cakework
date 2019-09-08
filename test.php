<?php 
 
    $gender= $_POST["gender"]; 
    echo $gender;
    echo "<br>";

    $name = $_POST["name"];
    echo $name;
    echo "<br/>";

   
    $province = $_POST["province"]; 
    echo $province; 
    echo "<br/>";

    $myfcolor = $_POST["myfcolor"];
    echo $myfcolor;
    echo "<br/>";

    
    $size = $_POST["size"];
    echo $size; 
    echo "<br/>";

    $mobile_number= $_POST["mobile_number"]; 
    echo $mobile_number;
    echo "<br/>";

    $pwd = $_POST["pwd"]; 
    echo $pwd;
    echo "<br/>";

    $intro= $_POST["intro"];
    echo $intro;
    echo "<br/>";

    echo "<font color=\"$myfcolor\" size=\"$size\">$name</font>";

	Setcookie('city',$_POST["province"], time()+60);
    echo "<a href=\"cookie.php\">ดูค่า Cookie</a>";
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbanme = "shop";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbanme);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    mysqli_set_charset($conn, "utf8");
   
    //$sql = "INSERT INTO user (suuid, sugender, usname, suprovince, sumyfcolor, susize, sumobile_number, supwd, suintro) VALUES (NULL, 'male', 'สมหญิง', 'กาญจนบุรี', '#00ff00', '5', '0979545362', '1234', 'น่ารัก')";
    $sql = "INSERT INTO user (suuid, sugender, usname, suprovince, sumyfcolor, susize, sumobile_number, supwd, suintro) VALUES (NULL, '$gender', '$name', '$province', '$myfcolor', '$size', '$mobile_number', '$pwd', '$intro')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>
