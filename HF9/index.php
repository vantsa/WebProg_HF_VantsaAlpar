<?php

function getData(string $url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response_json = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response_json, false);
    return $response;
}

if(isset($_POST['submit'])){
    if(isset($_POST['id'])){
        $sum = 0;
        $url = "https://fakestoreapi.com/carts/user/" .$_POST['id'];
        $data = getData($url);

        foreach($data as $order){
            foreach($order->products as $product){
                $process = getData("https://fakestoreapi.com/products/" . $product->productId);
                $sum += $process->price * $product->quantity;
            }
        }

        print "<h1>Végösszeg:  $sum $</h1>";
    }
}

?>



<form action="index.php" method="post">
    User:<input type="number" placeholder="ID" name="id">
    <input type="submit" value="Számol" name="submit">
</form>
