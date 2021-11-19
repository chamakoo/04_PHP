<?php 
$score = 60;
if ($score >= 101) {
    echo '不正な点数です';
} elseif ($score < 0){
    echo'不正な点数です';
} else {
    if ($score >= 60) {
        echo '合格です';
        if ($score == 100) {
            echo '満点おめでとう!';
        } elseif ($score >= 80){
            echo'素晴らしいです!';
        }
    } elseif ($score < 60){
        echo'不合格です';
    }
}

echo '<p>END</p>';
?>

