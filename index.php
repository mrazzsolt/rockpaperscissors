<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Kopapirollo</title>
</head>
<body onload = "hide();">
    <div>
    <h3>Kattints a képre amit választanál.</h3>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
        <input type="image" OnClick="hide();" src="rock.jpg" alt="barmi" name="rock" width='100' height='100'>
        <input type="image" OnClick="hide();" src="paper.png" alt="barmi" name="paper" width="100" height="100">
        <input type="image" OnClick="hide();" src="scissors.png" alt="barmi" name="scissors" width="100" height="100">
        
    </form>
    <?php
    session_start();
    if(isset($_GET["new"])||!isset($_SESSION['j']))
    {
    $_SESSION['j']=0;
    $_SESSION['g']=0;
    }
    $jatekos="";
    
    if(isset($_GET['rock_x']))
    {
        $jatekos=1;
       
    }
    if(isset($_GET['paper_x']))
    {
        $jatekos=2;
       
    }
    if(isset($_GET['scissors_x']))
    {
        $jatekos=3;
       
    }
    $gep=rand(1,3);
    //print $gep."-".$jatekos;
    print "<div>Utolsó küzdelem:</div>";
    if($jatekos==$gep)
    {
        if($jatekos==1)
        {
        print "<div><img src='rock.jpg' width='100' height='100' alt='' size='' srcset=''><img src='rock.jpg' width='100' height='100' alt='' size='' srcset=''><br><p>Döntetlen</p></div>";
        }
        if($jatekos==2)
        {
        print "<div><img src='paper.png' width='100' height='100' alt='' size='' srcset=''><img src='paper.png' width='100' height='100' alt='' size='' srcset=''><br><p>Döntetlen</p></div>";
        }
        if($jatekos==3)
        {
        print "<div><img src='scissors.png' width='100' height='100' alt='' size='' srcset=''><img src='scissors.png 'width='100' height='100' alt='' size='' srcset=''><br><p>Döntetlen</p></div>";
        }
    }
    elseif($jatekos==1&&$gep==2)
    {
        print "<div><img src='rock.jpg' width='100' height='100' alt='' size='' srcset=''><img src='paper.png' width='100' height='100' alt='' size='' srcset=''><br><p>Gép nyert</p></div>";
        $_SESSION['g']++;
    }
    elseif($jatekos==1&&$gep==3)
    {
        print "<div><img src='rock.jpg' width='100' height='100' alt='' size='' srcset=''><img src='scissors.png' width='100' height='100' alt='' size='' srcset=''><br><p>Ön nyert</p></div>";
        $_SESSION['j']++;
    }
    elseif($jatekos==2&&$gep==3)
    {
        print "<div><img src='paper.png' width='100' height='100' alt='' size='' srcset=''><img src='scissors.png' width='100' height='100' alt='' size='' srcset=''><br><p>Gép nyert</p></div>";
        $_SESSION['g']++;
    }
    elseif($jatekos==2&&$gep==1)
    {
        print "<div><img src='paper.png' width='100' height='100' alt='' size='' srcset=''><img src='rock.jpg' width='100' height='100' alt='' size='' srcset=''><br><p>Ön nyert</p></div>";
        $_SESSION['j']++;
    }
    elseif($jatekos==3&&$gep==1)
    {
        print "<div><img src='scissors.png' width='100' height='100' alt='' size='' srcset=''><img src='rock.jpg' width='100' height='100' alt='' size='' srcset=''><br><p>Gép nyert</p></div>";
        $_SESSION['g']++;
    }
    elseif($jatekos==3&&$gep==2)
    {
        print "<div><img src='scissors.png' width='100' height='100' alt='' size='' srcset=''><img src='paper.png' width='100' height='100' alt='' size='' srcset=''><br><p>Ön nyert</p></div>";
        $_SESSION['j']++;
    }
    

    $a= $_SESSION['j'];
    $b= $_SESSION['g'];
    print "<br><p>Az állás:   Ön: ".$_SESSION['j']." - Gép: ".$_SESSION['g']."</p>";

    ?>
    <div id="gep">
        <p>Gép:</p>
    <img id="img" width='100' height='100' src="rock.jpg"/>
    </div>
    
</body>
</html>