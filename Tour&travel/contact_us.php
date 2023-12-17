<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "Tour&travel";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection Failed:", mysqli_connect_error();
    exit;
}
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message']; ?>
    <h1><?= $name ?></h1>
    <h1><?= $email ?></h1>
    <h1><?= $phone ?></h1>
    <h1><?= $subject ?></h1>
    <h1><?= $message ?></h1>

    <?php
    $sql = "Insert into contact(Name,Email,Phone,Subject,Message) values ('$name','$email','$phone','$subject','$message')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "error: ", mysqli_error($conn);
        exit;
    }
    echo "We will contact you soon";
    ?>
<?php } ?>
<!-- mysqli_close($conn); -->