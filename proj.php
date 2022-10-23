<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pn.css">
    <title>Simple Calculator</title>
</head>
<body bgcolor="wheat">
    <?php
error_reporting(E_ALL ^ ~E_NOTICE);
if(isset($_GET['submit']) && $_GET['n1'] != '' && $_GET['n2'] != ''){
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$op = $_GET['operators'];

switch($op){
case 'add': $output = $n1 + $n2; break;
case 'sub': $output = $n1 - $n2; break;
case 'mul': $output = $n1 * $n2; break;
case 'div': $output = $n1 / $n2; break;

}
}
if(isset($_GET['reset'])){
$n1 = '';
$n2 = '';
$output = '';



}

?>
    <header class="head">
        <div class="head-m">
            <div class="head-s">
                <h1 class="head-h">
                    <pre>
                    <span>U</span>
                    <span>N</span>
                    <span>I</span>
                    <span>V</span>
                    <span>E</span>
                    <span>R</span>
                    <span>S</span>
                    <span>I</span>
                    <span>T</span>
                    <span>Y</span>
                    <span> </span>
                    <span>O</span>
                    <span>F</span>
                    <span> </span>
                    <span>H</span>
                    <span>A</span>
                    <span>R</span>
                    <span>G</span>
                    <span>E</span>
                    <span>I</span>
                    <span>S</span>
                    <span>A</span>
                </pre>
                </h1>
                <div class="head-h-i-h"></div>
                <img src="./download.png" class="head-h-i" alt="" height="100">
            </div>
            <div class="head-s2">
                <h2 class="head-h2">
                    <pre>
                        <span>F</span>
                        <span>A</span>
                        <span>C</span>
                        <span>U</span>
                        <span>L</span>
                        <span>T</span>
                        <span>Y</span>
                        <span> </span>
                        <span>O</span>
                        <span>F</span>
                        <span> </span>
                        <span>C</span>
                        <span>O</span>
                        <span>M</span>
                        <span>P</span>
                        <span>U</span>
                        <span>T</span>
                        <span>I</span>
                        <span>N</span>
                        <span>G</span>

                    </pre>
                </h2>
            </div>
        </div>
    </header>
    <div class="simple-calc">
        <h1>SIMPLE CALCULATOR</h1>
        <p class="simp-p">it's a simple calculator that can perform basic arithmetic operations</p>
    </div>
    <div class="hold-form">
        <form action="" method="get" class="form">
        <div class="inputs">
            <input type="text" class="in-num" name="n1" value="<?= $n1 ?>" placeholder="1st">
            <input type="text" class="in-num" name="n2" value="<?= $n2 ?>" placeholder="2nd">
        </div>
        <div class="p-2">
        <div class="operators">
            <select name='operators' id="select" value='<?= $op ?>'>
                <option class='option'value="add">+</option>
                <option class='option'value="sub">-</option>
                <option class='option'value="mul">x</option>
                <option class='option'value="div">/</option>
            </select>
        </div>
        <div>
            <input type="text" class="in-num res" value="<?= $output ?>" disabled placeholder="out">
        </div>
        <div class="btns">
            <input type="submit" value="CALCULATE" class="in-btn submit" name="submit">
            <input type="submit" value="RESET" class="in-btn reset" name="reset">
        </div>
        </div>
        </form>
    </div>
    <footer class="foot">
        <div class="foot-d">
            <p class="foot-p">&copy; Made by Yaser Issa</p>
        </div>
    </footer>
</body>
</html>