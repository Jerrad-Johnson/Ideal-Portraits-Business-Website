        
<?php include 'includes/header.php'; ?>

        <meta name="description" content="I do portrait photography for Rapid City, SD. and the surrounding area. I shoot with high school seniors, children, groups, individuals, and models.">
        <title>Ideal Portraits | Portrait Photographer - Rapid City, South Dakota</title>

<?php include 'includes/header2.php'; ?>


<br />
<div class="contentarea">
    <div class="contentleft">
        <h1 class="headline">PORTRAIT PHOTOGRAPHER IN RAPID CITY, SD.</h1>

        <span class="subheadline">My name is Jerrad Johnson, and I’m a local photographer who serves Rapid City, SD. and the surrounding area. I've been doing photography since '08, and I opened Ideal Portraits in ’14. I hope to capture images that you'll want to keep on your shelf for decades!</span>
<br /><br />
    <script>
        jQuery(document).ready(function() { 
            jQuery("#gallery").justifiedGallery({
                lastRow : 'hide', 
                rowHeight : 240, 
                rel : 'gallery1', //replace with 'gallery1' the rel attribute of each link
                margins : 3,
                randomize : true,
                captions : false,
                waitThumbnailsLoad : true
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
            $dir = "Pictures/Home";
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
    </div>


<!-- 
        <br /><br />
<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>

    <div class="callbacks_container">
        <ul class="rslides" id="slider1">
            <li><img src="Pictures/Slideshow/home/portrait-at-canyon-lake-in-the-winter.jpg" alt=""></li>
            <li><img src="Pictures/Slideshow/home/portrait-in-downtown-rapidcity-2.jpg" alt=""></li>
            <li><img src="Pictures/Slideshow/home/portrait-in-the-fall-south-dakota.jpg" alt=""></li>
        </ul>
    </div>
-->

        <br /><br />

        <span class="subheadline">I consider my portrait style to be traditional; I’ve been told that my models appear “living.” And I take that as a compliment! You can learn a little about my personality from my portfolio. Likewise, your friends should see your personality in your portraits! </span>
        <span class="subheadline"><b>You</b> are my main subject; I want to show you in your best light. When we work together, I’ll focus on your posture, gaze, and your smile! When you browse my galleries, you’ll notice that I remove most blemishes – but I try to keep your skin’s texture. My edits are mild – I want you to appear real, not like a porcelain doll.</span>
        <span class="subheadline">I'm very open-minded. If you have a suggestion or an idea, please share; this is your shoot more than mine!  You’re unique, and you can let that shine your pictures.</span>
        <span class="subheadline"> Choose outfits that best represent your personality, and props that are important to you - that show your likes or dislikes, your goals and achievements. Find poses you want to try. Your pictures represent your life; they’ll go into your picture album to share with your children and grandchildren. But, there's no need to stress about this. </span>
        <span class="subheadline"> If you come to me with nothing more specific than a desire for portraits, you'll get my quality work! This is what I do; you can let me worry about the details.</span>

        <br /><br />
    
        <script>
        jQuery(document).ready(function() { 
            jQuery("#gallery2").justifiedGallery({
                lastRow : 'hide', 
                rowHeight : 240, 
                rel : 'gallery1', //replace with 'gallery1' the rel attribute of each link
                margins : 3,
                randomize : true,
                captions : false,
                waitThumbnailsLoad : true
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
                $dir = "Pictures/Home-Studio";
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
        </div>
    </div>
</div>
    <div class="contentright" style="margin-bottom:20px;">
        <span class="quotebodyfirst">Excellent photographer and experience!! I am very pleased with how patient and open the photographer was to trying new things! Definitely someone I hope to work with again in the future! :) Everything turned out great!</span>
        <br /><br /><span class="quoteauthor">- Sophia Beatty</span>
        <br /><br />

        <span class="quotebody">Absolutely amazing photographer! I had such a wonderful, fun, and comfortable experience! My photos turned out great and I also learned so much as well! I definitely recommend Ideal Portraits!</span>
        <br /><br /><span class="quoteauthor">- Tehya Cox</span>
        <br /><br />

        <span class="quotebody">I had a great time doing this shoot. It was quite different from other shoots I've done and as others have said, he's very open to suggestions and trying new things. 10 out of 10 would pose for again. Lol :)</span>
        <br /><br /><span class="quoteauthor">- Sachiana Daum</span>
        <br /><br />

        <span class="quotebody">Great work and overall fun shoot! Jerrad was very comfortable to shoot with and his instructions were easy. Would recommend to anyone.</span>
        <br /><br /><span class="quoteauthor">- Regalia Rawlins</span>




    </div>





<?php include 'includes/footer.php'; ?>