<?php

    function strip_html_tag($str){

        if ($str = "<div id = 'container'>

            <p>
                when calling.
            </p>

        </div>"){

            echo strip_tags($str);
        }else {

            echo 'false';
        }
    
    }

    strip_html_tag("<div id = 'container'>

    <p>
        when calling.
    </p>

</div>")
?>