<!DOCTYPE html>
<html>
    <head>
        <title>Myndir | bj</title>
        <style>
            img {
                display: inline-block;
                height: 400px;
                margin: 10px;
            }
            body {
                background-color: #DEDEDE;
                font-family: Arial;
                text-align: center;
            }
            #imgs {
                max-width: max(1200px, 50vw);
                margin-left: auto;
                margin-right: auto;
            }
    
            button {
                font-size: min(1vh, 30px);
            }
            
            h1 {
                font-size: min(4vh, 120px);
            }
        </style>
    </head>
    <body>
        <script>
<?php
    if ($handle = opendir('img')) {
        $arr = [];
        while (false !== ($entry = readdir($handle))) {
    
            if ($entry != "." && $entry != "..") {
    
                $arr[] = $entry;
            }
        }
        echo "files = ['".join("','", $arr)."'];";
    
        closedir($handle);
    }
?>
        </script>
        <div id="container">
            <h1>Myndir</h1>
            <p id="selectors"><button onclick="select('nature');">náttúra</button> <button onclick="select('drone');">loftmyndir</button> <button onclick="select('regional');">landsbyggð</button> <button onclick="select('city');">borg</button> <button onclick="select('bw');">svarthvítt</button> <button onclick="select('eruption');">eldgos</button> <button onclick="select('3x2');">3x2</button> <button onclick="select('1x1');">1x1</button></p>
            <div id="imgs"></div>
        </div>
        <script>
            function select(criterion) {
                el = document.getElementById('imgs');
                
                el.innerHTML = "";
                
                files.forEach(function(i) {
                    if (i.includes(criterion)) {
                        el.innerHTML += '<img src="img/' + i + '">';
                    }
                });
            }
        </script>
    </body>
</html>
