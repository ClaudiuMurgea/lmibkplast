<div class='d-flex flex-column max_height overflow main-page quest-page'>
    
    <div class="custom_title">Quest</div>

    <div id="quest" class="max_width">
        @for($i = 1; $i < 10; $i++)
            <div class="quest_wrapper">
                <div class="quest_animation quest_outer">
                    Quest
                </div>
                <div class="quest_animation quest_inner">
                    Quest 
                </div>
                <div class="quest_animation quest_outer">
                    Quest
                </div>
            </div>
        @endfor
    </div>

    <div class="padding_bottom">
        &nbsp;
    </div>
    
    <script>
        var market = document.getElementsByClassName('quest-page')[0]; 
        var screenHeight = window.innerHeight;
        if (market.scrollHeight > screenHeight) { 
            document.querySelector("#quest").style.paddingLeft= "16px"; 
            document.querySelector("div.arrow").style.display= "block"; 
        } else {
            document.querySelector("div.arrow").style.display= "none";  
        }
    </script>
</div>

    