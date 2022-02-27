    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age =  intval($_POST['age']);
    $contact = intval($_POST['contact']);
    $email = $_POST['email'];
    $password = $_POST['password1']; //if not match then undeid key key 

    $ServerName = "localhost";
    $userName = "root";
    $password = "";
    $database = "user";
    // $conn = new  mysqli($ServerName, $userName, $password, $database);
    $conn =  mysqli_connect($ServerName,$userName,$password,$database);
    
    if ($conn->connect_error) {
        die("connection failed" . $conn->connect_error);
    }
    if ($conn) { //connected return true
        echo "Connected successfullly";
    }
    $query  = "insert into usertable values ('$fname','$lname' ,$age,$contact , '$email','$password')";
    mysqli_query($conn , $query);

    
    echo "<table  border='1'> ";
    echo "<tr> ";
    echo "<th>First Name </th>";
    echo "<th>Last Name</th>";
    echo "<th>Age </th>";
    echo "<th>Contact </th>";
    echo "<th>Email</th>";
    echo "<th>Password</th>";
    echo "</tr> ";
    $res = mysqli_query($conn , "select * from usertable"); 
    if ($res->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
  
        }
      } else {
        echo "0 results";
      }
    mysqli_close($conn);
    ?>
