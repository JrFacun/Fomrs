<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$conn = new mysqli('localhost', 'root', '', 'forms');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Faied : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration(firstName, lastName, gender, email,password, number) values (?,?,?,?,?,?)");

    $stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration Successfully";
    $stmt->close();
    $conn->close();
}
?>
<?php
$conn = new mysqli('localhost', 'root', '', 'forms');
$query = "SELECT * FROM registration";
$rs = mysqli_query($conn, $query);
echo "<table border = '1' width  = '300' cellspace '0'>";
echo "<tr>";
echo "<td> First Name</td>";
echo "<td> Last Name</td>";
echo "<td> Gender</td>";
echo "<td> Email</td>";
echo "<td> Password</td>";
echo "<td> Number</td>";
echo "</tr>";
?>
<?php
while ($student = mysqli_fetch_assoc($rs)) :
?>
    <td><?= $student['firstName'] ?></td>
    <td><?= $student['lastName'] ?></td>
    <td><?= $student['gender'] ?></td>
    <td><?= $student['email'] ?></td>
    <td><?= $student['password'] ?></td>
    <td><?= $student['number'] ?></td>
    </tr>
<?php endwhile; ?>
</div>