<?php 

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
}

$list_barang_hilang = [
    "barang_1" => "Laptop",
    "barang_2" => "Motor",
    "barang_3" => "Helm",
    "barang_4" => "Sendal",
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang Hilang</title>
</head>
<body>
    <form action="auth.php" method="post">
        <button name="logout">logout</button>
    </form>
    <table border="1">
        <thead>
            <th>no</th>
            <th>nama barang</th>
        </thead>

        <tbody>
            <!-- buka foreach -->
            <?php foreach($list_barang_hilang as $key => $barang_hilang) {  ?>
                <tr>
                    <td><?php echo $key  ?></td>
                    <td><?php echo $barang_hilang  ?></td>
                </tr>
            <?php } ?>
            <!-- tutup foreach -->
        </tbody>
    </table>
</body>
</html>