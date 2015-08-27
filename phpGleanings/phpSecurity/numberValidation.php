<?php

if (!isset($_POST['submit'])) {
    die('Unauthorized Access');
}

function Calc_Order($price, $order)
{
    $order = (int)$order;

    if ($order < 1) {

        return 0;
    }

    return $pay = $price * $order;
}

$count=$_POST['total'];
$total = Calc_Order(1000,$count );
if ($total > 0) {

    echo "You must pay: ";

    echo number_format(Calc_Order(1000, $total), 2, ".", ",");

} else {

    echo "Order input not valid";

}

?>