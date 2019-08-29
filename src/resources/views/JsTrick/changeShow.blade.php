@extends('layouts.index')

@section('head')
    <script>
        function showService(className){
            hideAll();
            var doms = document.getElementsByClassName(className);
            var length = doms.length;

            for (var i=0;i<length;i++){
                if(doms[i].classList.contains('hide')){
                    doms[i].classList.remove('hide');
                }
            }
        }

        function hideAll() {
            hideClass('A');
            hideClass('B');
            hideClass('C');
        }

        function hideClass(className){
            var doms = document.getElementsByClassName(className);
            var length = doms.length;

            for (var i=0;i<length;i++){
                if(!doms[i].classList.contains('hide')){
                    doms[i].classList.add('hide');
                }
            }
        }
    </script>

    <style>
        .hide{
            display: none;
        }
    </style>
@endsection

@section('content')
    <h1>ボタンで表示の切り替え</h1>


    <button onclick="showService('A')">A</button>
    <button onclick="showService('B')">B</button>
    <button onclick="showService('C')">C</button>

    <div class="A">
        Aグループが表示
    </div>

    <div class="B hide">
        Bグループが表示
    </div>

    <div class="C hide">
        Cグループが表示
    </div>

@endsection

