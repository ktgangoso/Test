<?php
$data = array(
    array(
        "StockCode" => "<b>Sembcorp Marine</b> <br> SS1",
        "LastVol" => "<div style='text-align: end;'>0.111 <br> 78.48M",
        "Chng" => "<div style='text-align: end;'>-0.020 <br>-15.3%",
        "BuyVol" => "<div style='text-align: end;'>0.11 <br> 9.11M",
        "SellVol" => "<div style='text-align: end;'>0.111 <br> 2.77M"
    ),
    array(
        "StockCode" => "<b>Tritech</b> <br> 5S9",
        "LastVol" => "<div style='text-align: end;'>0.045 <br> 3.68M",
        "Chng" => "<div style='text-align: end;'>+0.001 <br>+2.3%",
        "BuyVol" => "<div style='text-align: end;'>0.044 <br> 4.41M",
        "SellVol" => "<div style='text-align: end;'>0.045 <br> 6.78M"
    ),
    array(
        "StockCode" => "<b>YZJ Shipbldg SGD</b> <br> BS6",
        "LastVol" => "<div style='text-align: end;'>0.895 <br> 2.69M",
        "Chng" => "<div style='text-align: end;'>+0.015 <br>+1.7%",
        "BuyVol" => "<div style='text-align: end;'>0.89 <br> 484.6K",
        "SellVol" => "<div style='text-align: end;'>0.895 <br> 951.9k"
    ),
    array(
        "StockCode" => "<b>Thomson Medical</b> <br> A50",
        "LastVol" => "<div style='text-align: end;'>0.08 <br> 2.22M",
        "Chng" => "<div style='text-align: end;'>0.000 <br>0.0%",
        "BuyVol" => "<div style='text-align: end;'>0.079 <br> 4.38M",
        "SellVol" => "<div style='text-align: end;'>0.08 <br> 851.7K"
    ),
    array(
        "StockCode" => "<b>Keppel Corp</b> <br> BN4",
        "LastVol" => "<div style='text-align: end;'>6.85 <br> 2.16",
        "Chng" => "<div style='text-align: end;'>+0.190 <br>+2.9%",
        "BuyVol" => "<div style='text-align: end;'>6.85 <br> 24.9K",
        "SellVol" => "<div style='text-align: end;'>6.86 <br> 68.1k"
    ),
    array(
        "StockCode" => "<b>Inti Cement</b> <br> KUO",
        "LastVol" => "<div style='text-align: end;'>0.031 <br> 1.61M",
        "Chng" => "<div style='text-align: end;'>+0.001 <br>+3.3%",
        "BuyVol" => "<div style='text-align: end;'>0.03 <br> 4.21M",
        "SellVol" => "<div style='text-align: end;'>0.031 <br> 8.79M"
    ),
    array(
        "StockCode" => "<b>Genting Sing</b> <br> G13",
        "LastVol" => "<div style='text-align: end;'>0.805 <br> 1.55M",
        "Chng" => "<div style='text-align: end;'>+0.005% <br>+0.6%",
        "BuyVol" => "<div style='text-align: end;'>0.805 <br> 100",
        "SellVol" => "<div style='text-align: end;'>0.81 <br> 2.86M"
    ),
    array(
        "StockCode" => "<b>MM2 Asia</b> <br> 1BO",
        "LastVol" => "<div style='text-align: end;'>0.067 <br> 1.32M",
        "Chng" => "<div style='text-align: end;'>0.000 <br>0.0%",
        "BuyVol" => "<div style='text-align: end;'>0.066 <br> 6.9M",
        "SellVol" => "<div style='text-align: end;'>0.067 <br> 2.33M"
    ),
    array(
        "StockCode" => "<b>Golden Argi-Res</b> <br> ESH",
        "LastVol" => "<div style='text-align: end;'>0.335 <br> 996.3K",
        "Chng" => "<div style='text-align: end;'>0.000 <br>0.0%",
        "BuyVol" => "<div style='text-align: end;'>0.33 <br> 6.58M",
        "SellVol" => "<div style='text-align: end;'>0.335 <br> 2.94M"
    ),
    array(
        "StockCode" => "<b>Rex Inti</b> <br> 5WH",
        "LastVol" => "<div style='text-align: end;'>0.335 <br> 859.1K",
        "Chng" => "<div style='text-align: end;'>0.000 <br>0.0%",
        "BuyVol" => "<div style='text-align: end;'>0.335 <br> 1.54M",
        "SellVol" => "<div style='text-align: end;'>0.34 <br> 1.73M"
    ),
    array(
        "StockCode" => "<b>Matex Inti</b> <br> M15",
        "LastVol" => "<div style='text-align: end;'>0.03 <br> 776.7K",
        "Chng" => "<div style='text-align: end;'>+0.001 <br>+3.4%",
        "BuyVol" => "<div style='text-align: end;'>0.03 <br> 1.32M",
        "SellVol" => "<div style='text-align: end;'>0.031 <br> 3.96M"
    ),
    array(
        "StockCode" => "<b>Dyna-Mac</b> <br> NO4",
        "LastVol" => "<div style='text-align: end;'>0.135 <br> 745.3k",
        "Chng" => "<div style='text-align: end;'>0.000 <br>0.0%",
        "BuyVol" => "<div style='text-align: end;'>0.134 <br> 200",
        "SellVol" => "<div style='text-align: end;'>0.135 <br> 268.7K"
    )

);

header('Content-Type: application/json');
echo json_encode($data);
?>
