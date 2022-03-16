<?php include 'includes/header.php'; ?>

        <meta name="description" content="This is my gallery of outdoor portraits. I'm a photographer based in Rapid City, SD.">
        <title>Ideal Portraits | Outdoor Photographer - Rapid City, South Dakota</title>

<?php include 'includes/header2.php'; ?>

            <br />
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

<div id="gallery" >

    <?php
        $dir = "Pictures/Outdoor";
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