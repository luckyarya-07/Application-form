<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>





<?php 

$aa = array(

array(
'name' => 'Lucky Arya',
'class' => 'B',
'roll' => 33,
),
array(
'name' => 'Aman Rana',
'class' => 'A',
'roll' => 13,
),
array(
'name' => 'Rohit Kumar ',
'class' => 'F',
'roll' => 54,
),
array(
'name' => 'Vikas',
'class' => 'G',
'roll' => 24,
),
array(
'name' => 'Jerry',
'class' => 'A',
'roll' => 44,
),

array(
'name' => 'Mohit ',
'class' => 'H',
'roll' => 66,
),
array(
'name' => 'Jon',
'class' => 'T',
'roll' => 65,
),
array(
'name' => 'Sam',
'class' => 'A',
'roll' => 77,
),

);


echo '<table border="1">';
echo '<tr><th>Name</th><th>Class</th><th>Roll no.</th></tr>';
foreach( $aa as $value )
{
    echo '<tr class="tdclass">';
    foreach( $value as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';


?>

<script type="text/javascript">
	$(".tdclass").click(function(){
		$(".tdclass").css("background-color", "yellow");
    alert($(this).text());
    
});
</script>

</body>
</html>


















