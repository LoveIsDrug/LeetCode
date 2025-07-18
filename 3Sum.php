<?php
function countNumberCombinations(string $source, string $target): int
{
    $n = strlen($source);
    $m = strlen($target);

    $dp = array_fill(0, $m + 1, 0);
    $dp[0] = 1;

    for ($i = 0; $i < $n; $i++) {
        for ($j = $m; $j >= 1; $j--) {
            if ($source[$i] === $target[$j - 1]) {
                $dp[$j] += $dp[$j - 1];
            }
        }
    }
    return $dp[$m];
}

$source = "CoxdCodeCompleteeCooDmmpplleettee";
$target = "CodeComplete";

echo "Số cách ghép thành '$target' là: " . countNumberCombinations($source, $target);
