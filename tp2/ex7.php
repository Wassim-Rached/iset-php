<h1>Sum of the First 10 Prime Numbers</h1>
    <?php
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    $count = 0;
    $number = 2;
    $sum = 0;

    while ($count < 10) {
        if (isPrime($number)) {
            $sum += $number;
            $count++;
        }
        $number++;
    }

    echo "La somme de 10 premiers nombres entiers.: $sum";
    ?>