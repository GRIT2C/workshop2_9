<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) {
echo "ชื่อสมาชิก : " . $row ["name"] . "<br>";
echo "ที่อยู่ : " . $row ["address"] . "<br>";
echo "รอีเมล : " . $row ["email"] . "<br>";
echo "<hr>\n";
}
