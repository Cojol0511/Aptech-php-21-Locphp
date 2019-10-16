<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <?php
    $product = [
        [
            "name" => "Red",
            "price" => "900",
            "currency" => "VND",
        ],
        [
            "name" => "Blue",
            "price" => "1000",
            "currency" => "VND",
        ],
        [
            "name" => "Green",
            "price" => "1500",
            "currency" => "VND",
        ],
        [
            "name" => "Gray",
            "price" => "1700",
            "currency" => "VND",
        ],
        [
            "name" => "Black",
            "price" => "2200",
            "currency" => "VND",
        ],
    ];
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Currency</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < 5; $i++){
                $n = $product[$i]['name'];
                $p = $product[$i]['price'];
                if($p > 1500){
                    $pri = "00VND";
                    $p =(float) $p/1000;
                    $pri = (float)$p.$pri; 
                }else{
                    $pri = $p."VND";
                }
                echo "
                    <tr>
                        <td>$i</td>
                        <td>$n</td>
                        <td>$pri</td>
                    </tr>";
            }
                ?>
                 </tbody>
    </table>

</body>

</html>