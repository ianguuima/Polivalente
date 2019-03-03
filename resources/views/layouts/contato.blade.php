<head>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
</head>

<style>

body{
    margin: 0;
    width: 100%;
    padding: 0;
    height: auto;
}

.box{
    padding: 50px;
    font-family: 'Source Sans Pro', sans-serif;
    width: 80%;
    height: auto;
    background-color: white;
    margin-top: 12rem;
    margin-left: auto;
    margin-right: auto;
}

h1{
    position: relative;
    text-align: center;
    font-size: 52px;
    top: -40px;
    color: #3490dc;
}

ul{
    font-size: 28px;
    text-decoration-style: none;
    list-style-type: none;
}

li{
    margin-top: 5px;

}

p{
    margin-top: -5px;
    font-size: 22px;
    display: inline-block;
    color: #3c3c3c;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}


img{
    position: relative;
    top: 0;
    width: 8%;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}


</style>

<body style="background-color: #489bdf">

    <div class="box shadow">

            <img src="{{ asset('imgs/logo3.png') }}">

            <h1 class="border-bottom">Contato do Site</h1>

            <ul>
                <li>Email: <p>{{$email}}</p></li>
                <li>Nome: <p>{{$nome}}</p></li>
                <li>Telefone: <p>{{$telefone}}</p></li>
                <li>Mensagem: <p>{{$mensagem}}</p></li>
            </ul>

    </div>

</body>