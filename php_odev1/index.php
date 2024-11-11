<?php
// 3'e bölünebilirlik kontrol fonksiyonu
function checkDivisibility($number) {
    // Eğer sayı boş ise hata mesajı ver
    if (empty($number)) {
        echo "Değer boş olamaz. Lütfen bir sayı girin.";
        return;
    }

    // Sayı 3'e bölünebiliyorsa
    if ($number % 3 === 0) {
        echo "Girdiğiniz sayı 3'e bölünebilir.";
    } else {
        // Sayı 3'e bölünemiyorsa, bölünebilen ilk değeri hesapla
        $nextDivisible = $number + (3 - $number % 3);
        echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı $nextDivisible'dir.";
    }
}

// Form gönderildiğinde işlemi başlat
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = $_POST['number'];
    checkDivisibility($number);
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayı Bölme Kontrolü</title>
</head>
<body>
    <h2>Bir Sayı Girin:</h2>
    <form method="POST">
        <label for="number">Girilen Sayı:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Kontrol Et">
    </form>
</body>
</html>
