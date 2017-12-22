<?php
function clear($clear){
	return trim( strip_tags( $clear ) );
}
function html($html){
	return trim( htmlspecialchars( $html ) );
}
?>