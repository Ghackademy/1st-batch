<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Slider Page</title>
<!--layout CSS-->
<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" />
<!--login register CSS-->
<link href="<?php echo base_url();?>/assets/css/modal.css" rel="stylesheet" />
<!--Social link CSS-->
<link href="<?php echo base_url();?>/assets/css/socialplugin.css" rel="stylesheet" />
<!--product Detail CSS-->
<link href="<?php echo base_url();?>/assets/css/templatemo_style.css" rel="stylesheet" />
<!--style sheet of categories-->
<link href="<?php echo base_url();?>/assets/css/styles.css" rel="stylesheet" />

<!--Jquery attachment-->
<script language="javascript" type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-1.10.2.min.js"></script>
  
 <!-- liteAccordion css -->
        <link href="<?php echo base_url();?>/assets/css/liteaccordion.css" rel="stylesheet" />

        <!-- easing -->
        <script src="<?php echo base_url();?>/assets/js/jquery.easing.1.3.js"></script>

        <!-- liteAccordion js -->
        <script src="<?php echo base_url();?>/assets/js/liteaccordion.jquery.js"></script>
</head>

<body>
    
<!--start of slider-->
<div style="margin-top:20px; margin-bottom:20px;">
 <div id="four">
            <ol>
                <?php foreach($sliderdata as $a): ?>
                <li>
                    
                    <h2><span><?php echo $a->title;?></span></h2>
                    <div>
                        <img src="<?php echo base_url();?>/uploads/slider/resized/<?php echo $a->image;?>" alt="image" />
                    </div>
                </li>
                <?php endforeach; ?>
            </ol>
            <noscript>
                <p>Please enable JavaScript to get the full experience.</p>
            </noscript>
        </div>
   
       <!-- liteAccordion demos, social & analytics -->
        <script>
            (function($, d) {
                // please don't copy and paste this page
                // it breaks my analytics!

                // demos
                $('#one').liteAccordion({
                        onTriggerSlide : function() {
                            this.find('figcaption').fadeOut();
                        },
                        onSlideAnimComplete : function() {
                            this.find('figcaption').fadeIn();
                        },
                        autoPlay : true,
                        pauseOnHover : true,
                        theme : 'stitch',
                        rounded : true,
                        enumerateSlides : true
                }).find('figcaption:first').show();
                $('#two').liteAccordion();
                $('#three').liteAccordion({ theme : 'dark', rounded : true, enumerateSlides : true, firstSlide : 2, linkable : true, easing: 'easeInOutQuart' });
                $('#four').liteAccordion({ theme : 'light', firstSlide : 3, easing: 'easeOutBounce', activateOn: 'mouseover' });

                // social links
                var js, id = 'facebook-jssdk';

                if (d.getElementById(id)) return;

                js = d.createElement('script');
                js.id = id;
                js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                d.getElementsByTagName('head')[0].appendChild(js);

                // Load Plus One Button
                jQuery.getScript('https://apis.google.com/js/plusone.js');
                // Load Tweet Button Script
                jQuery.getScript('https://platform.twitter.com/widgets.js');
                // Load LinkedIn button
                jQuery.getScript('https://platform.linkedin.com/in.js?v=2');
            })(jQuery, document);

            // analytics
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17442910-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>

</div>
<!--end of slider-->

</body>
</html>
