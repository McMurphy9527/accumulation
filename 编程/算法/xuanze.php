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
2，要从中找出最大值的趟数为n-1趟；
3，每一趟要从中找的数据的个数总是比前一趟少一个，但第一趟要从n个中找。
4，每一趟找出最大值和其下标后，都要将它跟这一趟的最后一个数据进行交换位置。
*/
//使用选择排序算法将下列数组进行正序排列
$arr1 = array(  15,  11,  8,   12,  18,  9) ;
echo "<br />排序前" . implode(", ", $arr1) ;
$n = count($arr1);	//取得数组的长度
for($i = 0; $i < $n-1; ++$i){//控制趟数！
	//这是一趟，目的是找“剩余数据”中的最大值及其下标
	$max = $arr1[0];	//所以，得先把第一项取得
	$max_pos = 0;		//以及对应第一项的下标取得
	for($k = 0; $k < $n-$i;  ++$k){//控制要查找的数据的个数
		//这里，$k同样要理解为，也是数组的下标！
		if($arr1[$k] > $max){
			$max = $arr1[$k];
			$max_pos = $k;
		}
	}
	//下面，找出来之后，再去交换！
	//先确定目前剩余项的最后一项的下标
	$pos_last = $n-1-$i;	
	//然后开始交换：
	$temp = $arr1[$max_pos];
	$arr1[$max_pos] = $arr1[$pos_last];
	$arr1[$pos_last] = $temp;
}
echo "<br />排序后" . implode(", ", $arr1) ;
?>
</body>
</html>
