<?php
$errors = [];

function validateForm($name, $address, $phoneNumber, $gender, $maritalStatus)
{
    global $errors;

    if (empty($name)) {
        $errors[] = "Nama harus diisi";
    }

    if (empty($address)) {
        $errors[] = "Alamat harus diisi";
    }

    if (empty($phoneNumber)) {
        $errors[] = "Nomor telepon harus diisi";
    }

    if (empty($gender)) {
        $errors[] = "Gender harus dipilih";
    }

    if (empty($maritalStatus)) {
        $errors[] = "Status pernikahan harus dipilih";
    }
}

$users = [
    [
        "name" => "Farhan",
        "email" => "farhan.nurjamil17@gmail.com",
        "password" => "12345678"
    ],
    [
        "name" => "nurjamil17",
        "email" => "muhamad.fn1710@gmail.com",
        "password" => "password123"
    ],
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phone_number"];
    $gender = $_POST["gender"];
    $maritalStatus = $_POST["marital_status"];

    validateForm($name, $address, $phoneNumber, $gender, $maritalStatus);

    if (empty($errors)) {
        $userExists = false;

        foreach ($users as $user) {
            if ($user["name"] === $name) {
                $userExists = true;
                break;
            }
        }

        if ($userExists) {
            $errors[] = "Pengguna sudah terdaftar";
        } else {
            // Simpan pengguna ke dalam array
            $newUser = [
                "name" => $name,
                "address" => $address,
                "phone_number" => $phoneNumber,
                "gender" => $gender,
                "marital_status" => $maritalStatus
            ];
            $users[] = $newUser;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url("pemandangan.jpg") center center fixed;
            background-size: cover;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .center {
            text-align: center;
        }

        .data-section {
            margin-top: 30px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .data-section h2 {
            margin-top: 0;
        }

        .data-section p {
            margin-bottom: 10px;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Pendaftaran</h1>
        <?php if (!empty($errors)) : ?>
            <ul class="error">
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if ($_SERVER["REQUEST_METHOD"] !== "POST" || !empty($errors)) : ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" name="name" id="name" value="<?php echo isset($name) ? $name : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="address">Alamat:</label>
                    <input type="text" name="address" id="address" value="<?php echo isset($address) ? $address : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="phone_number">Nomor Telepon:</label>
                    <input type="tel" name="phone_number" id="phone_number" value="<?php echo isset($phoneNumber) ? $phoneNumber : ''; ?>">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <input type="radio" name="gender" value="Laki-laki" <?php echo (isset($gender) && $gender === 'Laki-laki') ? 'checked' : ''; ?>>
                    <label for="gender-male">Laki-laki</label>
                    <input type="radio" name="gender" value="Perempuan" <?php echo (isset($gender) && $gender === 'Perempuan') ? 'checked' : ''; ?>>
                    <label for="gender-female">Perempuan</label>
                </div>

                <div class="form-group">
                    <label>Status Pernikahan:</label>
                    <select name="marital_status">
                        <option value="" <?php echo empty($maritalStatus) ? 'selected' : ''; ?>>Pilih status</option>
                        <option value="Belum Menikah" <?php echo (isset($maritalStatus) && $maritalStatus === 'Belum Menikah') ? 'selected' : ''; ?>>Belum Menikah</option>
                        <option value="Menikah" <?php echo (isset($maritalStatus) && $maritalStatus === 'Menikah') ? 'selected' : ''; ?>>Menikah</option>
                    </select>
                </div>

                <div class="center">
                    <input type="submit" value="Daftar">
                </div>
            </form>
        <?php endif; ?>

        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($errors)) : ?>
            <div class="data-section">
                <h2>Data Pendaftaran:</h2>
                <p>Nama: <?php echo $name; ?></p>
                <p>Alamat: <?php echo $address; ?></p>
                <p>Nomor Telepon: <?php echo $phoneNumber; ?></p>
                <p>Jenis Kelamin: <?php echo $gender; ?></p>
                <p>Status Pernikahan: <?php echo $maritalStatus; ?></p>
            </div>
        <?php endif; ?>
    </div>

    <footer>
        <p>Hubungi saya di <a href="mailto:farhan.nurjamil17@gmail.com">farhan.nurjamil17@gmail.com</a></p>
        <p>&copy; 2023 Muhamad Farhan Nurjamil</p>
    </footer>
</body>
</html>
