<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante el Diecillo</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<style>
    body{
        background-color:#F1F6F9;
    }

    h1{
        text-align:center;
        color:#394867;
    }

    h2{
        text-align:center;
        color:#394867;
    }

    .platillos{
        display:flex;
        flex-direction:row;
        justify-content:center;
        list-style: none;
    }

    button{
        margin:20px;
        width: 120px;
        height: 38px;
        background-color:#212A3E;
        border: 2px solid #9BA4B5;
        border-radius:4px;
    }

    a{
      text-decoration:none;
      color:white;
      font-weight:bolder;
    }

</style>
<body>
    <h1>Bienveido a restaurante el Diecillo <br>
        Comida de calidad
    </h1>

    <h2>MENU</h2>

    <div class="menu">
        <ul class="platillos">
            <li>
                <button>
                    <a href="{{ route('Pupusas')}}">Pupusas</a>
                </button>
            </li>
            <li>
                <button>
                    <a href="{{ route('Tacos')}}">Tacos</a>
                </button>
            </li>
            <li>
                <button>
                    <a href="{{ route('Pizza')}}">Pizza</a>
                </button>
            </li>
            <li>
                <button>
                    <a href="{{ route('Tortas')}}">Tortas</a>
                </button>
            </li>
            <li>
                <button>
                    <a href="{{ route('PapasFritas')}}">Papas Fritas</a>
                </button>
            </li>
        </ul>
    </div> 
</body>
</html>