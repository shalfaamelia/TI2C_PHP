<?php include("koneksi.php"); ?>
<!DOCTYPE html> 
<html lang="en">

<html> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Biodata Mahasiswa</title>
    <style>
        body {
            background: url(background.jpeg);
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            margin-top: 50px;
            padding: 20px;
            background-color: beige;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header {
            background-color: rgb(80, 142, 121);
            color: beige;
            padding: 15px;
            border-radius: 5px 5px 5px 5px;
            margin-bottom: 20px;
        }

        header h2 {
            margin: 0;
        }

        table {
            margin-top: -15px;
            margin-bottom: 15px;
            border-collapse: collapse;
            width: 100%;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: rgb(80, 142, 121);
            color: beige;
            text-align: center;
            font-weight: normal;
        }

        table tr:nth-child(even) {
            background-color: beige;
        }

        table tr:hover {
            background-color: white;
        }

        tbody{
            color: rgb(80, 142, 121);
        }

        button {
            background-color: rgb(80, 142, 121);
            border: none;
            padding: 10px;
            font-size: 16px;
            font-family: Georgia, 'Times New Roman', Times, serif;;
            cursor: pointer;
            border-radius: 5px 5px 5px 5px;
        }

        button:hover {
            background-color: darkblue;
        }
    </style>
</head> 

<body>
    <div class="container">
    <header> 
        <h2>List Biodata</h2> 
    </header> 
    <br> 
    <table border="1">
    <thead> 
        <tr> 
            <th>NIM</th> 
            <th>Nama</th> 
            <th>Alamat</th> 
            <th>Tempat Tanggal Lahir</th> 
            <th>Jenis Kelamin</th> 
            <th>Usia</th> 
        </tr> 
    </thead> 
    <tbody>
    <?php 
        $sql = "SELECT * FROM siswa"; 
        $query = mysqli_query($db, $sql); 
        while($siswa = mysqli_fetch_array($query)){ 
            echo "<tr>"; 
            echo "<td>".$siswa['NIM']."</td>"; 
            echo "<td>".$siswa['Nama']."</td>"; 
            echo "<td>".$siswa['Alamat']."</td>"; 
            echo "<td>".$siswa['TTL']."</td>"; 
            echo "<td>".$siswa['Jenis_Kelamin']."</td>"; 
            echo "<td>".$siswa['Usia']."</td>";
            echo "</tr>"; 
        } 
        ?>
    </tbody> 
    </table>
    <br>
    <button><a href="index.php" style="color: beige; text-decoration: none">Kembali ke Halaman Awal</a></button>
    </div>
    </body> 
</html>