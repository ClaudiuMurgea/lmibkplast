<div  style=" @if($keyboard) overflow:hidden; margin-right:6px !important; @endif" class='d-flex flex-column max_height overflow main-page cashout-page'>

    <div class="custom_title plifscroll">Cashout</div>

    @if($keyboard)
        <div id="container">  
            <ul style="text-align:center;margin-top:2rem;" id="keyboard">
                <!-- <img class="hide_keyboard" src='/header-images/close.png' wire:click="hideKeyboard()"> -->
                <div contenteditable="true" data-placeholder="Search by slot number" style="outline:1px solid #fff;background: linear-gradient(60deg, #444, #333, #222, #333, #444, #333);
                            box-shadow: 0px 0px 10px 0px #444, 0px 0px 16px 0px #ccc !important;
                            animation: animatedgradient 40s ease alternate infinite;position:relative;
                            background-size: 500% 500%; width:316px;border-radius: 5px;height:60px;border:1px solid #fff;text-align:center;font-size:24px;line-height:60px;color:#fff;font-weight:600
                            ">@if(count($property) <= 1)</div>
                            @else
                                @foreach($property as $index => $value)
                                    @if($index != 0)
                                        {{ $value }}
                                    @endif
                                @endforeach<span style="height:100%; color:red; float: right;width:90px;margin-right:16px;" wire:click="calculate('back')">X</span> </div>
                            @endif
                
                <li wire:click="calculate(1)"       class="letter mr_8">1</li>  
                <li wire:click="calculate(2)"       class="letter mr_8">2</li>  
                <li wire:click="calculate(3)"       class="letter">3</li>  
                <li wire:click="calculate(4)"       class="letter clearl mr_8">4</li>  
                <li wire:click="calculate(5)"       class="letter mr_8">5</li>  
                <li wire:click="calculate(6)"       class="letter">6</li> 
                <li wire:click="calculate(7)"       class="letter clearl mr_8">7</li>  
                <li wire:click="calculate(8)"       class="letter mr_8">8</li>  
                <li wire:click="calculate(9)"       class="letter">9</li>  
                <li wire:click="calculate('del')"   class="letter clearl mr_8">
                    Del
                </li>
                <li wire:click="calculate(0)"       class="letter mr_8">0</li>  
                <li  class="letter lastitem" wire:click="hideKeyboard()">Close</li>
                @if($message)
                <div style="margin-top:0.5rem; text-shadow:1px 1px #fff;">
                    {{ $message }}
                </div>
                @endif
            </ul>  
        </div>  
    @endif

    <table style=" margin-top:2rem;border-bottom:none; " class="table custom_table_background max_width text-white bolder  radius_10">
        <thead>
            <tr>
            <th style="width:100px;text-align:center;border-top:none !important;" scope="col">ID</th>
            <th scope="col" style="position:relative;z-index:1;display:flex;"  wire:click="showKeyboard()">Slot
            <!-- <img style="position:absolute; height:30px; width:30px;object-fit:contain;left:-10%;top:15%;z-index:1;" class="hide_keyboard" src="{{url('/header-images/magnify.png')}}"> -->
            </th>
            <th scope="col">Value</th>
            <th scope="col">MaxInactiveMin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($test as $value)
            <tr>
                    <th @if($loop->last) style="border-bottom: none; text-align:center;"  @else style="text-align:center;" @endif    scope="row">1</th>
                    <td @if($loop->last) style="border-bottom: none;" @endif>2</td>
                    <td @if($loop->last) style="border-bottom: none;" @endif> {{ $value->Login }} </td>
                    <td @if($loop->last) style="border-bottom: none;" @endif> {{ $value->MaxInactiveMin }}</td>
                </tr>
                <tr>
                    <th @if($loop->last) style="border-bottom: none; text-align:center;"  @else style="text-align:center;" @endif    scope="row">1</th>
                    <td @if($loop->last) style="border-bottom: none;" @endif>2</td>
                    <td @if($loop->last) style="border-bottom: none;" @endif> {{ $value->Login }} </td>
                    <td @if($loop->last) style="border-bottom: none;" @endif> {{ $value->MaxInactiveMin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="padding_bottom">
        &nbsp;
    </div>

    <script>
        var market = document.getElementsByClassName('cashout-page')[0]; 
        var screenHeight = window.innerHeight;
        if (market.scrollHeight > screenHeight) { 
            document.querySelector("div.plifscroll").style.paddingLeft= "16px"; 
            document.querySelector("div.arrow").style.display= "block";
        } else {
            document.querySelector("div.arrow").style.display= "none";  
        }
    </script>
</div>
