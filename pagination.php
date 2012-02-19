<?php

$iTotalRows = 50;
$iLimit = 5;

$iPage = (isset($_GET['page'])) ? $_GET['page'] : 1;
$iAdjust = 2;

$iTotalPage = ceil($iTotalRows/$iLimit);

$sHtml = "";

for ( $i = 1 ; $i <= $iTotalPage ; $i++ )
{
	if( $i == $iPage)
	{
		$sHtml .= "<span>" . $i . "</span>";
	}
	
	else
	{
		if( $i <= $iPage+$iAdjust)
		{	
			$sHtml .= "<a href='{$_SERVER['PHP_SELF']}?page=$i'>" . $i . "</a>";
		
		}elseif($i == $iPage+$iAdjust+1){
		
			$sHtml .='...';					
		}
		
		if($i==$iTotalPage)
		{
			$sHtml .= "<a href='{$_SERVER['PHP_SELF']}?page=$i'>" . $iTotalPage . "</a>";
		}
		
		
	}
}

echo $sHtml;