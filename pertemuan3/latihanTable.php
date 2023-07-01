<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .warna-baris{
        background-color: silver;
    }
</style>

<body>

    <?php
        /*
            membuat table dengan 3 baris
            dan masing-masing baris mempunyai 5 kolom
        */
    ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j" ?></td>
                <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>

</body>

</html>