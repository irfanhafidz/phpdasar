<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>P6 - Latihan 1</title>
        <style>
            .kotak{
                width: 60px;
                height: 60px;
                background-color: skyblue;
                line-height: 60px;
                text-align: center;
                margin: 3px;
                border: 10px;
                float: left;
                transition: 1s;
                font-size: 50px;
                
            }
            .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
            background-color: gold;
            }
            .clear{clear:both}
        </style>
    </head>
<body>
    <?php $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
        ];
    ?>
    <?php foreach($angka as $an):?>
        <?php foreach($an as $a):?>
    <div class="kotak"><?=$a;?></div>
        <?php endforeach ?>
        <div class="clear"></div>
    <?php endforeach ?>
            <div class="clear"></div>

    <div><br></div>

    <div class="kotak"><?= $angka [2][2] * $angka[1][2];?></div>
        
</body>
</html>