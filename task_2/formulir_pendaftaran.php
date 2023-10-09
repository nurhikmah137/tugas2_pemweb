<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            justify-content: center;
            align-items: center;
            background-color: palevioletred;
            padding: 15px;
        }
        .container {
            max-width: 100%;
            width: 100%;
            margin : 80px, 50px, auto, 50px;
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            align-items: center;
        }
        h1 {
            font-size: 50px;
            text-align: center;
        }
        .container td {
            padding: 10px;
            text-align: justify;
        }
        .container table {
            width: 100%;
        }
    </style>
    <title>Data Pendaftar</title>
</head>

<body>
    <h1>Data Pendaftar</h1>
    <div class="container">
        <table border="1">
            <tr>
                <td>Email </td>
                <td>  :  </td>
                <td><?php echo $_GET['email']; ?></td>
            </tr>

            <tr>
                <td>Nama  </td>
                <td>  :  </td>
                <td><?php echo $_GET['nama']; ?></td>
            </tr>

            <tr>
                <td>Alamat </td>
                <td>  :  </td>
                <td><?php echo $_GET['alamat']; ?></td>
            </tr>

            <tr>
                <td>Jenis Kelamin </td>
                <td>  :  </td>
                <td><?php echo $_GET['jenis_kelamin']; ?></td>
            </tr>

            <tr>
                <td>Minat Dan Bakat </td>
                <td>  :  </td>
                <td><?php echo $_GET['minat_bakat']; ?></td>
            </tr>

            <tr>
                <td>Hobi </td>
                <td>  :  </td>
                <td><?php echo $_GET['hobi']; ?></td>
            </tr>

        </table>
    </div> 
</body>

</html>