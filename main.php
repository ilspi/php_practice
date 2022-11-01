<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/practice/img/9.jpg">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . ',<br>';
                          echo 'я живу в г.', ' ', $city; echo ', и мне', ' ', $age, ' лет.'?></p>
                    <p> Мы научились создавать переменные<br>и изучили простые операции с ними. </p>
                </div>
            </div>

            <div class="knowledge">
                    <?php  include 'knowledge.inc.php'; ?>
                    <p>Курсы валют на сегодня <?php   echo $date; ?> г.</p>
                    <p>Доллар = <?php   echo $usd; ?> руб.</p>
                    <p>Евро = <?php   echo $eur; ?> руб.</p>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?>

            </div>

            <div class="article">
                <p class="text">
                    В настоящее время прохожу обучение на курсе "Белый хакер". Увлекаюсь горным велосипедом, спортивной рыбалкой и водно-моторной тематикой.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
