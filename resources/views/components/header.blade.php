<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div id="main">
        <div>
            <img style="width:50%" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" class="logo">
        </div>
        <nav>
            <ul>  
            @foreach ($data as $item)
            <li>{{$item}}</li>
            @endforeach
            </ul>
        </nav>
        <div class="searchbar">
            <input type="text" name="
        " id="">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
</body>
</html>

<style>
    #main{
    background-color: white;
    width: 101%;
    height: 120px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 200px;
    
}

    ul{
        list-style: none;
        text-transform: uppercase;
        font-weight: 600;
        display: flex;
        gap: 20px
    }
    
    </style>