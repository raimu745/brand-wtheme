<!-- <?php 
// bloginfo('template_directory');
echo get_template_directory_uri();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <title>Document</title>
</head>
<body>
<?php

get_header('top');
get_header();




get_footer();

?>    
</body>
</html>


