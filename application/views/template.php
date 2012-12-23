<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <?php foreach($company_info as $company_info_data): ?>
        <title><?php echo $company_info_data['name']?></title>
        <?php endforeach; ?>
        <?php foreach ($stylesheet as $style): ?>
        <link rel="stylesheet" href="<?php echo URL::base().'media/css/'.$style?>.css" type="text/css" media="screen">
        <?php endforeach; ?>
        
        <?php foreach ($javascript as $javascript): ?>
        <script src="<?php echo URL::base()?>media/javascript/<?php echo $javascript; ?>.js" type="text/javascript"></script>
        <?php endforeach ?>
        
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        </script>
        
        <script type="text/javascript">

	$(document).ready(function(){

	    $("#myController").jFlow({

			controller: ".jFlowControl", // must be class, use . sign

			slideWrapper : "#jFlowSlider", // must be id, use # sign

			slides: "#mySlides",  // the div where all your sliding divs are nested in

			selectedWrapper: "jFlowSelected",  // just pure text, no sign
			
			effect: "flow", //this is the slide effect (rewind or flow)

			width: "430px",  // this is the width for the content-slider

			height: "300px",  // this is the height for the content-slider

			duration: 500,  // time in milliseconds to transition one slide
			
			pause: 5000, //time between transitions

			prev: ".jFlowPrev", // must be class, use . sign

			next: ".jFlowNext", // must be class, use . sign

			auto: true	

    });

});

</script>
        
    </head>

    <body>

        <div id="upbg"></div>

        <div id="outer">

                    <!-- mostramos el header -->
                    <?php echo View::factory('templates/header')?>

                    <div id="content">

                            <!-- mostramos el normal content -->
                            <?php echo View::factory('templates/normal_content')?>

                            <!-- mostramos el primary content -->
                            <?php echo $content; ?>

                            <!-- mostramos el secondary content -->
                            <?php echo View::factory('templates/secondary_content') ?>

                    </div>
                
                    <!-- Mostramos el footer -->
                    <?php echo View::factory('templates/footer')?> 
        </div>   

    </body>
    
</html>