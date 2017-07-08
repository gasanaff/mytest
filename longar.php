<?php
class longAr

{
	
	public function lsmulti($a,$b,$base = 1000000){
		if (!is_array($a) or !is_int($b)){
			return false;
		}
		$a_size = count($a);
		for ($i=0; $i < $a_size ; $i++) {
			$cur = $carry + $a[$i] * $b;
			$a[$i] = $cur % $base;
			$carry = (int)($cur / $base);
			if ($i+1 == $a_size) {
				$a[] = $carry;
				continue;
			}
		}
		while ($a_size > 1 and (end($a) == 0)) {
			array_pop($a);
		}
		return $a;
	}

	public function llmulti($a,$b,$base = 1000*1000/**1000*/){
		if (!is_array($a) or !is_array($b)) {
			return false;
		}
		$c = array();
		for ($i=0; $i < count($a); $i++) { 
			for ($j=0; $j < count($b); $j++) {
				$cur = $a[$i] * $b[$j] + $c[$i+$j];
				$c[$i+$j] = $cur%$base;
				$buf = (int)($cur/$base) + $c[$i+$j+1];
				if ($buf >= $base) {
					$c[$i+$j+1] = ($buf%$base);
					$c[$i+$j+2] = (int)($buf/$base) + c[$i+$j+2] ;
				}
				else
					$c[$i+$j+1] = $buf;
				$ij = $i+$j;

				echo " \$i = $i; \$j = $j;<p> 
				\$a[$i] = $a[$i]<p>\$b[$j] = $b[$j];<p> 
				\$cur = $cur <p>
				\$cur%\$base =". $cur%$base ." <p> 
				\$buf = ".$buf."<p>
				\$c[$ij] = $c[$ij]<p>"; 
				echo 'c[]='; print_r($c);
				echo "<p>__________________________________________________________________</p>";
			} 
		}
		while (count($c) > 1 and (end($c) == 0)) {
			array_pop($c);
		}
		return $c;
	}

	public function printres($a){
		$a_size = count($a) - 1;
		for ($i = $a_size; $i >= 0 ; $i--) {
			printf  (($i == $a_size ) ? $a[$a_size] : "%06d", $a[$i]);
		}
		// print_r($a);
	}

}
//второй коммит
//третий коммит
//дополнение в третему коммиту
//четвертый
