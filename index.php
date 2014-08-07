<?php

echo <<<HTML
<html>
    <head>
        <script type='text/javascript' src='//code.jquery.com/jquery-latest.min.js'></script>
        <script type='text/javascript' src='fillview.js'></script>
        <script>
            $(function () {
                $('.containers').fillView({width: 300, height: 500});
            });
        </script>
        <style>
            * {font-family: sans-serif;}
            #title {max-width:500px;text-align: center;margin: auto;font-size: 30px;border-bottom: solid thin #444;padding: 10px 0;}
            #par {max-width: 600px;text-align: center;margin: auto;}
            .containers {padding: 20px 0;margin: auto;}
        </style>
    </head>
    <body>
        <div id='title'>Fill View</div>
        <div id='par'>
            <div class='containers'>
                <img src='http://photos-f.ak.instagram.com/hphotos-ak-xaf1/10570029_281378175381589_1021971180_n.jpg'/>
            </div>
            <div class='containers'>
                <img src='http://upload.wikimedia.org/wikipedia/commons/e/eb/Big_ben_closeup.jpg'/>
            </div>
            <div class='containers'>
                <img src='https://lh5.googleusercontent.com/-KYUa3guBkJc/UMEW3F9i-lI/AAAAAAAAABI/LoDK4_4W45s/s290-no/nL0402.jpg'/>
            </div>
            <div class='containers'>
                <img src='https://lh4.googleusercontent.com/-PByUKZMcPWw/U6K6h8fKLKI/AAAAAAAAAGE/qx4j6fTG4b4/w1566-h881-no/neverforget.jpg'/>
            </div>
            <div class='containers'>
                <img src='https://lh4.googleusercontent.com/-iU1GNpm-vyA/Uwftj4nTIQI/AAAAAAAAAE0/Y6RaU3-JOV8/w882-h881-no/IMG_3513.JPG'/>
            </div>
            <div class='containers'>
                <img src='http://photos-f.ak.instagram.com/hphotos-ak-xfp1/1889293_448188101976005_1735300592_n.jpg'/>
            </div>
            <div class='containers'>
                <img src='http://distilleryimage3.ak.instagram.com/70e86c9afdae11e28bc322000a9d0dcb_7.jpg'/>
            </div>
            <div class='containers'>
                <img src='http://photos-f.ak.instagram.com/hphotos-ak-xpa1/10413020_555851384535597_345028240_n.jpg'/>
            </div>
        </div>
    </body>
</html>
HTML;
