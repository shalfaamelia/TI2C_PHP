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
            max-width: 600px;
            margin: 0 auto;
            margin-top: 50px;
            margin-bottom: 50px;
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
            margin-bottom: 10px;
        }

        header h3 {
            margin: 0;
        }

        label{
            color: rgb(80, 142, 121);
            margin-bottom: 5px;
        }

        fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        fieldset p {
            margin: 0;
            padding: 10px;
        }

        fieldset label {
            display: inline-block; 
            text-align: right;
            vertical-align: top;
            padding-top: 5px;
        }

        fieldset input[type="text"], fieldset input[type="radio"] {
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 5px;
            color: rgb(80, 142, 121);
            font-size: 16px;
            width: 100%;
        }

        fieldset input[type="radio"] {
            margin-right: 10px;
        }

        fieldset button[type="submit"] {
            background-color: rgb(80, 142, 121);
            color: beige;
            border: none;
            border-radius: 3px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        fieldset button[type="submit"]:hover {
            background-color: darkblue;
        }
    </style>
</head> 
 
<body>
    <div class="container">
    <header>
        <h3>Formulir Biodata Pendaftar Baru</h3> 
    </header>
    <form action="proses.php" method="POST">
        <fieldset> 
        <p> 
            <label for="NIM">NIM : </label> 
            <input type="text" name="NIM"/> 
        </p>
        <p> 
            <label for="Nama">Nama : </label> 
            <input type="text" name="Nama"/> 
        </p> 
        <p> 
            <label for="Alamat">Alamat : </label> 
            <input type="text" name="Alamat"/>
        </p> 
        <p> 
            <label for="TTL">Tempat Tanggal Lahir : </label> 
            <input type="text" name="TTL"/>
        </p>
        <p> 
            <label for="Jenis_Kelamin">Jenis Kelamin : </label> 
            <label><input type="radio" name="Jenis_Kelamin" value="Laki-laki"> Laki-laki</label> 
            <label><input type="radio" name="Jenis_Kelamin" value="Perempuan"> Perempuan</label> 
        </p> 
        <p>
            <label for="Usia">Usia : </label> 
            <input type="text" name="Usia"/> 
        </p> 
        <p> 
            <button type="submit" name="daftar">Submit</button> 
        </p> 
        </fieldset> 
    </form>
    </div>
    </body> 
</html>