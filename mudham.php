<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        /* Global Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f4f8; /* Warna background yang lebih terang */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Form Styles */
form {
    background-color: #ffffff;
    padding: 25px;
    border-radius: 12px; /* Sudut lebih melengkung untuk kesan modern */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Shadow lebih soft */
    width: 100%;
    max-width: 400px; /* Lebar kolom lebih kecil */
    box-sizing: border-box;
    transition: all 0.3s ease; /* Transisi saat hover pada form */
}

/* Hover Effect on Form */
form:hover {
    transform: translateY(-5px); /* Efek terangkat sedikit saat hover */
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2); /* Shadow lebih tajam saat hover */
}

/* Form Heading */
h2 {
    text-align: center;
    font-size: 28px; /* Ukuran font sedikit lebih kecil */
    font-weight: 700;
    color: #3498db;
    margin-bottom: 20px;
    letter-spacing: 1px;
}

/* Input Fields Styling */
input[type="text"],
input[type="email"],
input[type="password"],
input[type="number"] {
    width: 100%;
    padding: 12px 15px; /* Padding lebih kecil */
    border: 2px solid #ccc;
    border-radius: 10px;
    margin-bottom: 15px;
    font-size: 15px; /* Ukuran font lebih kecil */
    background-color: #f9f9f9;
    box-sizing: border-box;
    transition: all 0.3s ease; /* Transisi untuk efek hover dan focus */
}

/* Efek Focus pada Input */
input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus,
input[type="number"]:focus {
    border-color: #3498db; /* Warna border saat fokus */
    box-shadow: 0 0 8px rgba(52, 152, 219, 0.4); /* Glow effect saat fokus */
    outline: none;
}

/* Efek Hover pada Input */
input[type="text"]:hover,
input[type="email"]:hover,
input[type="password"]:hover,
input[type="number"]:hover {
    border-color: #2980b9; /* Border biru lebih gelap saat hover */
    background-color: #e9f3fd; /* Warna latar lebih terang saat hover */
    cursor: pointer;
}

/* Submit Button Styling */
input[type="submit"] {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 14px;
    border-radius: 10px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    box-sizing: border-box;
    font-weight: bold;
    transition: all 0.3s ease; /* Transisi untuk efek hover */
}

/* Hover Effect on Submit Button */
input[type="submit"]:hover {
    background-color: #2980b9; /* Biru lebih gelap saat hover */
    transform: translateY(-4px); /* Efek tombol terangkat */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Shadow lebih tajam saat hover */
}

/* Footer Styling */
.footer {
    text-align: center;
    margin-top: 30px;
    color: #777;
    font-size: 14px;
}

/* Link Styling in Footer */
.footer a {
    color: #3498db;
    text-decoration: none;
    font-weight: 600;
    padding: 8px 20px;
    border-radius: 5px;
    background-color: #e3f2fd;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.footer a:hover {
    background-color: #3498db;
    color: white;
}

/* Responsiveness */
@media (max-width: 768px) {
    form {
        padding: 20px;
    }

    h2 {
        font-size: 24px; /* Ukuran heading lebih kecil untuk layar kecil */
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="number"] {
        font-size: 14px;
        padding: 10px;
    }

    input[type="submit"] {
        font-size: 14px;
        padding: 12px;
    }
}

    </style>
</head>
<body>

<form action="submit.php" method="post" onsubmit="return validateform()">  
    <h2>Pendaftaran</h2>
    <input type="hidden" name="id"velue="<?php if(!empty($data['id'])){ echo $data['id']; } ?>">
    <table>
        <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input type="text" id="username" name="username" required></td>
        </tr>
        <tr>
            <td><label for="nama_lengkap">Nama Lengkap</label></td>
            <td>:</td>
            <td><input type="text" id="nama_lengkap" name="nama_lengkap" required></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td>:</td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input type="password" id="password" name="password" required></td>
        </tr>

        <?php 

             // Decode data batang terpilih 
             $data_barang_terpilih = (!empty($data['data_barang'])) ? json_decode($data ['data_barang'], true) : array();
        ?>
        <tr>
            <td><label>Barang</label></td>
            <td>:</td>
            <td class="barang">
                <div>
                    <input type="checkbox" name="barang[]" value="<?php if (!empty($data['kursi'])){ echo $data['kursi']; }?> kursi - Rp700.000" id="kursi">
                    <label for="kursi">kursi - Rp700.000</label>
                    <input type="number" name="jumlah[]" placeholder="Jumlah" min="1" style="width: 80px;">
                </div>
                <div>
                    <input type="checkbox" name="barang[]" value="<?php if (!empty($data['meja'])){ echo $data['meja']; }?> meja - Rp900.000" id="meja">
                    <label for="meja">meja - Rp900.000</label>
                    <input type="number" name="jumlah[]" placeholder="Jumlah" min="1" style="width: 80px;">
                </div>
                <div>  
                    <input type="checkbox" name="barang[]" value="<?php if (!empty($data['papan tulis'])){ echo $data['papan tulis']; }?> papan tulis - Rp400.000" id="papan_tulis">
                    <label for="papan_tulis">papan tulis - Rp400.000</label>
                    <input type="number" name="jumlah[]" placeholder="Jumlah" min="1" style="width: 80px;">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;">
                <!-- Tombol Submit -->
                <input type="submit" value="Submit" style="padding: 5px 10px; background-color:rgb(40, 82, 167); color: white; border: none; border-radius: 4px; cursor: pointer;">
                
                <!-- Tombol Lihat Data -->
                <a href="lihat_data.php" style="
                    display: inline-block; 
                    padding: 5px 10px; 
                    background-color:rgb(10, 91, 177); 
                    color: white; 
                    text-decoration: none; 
                    border-radius: 4px; 
                    margin-left: 10px;">Lihat Data</a>
            </td>
        </tr>
    </table>

 

    <script>
        function validateform() {
            var password = document.getElementById("password").value;
            if (password.length < 6) {
                alert("Password harus memiliki minimal 6 karakter");
                return false;
            }
            return true;
        }
    </script>

</body>
</html>
