<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<link rel ="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		<nav>
			<?php require 'nav.php';?>
		</nav>
		<section class="paddingSection">
		<br/>
		<h2>3단</h2>
		<table style="border-collapse:collapse;" width = "100">
			<?php 
			function multiply($i) {
			    for($int = 1; $int <= 9; $int++){
			        $total = $i * $int;
			        echo "<tr><td style = 'border:solid 1px' align='center'>$i x $int = $total</td></tr>";
			    }
			}
			echo  multiply(3);
			?>
		</table>
		<br/>
		<table border = 1>
			<?php 
			for($i = 1; $i <= 9; $i++){
       		    for($j = 2; $j <= 9; $j++){
			        $total = $i * $j;
			        echo "$i x $j = $total   ";
			        if($j % 9 === 0){echo "<br/>";}
			    }
			}
			?>
		</table>
		<table style ="border-collapse: collapse;">
			<?php 
			 $number = array(12,3,5,29,33,1,23);
			 //  정렬식
			 echo "<h2>내림차순 정렬식</h2>";
			 function testSort($number) {
			     for($i = 0; $i < count($number); $i++){
			         $maxIndex = $i;
			         $maxValue = $number[$i];
			         for($j = $i; $j < count($number); $j++){
			             if($maxValue < $number[$j]){
			                 $maxValue = $number[$j];
			                 $maxIndex = $j;
			             }
			         }
			         $temp = $number[$i];
			         $number[$i] = $number[$maxIndex];
			         $number[$maxIndex] = $temp;
			     };
			     return $number;
			 }
			 $number = testSort($number);
			 echo "<tr>";
			 for($i = 0; $i < count($number); $i++){
			     echo "<td style='border:solid 1px' align='center' width='100px'>$number[$i]</td>";
			 }
			 echo "</tr>";
			?>
		</table>
		</section>		
	</body>
</html>

<?php
    for($int = 1; $int <= 9; $int++){
        if($int === 6) continue;
        $total = $int * 2;
        echo "<br/>2 x ".$int." = ".$total; 
    }
    $num = 1;
    while($num <= 9){
        $total = $num * 2;
        echo "<br/>2 x ".$num." = ".$total;
        $num += 1;
    }
    echo "<br/>";
    function plus ($a , $b) {
        return $a + $b;
    }
    
    $member = array('a', 'b', 'c', 'd', 'e');
    for($i = 0; $i < count($member); $i++){
        echo "<br/>".$member[$i];
    }
    
    function get_numbers() {
        return ['a', 'b', 'c', 'd'];
    }
    var_dump(get_numbers());
    
    echo "<br/>";

    $tem = get_numbers();
    
    echo $tem[1];
    
    echo "<br/>";
    $testArray = array('a', 'b', 'c', 'd', 'e', 'f');
    echo "<br/>";
    var_dump($testArray);
    echo "<br/>";
    // 배열 마지막 + 1 인덱스에 추가
    array_push($testArray, 'zz');
    var_dump($testArray);
    echo "<br/>";
    // 배열 0번째 방에 추가
    array_unshift($testArray, 'bb');
    var_dump($testArray);
    echo "<br/>";
    // 6,0 6자리의 앞  6,1 6번째 자리  6,2 6의 뒷자리
    array_splice($testArray, 6, 2, 'AA');
    var_dump($testArray);
    echo "<br/>";
    // 배열 마지막 삭제
    array_shift($testArray);
    var_dump($testArray);
    echo "<br/>";
    // 배열 0번째 삭제
    array_pop($testArray);
    var_dump($testArray);
    
    // 배열을 키값으로 저장ㄴ
    $testArray01 = array('a'=>10, 'b'=>20, 'c'=>30);
    var_dump($testArray01);
    echo "<br/>".$testArray01['a'];
    echo date('Y-n-j H:m:s');
?>