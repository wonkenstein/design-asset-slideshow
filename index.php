<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Generic Title</title>

    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<style type="text/css">
body {background-color:#333;} /* Set this to color of the images  */
.container {width: 1024px;} /* Set this to the width of the images */
.flex-direction-nav a {background-color:#FFF; color:#FFF; height:28px; width:27px;} /* For the navigation */

</style>
</head>
<body>
	 <div class="container">

	 	<div class="flexslider">

            <ul class="slides">

                <?php
                // files are put into alphabetical order
                $dir = 'assets';
                if ($handle = opendir($dir)) {
                    while (false !== ($entry = readdir($handle))) {
                        if (!preg_match('#^\..*#', $entry)) {
                            $files[] = $entry;
                        }
                    }
                    closedir($handle);
                    sort($files);
                    foreach ($files as $f) {
                        echo '<li><img src="' . $dir . '/' . $f . '" /></li>' . "\n";
                    }
                }
                ?>
            </ul>

        </div>

     </div>
</body>

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!-- FlexSlider -->
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript">

    $(window).load(function() {
      $('.flexslider').flexslider({

		slideshow: false,
		animationSpeed: 0
      });
    });

</script>

<!-- NavMenu -->
<script type="text/javascript">

    $(function() {
        var pull        = $('#pull');
            menu        = $('header nav ul');
            menuHeight  = menu.height();

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
    });
    $(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menu.is(':hidden')) {
        menu.removeAttr('style');
    }
});

</script>

</html>
