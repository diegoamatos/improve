<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php
    require __DIR__ . "/../vendor/autoload.php";

    $op = new \SimpSyst\Improve\Improve();
    echo $op
        ->improver(
            "Improve Happy and @SimpSyst",
            "Is a compact and easy-to-use tag creator to improve your site",
            "https://www.diegomatos.com/simpsyst/improve/example/",
            "https://www.diegomatos.com/storage/images/cache/tutorial-blockchain-para-iniciantes-aprenda-a-tecnologia-blockchain-800x500-34fd23f6.jpg"
        )
        ->publisher(
            "diegomatos",
            "diegomatos",
            "10208016753915836",
            "10208016753915836"
        )
        ->twitterCard(
            "@diegoamatos",
            "@diegoamatos",
            "diegomatos.com",
            "summary_large_image"
        )
        ->openGraph(
            "diegomatos",
            "pt_BR",
            "article"
        )
        ->facebook(null, ["1444863255776758", "10208016753915836"])
        ->render();
    ?>
</head>
<body>

<h1><?= $op->title; ?></h1>
<p><?= $op->description; ?></p>

<?php
echo "<pre>", print_r($op->data(), true), "</pre>";
echo "<pre>", print_r(array_map("htmlspecialchars", $op->debug()), true), "</pre>";
?>

</body>
</html>