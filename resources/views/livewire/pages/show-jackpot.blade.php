<div style="height:88vh;overflow-y:scroll;padding-bottom:3rem;margin-left:10px;">
@extends('layouts.app')
@section('content')
    <!-- <button class="custom-btn btn-6 back-btn">Silver</button> -->
    <div wire:click="save()">
        test
    </div>
        <table style="width:90%; margin: 0 auto; " class="table1 text-center">
            <thead>
                <tr style="line-height:0;">
                    <th style="border:none;opacity:0.9">Index</th>
                    <th style="border:none;opacity:0.9">Slot</th>
                    <th style="border:none;opacity:0.9">Value</th>
                    <th style="border:none;opacity:0.9">Date</th>
                </tr>
            </thead>
            <tbody style="margin-left:2px !important;">
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">1</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">1</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">1.00</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">4</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">1.48</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">3</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">0</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2.98</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">1</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">1</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">1.00</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">4</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">1.48</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">3</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">0</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2.98</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">4</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">1.48</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">3</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">0</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2.98</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">3</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">0</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2.98</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">3</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">0</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2.98</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">4</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">1.48</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">3</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">0</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2.98</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
                <tr>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">3</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">0</td>
                    <td style="border:none;border-right:2px solid #59bfff; border-bottom:2px solid #59bfff;opacity:0.9">2.98</td>
                    <td style="border:none; border-bottom:2px solid #59bfff;opacity:0.9">2022-04-13 20:18:23</td>
                </tr>
            </tbody>
        </table>
        @endsection
</div>
