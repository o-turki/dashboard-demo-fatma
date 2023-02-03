<?php
header("content-Type: application/json");
require_once 'config.php';

// $con = mysqli_connect("127.0.0.1", "admin", "DigiTex@2022", "db_isa");
// if ($con) {
//     // echo "DB connected";
// } else {
//     echo "DB connection is failed";
//     exit();
// }

$query = "SELECT DISTINCT pack_num, pack_qte FROM `p4_pack_operation` WHERE prod_line LIKE '%ISA201%' AND cur_date = DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y')";
$rslt = $con->query($query);

$tab = [];
while ($item = $rslt->fetch_assoc()) {
    $tab[] = $item;
}


$query2 = "SELECT DISTINCT pack_num, qte_fp, qte FROM `p12_control` WHERE prod_line LIKE '%ISA201%' AND cur_day = DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y')";
$rslt2 = $con->query($query2);

$tab2 = [];
while ($item2 = $rslt2->fetch_assoc()) {
    $tab2[] = $item2;
}

// echo json_encode($tab);
// echo json_encode($tab2);

$i = 0;
$qengaged = 0;
while (count($tab) >= $i) {
    $qengaged += $tab[$i]['pack_qte'];
    $i++;
}


// $qdf = 0;
// $qfab = 0;
// $i1 = 0;
// $F = count($tab2);
// while ($F >= $i1) {
//     $qfab += $tab2[$i1]['qte'];
//     $qdf += $tab2[$i1]['qte_fp'];
//     $i1++;
// }

// // echo $qengaged . '<br>';
// // echo $qfab . '<br>';
// // echo $qdf . '<br>';

// $query3 = "SELECT operator_reg_num, prod_line, performance FROM `p8_op_performance_h` WHERE prod_line LIKE '%ISA201%' AND cur_date = DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y')";
// $rslt3 = $con->query($query3);

// $tab3 = [];
// while ($item3 = $rslt3->fetch_assoc()) {
//     $tab3[] = $item3;
// }

// // echo json_encode($tab3);


// $query4 = "SELECT DISTINCT operator_reg_num, prod_line FROM `p5_presence` WHERE cur_date = DATE_FORMAT(CURRENT_DATE, '%d/%m/%Y') AND prod_line LIKE '%ISA201%'";
// $rslt4 = $con->query($query4);
// $tab4 = [];
// while ($item4 = $rslt4->fetch_assoc()) {
//     $tab4[] = $item4;
// }
// $p = count($tab4);
// $i2 = 0;
// $performance = 0;
// while (count($tab3) >= $i2) {
//     $performance += $tab3[$i2]['performance'];
//     $i2++;
// }

// // json_encode($tab4);

// // echo "\r\n Nombre des paquets engagés = ", json_encode ($T = count($tab)), "\n"; //nombre des Paquets engagés

// // echo " La Quantité Engagée = ", json_encode ($qengaged),"\n";

// // echo " Nombre des paquets encours = ",json_encode( count($tab) - count($tab2)), "\n"; //nombre des Paquets engagés

// $qencours = $qengaged - $qfab;

// // echo "La Quantité encours = ", json_encode($qencours), "\n";

// // echo " La Quantité Fabriquée = ", json_encode($qfab), "\n";

// $cq = ($qdf / $qfab) * 100;

// // echo " Indice de controle qualité = ",  json_encode(number_format($cq,2)), "%";

// // echo "Performance de la chaine = ", json_encode($performance / $p);

echo json_encode([
    "qengaged" => $qengaged,
    // "qencours" => $qencours,
    // "qfab" => $qfab,
    // "cq" => $cq,
    // "performance" => $performance,
]);
