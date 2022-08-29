<div class='d-flex flex-column main-page max_height overflow'>
    <!-- <iframe style="height:300px !important;min-width:100%;" src="http://10.109.254.122/PlayerJPNou/CC/progress_bar/MasterOnlyAutoCardProgress.php?PID=44" 
        title="W3Schools Free Online Web Tutorials"></iframe> -->
        @if($list)
        <div style="position:absolute; top:0;z-index:9999;" class="custom_title">Jackpots</div>
        <div style="margin-top:2rem;" class="jackpots_grid max_width">
            @for ($i = 1; $i <= 66; $i++)
                <div wire:click="showJackpot({{ $i }})" class="jackpots_bg jackpots_styles" 
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
    <div class="arrow" wire:ignore>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <script>
        var article = document.getElementsByClassName('main-page')[0]; 
        var screenHeight = window.innerHeight;
        var scrollTop = document.querySelector("div.arrow").scrollTop;
        if (article.scrollHeight > screenHeight) { 
            document.querySelector("div.arrow").style.display = "block"; 
        }
    </script>
           <!-- if (screenHeight < scrollTop) { 
            console.log('near end');
        } -->
</div>