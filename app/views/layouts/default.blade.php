<!doctype html>
<html lang="en">
<head>
    {{ HTML::style('css/main.css') }}
   
</head>

<body> 
<div class="outer">
<div class="middle">

<div class="bar"></div>
    
<div id="title">
  {{ link_to("/", "Bushels of Llamas") }}
</div>
    
<div class="bar"></div>

<div id="nav">
    <ul>
        @yield('items')
        
    </ul>
</div>

</div>
</div>

</body>

</html>