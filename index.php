<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head runat="server" prefix="og: http://ogp.me/ns#">

    <?php
		include_once "modules/includes/head.php";			
	?>
    
    <title> Título Página </title>
    <meta property="og:title" content="Título Página">
    <meta name="description" content="<!-- limit to 140 characters-->"> 
    <meta property="og:description" content="Descrição">
    <meta property="og:image" content="<!-- 1200x630 -->"> 
    <meta property="og:image:width" content="valor em px"> 
    <meta property="og:image:height" content="valor em px"> 
    <meta property="og:url" content="URL">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href=""/>    

</head>
</head>
<body>

	<?php
		include_once "modules/includes/webpack.php";			
	?>
    <script async data-main="/js/common.min" src="//src.inf.br/vendor/require/require.min.js"></script>

</body>
</html>