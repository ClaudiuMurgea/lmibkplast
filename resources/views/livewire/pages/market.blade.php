<div class='d-flex flex-column max_height overflow main-page market-page'>

    <div class="custom_title">Market</div>

    <div id="market" class="market_grid-wrapper mt_2 max_width">
        @foreach($test as $t)
            <div class="full_width market_wrapper">
                <div class="image_container">
                    <div class="product_image_wrapper">
                        <img class="product_img" src="data:image/png;base64,{{ chunk_split(base64_encode($t->Resource)) }}" alt="image" />
                    </div>
                </div>
                <div class="details_container full_width">
                    <div class="pl_10 full_width verdana product_name weight_500 font_size-1-2" style="">{{ $t->Name }}</div>
                    <div class="pl_10 weight_500 product_points verdana font_size-1-2">
                                Points : {{ $loop->index + 2 * 2}}
                    </div>
                    <div class="full_width">
                        <div wire:click="lower(4)" class="product_button-wrapper bolder text_small">
                            <button class="button button-circle-left product_button">BUY</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="padding_bottom">
        &nbsp;
    </div>
    <script>
        var market = document.getElementsByClassName('market-page')[0]; 
        var screenHeight = window.innerHeight;
        if (market.scrollHeight > screenHeight) { 
            document.querySelector("#market").style.paddingLeft= "16px"; 
            document.querySelector("div.arrow").style.display= "block"; 
        } else {
            document.querySelector("div.arrow").style.display= "none";  
        }
    </script>

</div>
