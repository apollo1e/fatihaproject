<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سورة الفاتحة</title>
    <link rel="stylesheet" href="./style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">

</head>
<script>
        function changeColor(element) {
            element.classList.toggle('clicked');
        }
    </script>
<body>
  
    <h1>سورة الفاتحة</h1>
    <?php
    // echo "test";
  $verses = [
    "بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ",
    "الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ",
    "الرَّحْمَنِ الرَّحِيمِ",
    "مَالِكِ يَوْمِ الدِّينِ",
    "إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ",
    "اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ",
    "صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ"
];

foreach ($verses as $verse) {
    $words = explode(' ', $verse);
    echo "<p>";
    foreach ($words as $word) {
        echo "<span onclick='changeColor(this)'>$word</span> ";
    }
    echo "</p>";
}
    ?>
</body>
</html>
