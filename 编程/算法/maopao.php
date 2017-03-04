<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
<?php
/*
规律总结：
1，首先，假设数组的长度为n（可获知的）；
2，要比较的趟数为n-1；
3，每一趟要比较的次数都比前一趟少1，而第1趟要比较的次数为n-1次。
4，每次比较，都要完成：将大的数放在右边；
5，每一趟结束后，都必然会确定一个数据放在这一趟的数据的最后位置；
*/
//使用冒泡排序算法将下列数组进行正序排列
$arr1 = array(  15,  11,  8,   12,  18,  9) ;
echo "<br />排序前" . implode(", ", $arr1) ;
$n = count($arr1);	//取得数组的长度
for($i = 0; $i < $n-1; ++$i){//控制趟数！
	for($k = 0; $k < $n-1-$i;  ++$k){//控制每一趟的次数
		//此时，也需要将$k当做（看做）是数组的下标
		if($arr1[$k] > $arr1[$k+1]){//如果左边比右边大，就需要交换
			$temp = $arr1[$k];
			$arr1[$k] = $arr1[$k+1];
			$arr1[$k+1] = $temp;
		}
	}
}
echo "<br />排序后" . implode(", ", $arr1);

?>
</body>
</html>



$arr = array(5,3,4,2,1);
$num = count($arr);

function maopao($arr){
	for($i = 0;$i < $num-1;$i++){
		for($j = 0;$j < $num-$i-1;$j++){
			if($arr[j] > $arr[j+1]){
				$temp = $arr[$j];
				$arr[$j] = $arr[j+1];
				$arr[j+1] = $temp;
			}
		}
	}
	return($arr);
}
