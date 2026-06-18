<?php
setlocale(LC_TIME, 'id_ID.UTF-8','Indonesia');

$timezone = new DateTimeZone('Asia/Jakarta');
$now = new DateTime('now', $timezone);

$tanggal = strftime('%A, %d %B %Y', $now->getTimestamp());
$waktu = $now->format('H:i:s');
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 flex items-center justify-center h-screen">

        <div class="bg-white p-8 rounded-2x1 shadow-lg max-w-md w-full text-center">
            <h1 class="text-x1 font-semibold mb-6">Tanggal dan Waktu Sekarang</h1>
            <p class="mb-4">
                <span class="font-semibold">Tanggal:</span><br>
                <?= ucfirst($tanggal) ?>
            </p>
            <p>
                <span class="font-semibold">Waktu:</span><br>
                <?= $waktu ?> WIB
            </p>
        </div>

    </body>
</html>
