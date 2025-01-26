<?php
header('Content-Type: text/html; charset=utf-8');
$glmm = $_COOKIE['appyhglosmm'];
$lj = "mm.php";
$title = '卡密管理';
include './head.php';
include_once($lj);

if ($glmm == "") {
    echo "<script>alert('Please enter the password to enter');location='index.php';</script>";
} else if ($glmm == $mm) {
} else {
    echo "<script>alert('Incorrect password, please log in again');location='index.php';</script>";
}

echo '<div class="container" style="padding-top:70px;">';
echo '<h1>Card Secret Management</h1>';

// Initialize arrays to store card secrets by duration
$cards_1day = [];
$cards_7days = [];
$cards_30days = [];

$hp = scandir("data/km");
$arrlength = count($hp);

for ($x = 2; $x < $arrlength; $x++) {
    $card = $hp[$x];
    $filepath = "data/km/" . $card . "/a.txt";

    if (file_exists($filepath)) {
        $duration = (int)file_get_contents($filepath);

        // Categorize cards based on duration
        if ($duration == 86400) {
            $cards_1day[] = $card;
        } elseif ($duration == 604800) {
            $cards_7days[] = $card;
        } elseif ($duration == 2592000) {
            $cards_30days[] = $card;
        }
    }
}

// Helper function to render a table
function renderTable($title, $cards)
{
    echo "<h2>$title</h2>";
    echo '<table class="table table-bordered">';
    echo '<thead><tr><th>#</th><th>Card Secret</th><th>Action</th></tr></thead>';
    echo '<tbody>';
    foreach ($cards as $index => $card) {
        echo "<tr>
                <td>" . ($index + 1) . "</td>
                <td>$card</td>
                <td>
                    <form action='xkm.php' method='post'>
                        <input type='hidden' name='t' value='$card'>
                        <button type='submit' class='btn btn-primary'>Manage</button>
                    </form>
                </td>
              </tr>";
    }
    echo '</tbody>';
    echo '</table>';
}

// Render tables for each category
renderTable("1-Day Cards", $cards_1day);
renderTable("7-Day Cards", $cards_7days);
renderTable("30-Day Cards", $cards_30days);

echo '</div>';
?>
