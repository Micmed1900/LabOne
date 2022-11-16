<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика PHP </title>
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
                    <?php  echo '<img src="/img/Pskov+.png">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                        <?php echo $name, ' ', $surname . '<br>';?>                                                                 
                    </p>
                    <p>
                         <?php echo 'город', ' ', $city; ?>  
                    </p>     
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Меня научили создавать переменные </p>
                    <p> Я изучил простые операции с ними </p>
                </div>
            </div>
            <div class="knowledge">
                <?php  include 'knowledge.inc.php'; ?>
                <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                <br> 
                              
                <?php $a = 9;
                      $b = 8;
                      $c = $a + $b;
                      echo $c;
                ?>   <br> 
                <br>               
                <?php
                     echo $d;
                ?> <br> <br> 
           
            </div>  
            <p class="article_summ">сложение двух переменных</p>       
            <div class="forma">
                            <form action="summ.php" method="get">
                               Введите число 1: <input type="int" name="firstName"><br>
                               Введите число 2: <input type="int" name="lastName"><br>
                               <input type="submit">
                             </form>

                          </div>
            

            <div class="article">
              
                  <marquee scrollamount="7" style="color: #D9470D; font-size: 40px; font-weight: bolder; line-height: 150%; text-shadow: #000000 0px 1px 1px;">PHP (Hypertext PreProcessor, препроцессор гипертекста) — язык программирования,
                    исполняемый на стороне веб-сервера. Обычный PHP-сценарий — это набор выражений. Каждое выражение начинается с новой строки и заканчивается точкой с запятой.</marquee>
                    
                
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
