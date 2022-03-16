<?php include 'includes/header.php'; ?>

        <meta name="description" content="This is my gallery of headshot portraits. I'm a photographer based in Rapid City, SD.">
        <title>Ideal Portraits | Headshot Photographer - Rapid City, South Dakota</title>

<?php include 'includes/header2.php'; ?>
            <br />

            <div class="contentarea">
                <div class="contentleft" style="margin-bottom:20px;">                
                    <h1 class="headline">HEADSHOT PORTRAIT PHOTOGRAPHER IN RAPID CITY, SD.</h1>
                   <!-- 
                    <span class="subheadline">I'm eMETT (micro expression training tool) and eSETT (subtle expression training tool) certified, and I'm currently studying for the FACS (facial action coding system) test. </span>
                    <span class="subheadline">That gives me a major advantage when it comes to facial expressions. I know what it looks like when someone shows a genuine smile, rather than a casual one. And imagine that you want to show toughness or distance - I can tell you how to show anger or contempt in your expression.</span>
                    <span class="subheadline">You'll notice that most of my headshots portraits use a gray or darker background - but if you want white, we'll use white! My preference for dark backgrounds is two fold. First, they cause less technical harm to the image; bright scenes make everything look dull. Second, white makes people look washed out - and the lighter your skin, the worse it is.</span>
                    <span class="subheadline">Before coming to your session, think about the appearance you want. Girls may want to be cute, and guys may want to appear strong. Or if you're a corporate person, you probably want Peter Hurley's suggestion of "confidence and authority."</span> -->
                </div>
                <div class="contentright" style="margin-bottom:20px;">

                </div>


            <script>
                jQuery(document).ready(function() { 
                    jQuery("#gallery2").justifiedGallery({
                        lastRow : 'nojustify', 
                        rowHeight : 250,
                        rel : 'gallery1', //replace with 'gallery1' the rel attribute of each link
                        margins : 3,
                        randomize : false,
                        captions : false,
                        waitThumbnailsLoad : false
                    }).on('jg.rowflush', function () {
                        $(this).find('a').colorbox({
                        maxWidth : '90%',
                        maxHeight : '90%',
                        opacity : 0.8,
                        transition : 'elastic',
                        current : ''
                   });
                });
            });
            </script>

            <div id="gallery2">

                <?php
                    $dir = "Pictures/Headshots-White";
                    $files = scandir($dir);
                    foreach($files as $file) {
                        $ext = strrchr($file, '.');
                        if($ext == ".JPG" || ".jpg"){
                            $search = "-"; $replace = " "; $alt = str_replace($search, $replace, $file);
                            $search = "portraits"; $replace = "portrait"; $alt = str_replace($search, $replace, $alt);
                            $search = ".jpg"; $replace = " "; $alt = str_replace($search, $replace, $alt);
                            $search = ".jpeg"; $replace = " "; $alt = str_replace($search, $replace, $alt);
                            $alt = preg_replace('/[0-9]+/', '', $alt);
                            $alt = trim($alt);
                            echo "<a href=\"$dir/$file\"> <img alt=\"$alt\" src=\"$dir/thumbs/$file\" rel=\"NOFOLLOW\"></a>";
                        }
                    }
                ?>

            <script>
                jQuery(document).ready(function() { 
                    jQuery("#gallery").justifiedGallery({
                        lastRow : 'nojustify', 
                        rowHeight : 250,
                        rel : 'gallery1', //replace with 'gallery1' the rel attribute of each link
                        margins : 3,
                        randomize : false,
                        captions : false,
                        waitThumbnailsLoad : false
                    }).on('jg.rowflush', function () {
                        $(this).find('a').colorbox({
                        maxWidth : '90%',
                        maxHeight : '90%',
                        opacity : 0.8,
                        transition : 'elastic',
                        current : ''
                   });
                });
            });
            </script>
            </div>
            
            <div id="gallery">

                <?php
                    $dir = "Pictures/Headshots";
                    $files = scandir($dir);
                    foreach($files as $file) {
                        $ext = strrchr($file, '.');
                        if($ext == ".JPG" || ".jpg"){
                            $search = "-"; $replace = " "; $alt = str_replace($search, $replace, $file);
                            $search = "portraits"; $replace = "portrait"; $alt = str_replace($search, $replace, $alt);
                            $search = ".jpg"; $replace = " "; $alt = str_replace($search, $replace, $alt);
                            $search = ".jpeg"; $replace = " "; $alt = str_replace($search, $replace, $alt);
                            $alt = preg_replace('/[0-9]+/', '', $alt);
                            $alt = trim($alt);
                            echo "<a href=\"$dir/$file\"> <img alt=\"$alt\" src=\"$dir/thumbs/$file\" rel=\"NOFOLLOW\"></a>";
                        }
                    }
                ?>

                    <?php include 'includes/footer.php'; ?>