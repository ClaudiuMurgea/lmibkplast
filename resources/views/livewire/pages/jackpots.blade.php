<div class='d-flex flex-column max_height overflow main-page jackpots-page'>
    @if($list)
        <div class="custom_title">Jackpots</div>

        <div id="jackpots" style="margin-top:2rem;" class="jackpots_grid max_width">
            @for ($i = 1; $i <= 66; $i++)
                <div wire:click="showJackpot({{ $i }})" class="jackpots_bg jackpots_styles bolder" 
                     style="@if($i > 3) margin-top:2.5rem; @endif">
                    <div style="margin:0 auto;">
                        <!-- <span class="jackpots_name"> -->
                                <!-- Jackpot {{ $i }} -->
                            <span class="linear-wipe">Jackpot {{$i}}</span>
                        <!-- </span>  -->
                    </div>
                </div>
            @endfor
        </div> 

        <div class="padding_bottom">
            &nbsp;
        </div>
    @endif
    @if(!$list)
        <livewire:pages.show-jackpot    :ids="$jackpot" :wire:key="11">
    @endif

    <script>
        var market = document.getElementsByClassName('jackpots-page')[0]; 
        var screenHeight = window.innerHeight;
        if (market.scrollHeight > screenHeight) { 
            document.querySelector("#jackpots").style.paddingLeft= "16px"; 
            document.querySelector("div.arrow").style.display= "block"; 
        } else {
            document.querySelector("div.arrow").style.display= "none";  
        }
    </script>
</div>