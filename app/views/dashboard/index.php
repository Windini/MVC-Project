<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        /* Reset margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #fbc2eb, #a6c1ee);
            /* Gradient background yang lembut */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Kontainer Dashboard */
        .dashboard-container {
            text-align: center;
            max-width: 600px;
            width: 100%;
            background-color: white;
            /* Warna background yang bersih dan terang */
            padding: 20px;
            border-radius: 12px;
            /* Membulatkan sudut */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            /* Bayangan halus */
            transition: transform 0.3s ease-in-out;
            /* Animasi saat dihover */
        }

        /* Animasi hover */
        .dashboard-container:hover {
            transform: translateY(-5px);
            /* Sedikit mengangkat kotak saat dihover */
        }

        /* Header Dashboard */
        .dashboard-header {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #fbc2eb;
            /* Garis bawah untuk memisahkan header */
        }

        /* Konten Dashboard */
        .dashboard-content {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }

        .info-message {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        /* Paragraf di dalam dashboard */
        .dashboard-content p {
            margin-top: 10px;
            color: #777;
        }

        /* Efek hover pada konten */
        .dashboard-content:hover {
            color: #333;
            /* Menggelapkan teks saat dihover */
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <header class="dashboard-header">
            <h2>Dashboard</h2>
        </header>
        <div class="dashboard-content">
            <div class="info-box">
                <div class="info-message">Selamat datang!</div>
                <p>Ini adalah halaman dashboard Anda. Anda dapat menambahkan lebih banyak informasi atau elemen lainnya di sini.</p>
            </div>
        </div>
    </div>
</body>

</html>