<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="position-relative bg-dark">

        <div id="jumbo">
    
            <img width="100%"  src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="" class="logo">
        </div>
        <div class="container text-light d-flex bg-dark py-5">
            <div class="d-flex justify-content-center flex-wrap">
                @foreach ($comics as $item)
                <div id="card" class="col-2">
                    <figure>
                        <img class="" src={{$item['thumb']}} alt="">
                    </figure>
                    <p>{{$item['title']}}</p>
                        
                    
                </div> 
                @endforeach
            </div>

            
            
        </div>
        <div class="d-flex justify-content-center">
            <button>LOAD MORE</button>
            <button id="cur">CURRENT SERIES</button>
    
        </div>
    </div>
</template>
<style  scoped >
#jumbo{
    height: 400px;
    overflow: hidden;
    width: 101%;
}



button{
    color: white;
    background-color:#0282f9;
    width: 200px;
    height: 50px;
    margin-right: 50px;
    border: none;
    margin-bottom: 20px;
    
}


figure{ color: white;
    width: 180px;
    aspect-ratio: 1;
    overflow: hidden;
}



#card{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#cur{
    position: absolute;
    top: 370px;
    left: 200px;
    font-size: 20px;
    font-weight: bold;
}


    
</body>
</html>