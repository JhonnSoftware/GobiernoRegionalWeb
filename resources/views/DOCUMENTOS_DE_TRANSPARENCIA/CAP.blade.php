@extends('layouts.layout')

@section('title', 'Directorio Regional')

@section('contenido-principal')
    <style>
        .banner {
            position: relative;
            width: 100%;
            height: 400px;
            background: linear-gradient(to left, rgba(204, 204, 204, 0.4), rgba(0, 14, 139, 0.9)),
                url('images/boletin1.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: start;
            padding-left: 20px;
        }

        .banner h1 {
            color: white;
            font-size: 50px;
            font-weight: bold;
            margin-left: 140px;
            font-family: 'Panton Narrow Black Italic', sans-serif;
        }

        .container-pag{
            width: 100%;
            height: 100vh;
            background: linear-gradient(45deg, #410358, #4700bc);
            display: flex;
            align-content: center;
            justify-content: center;
        }
        .pagination{
            display: flex;
            align-items: center;
            background: #fff;
            color: #383838;
            width: 800px;
            height: 100px;
            padding: 10px 40px;
            border-radius: 6px;
        }
        .link-ul{
            margin: 20px 30px;
        }
        .link-ul .link-li{
            display: inline-block;
            margin: 0 10px;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            text-align: center;
            font-size: 22px;
            font-weight: 500;
            line-height: 45px;
            cursor: pointer;
            background-position: 0 -45px;
            transition: background-position 0.5s;
        }

        .link-li.active{
            color: #fff;
            background-image: linear-gradient(#ffaf02, #ffaf02);
            background-repeat: no-repeat;
            background-position: 0 0;
        }

        .btn1, .btn2{
            display: inline-flex;
            align-items: center;
            font-size: 22px;
            font-weight: 500;
            color: #383838;
            background: transparent;
            outline: none;
            border: none;
            cursor: pointer;
        }

        .btn1 img{
            width: 24px;
            margin-right: 15px;
        }
        .btn2 img{
            width: 24px;
            margin-left: 15px;
            transform: rotate(180deg);
        }

        .container-a {
    max-width: 500px;
    margin: auto;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.holiday {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px;
    border-bottom: 1px solid #ddd;
    background-color: white;
}

.holiday:nth-child(odd) {
    background-color: #f2f2f2;
}

.holiday i {
    font-size: 20px;
    color: #333;
}

.holiday-info {
    flex: 1;
    margin-left: 10px;
}

.holiday-info strong {
    display: block;
    font-size: 16px;
    color: #000;
}

.holiday-info span {
    font-size: 14px;
    color: #777;
}
    </style>
    <div class="banner">
        <h1>CUADRO DE ASIGNACIÓN<br>PARA EL PERSONAL (CAP)</h1>
    </div>

    <div class="container-pag">
        <div class="pagination">
            <button class="btn1" onclick="backBtn()"> <img src="images/arrow.png" alt=""> Volver</button>
            <ul class="link-ul">
                <li class="link-li active" value="1" onclick="activeLink()">1</li>
                <li class="link-li" value="2" onclick="activeLink()">2</li>
                <li class="link-li" value="3" onclick="activeLink()">3</li>
                <li class="link-li" value="4" onclick="activeLink()">4</li>
                <li class="link-li" value="5" onclick="activeLink()">5</li>
                <li class="link-li" value="6" onclick="activeLink()">6</li>
            </ul>
            <button class="btn2" onclick="nextBtn()">Sig <img src="images/arrow.png" alt=""> </button>
        </div>
    </div>
   
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4">
                <input type="date" class="form-control" placeholder="mm/dd/yyyy">
            </div>
            <div class="col-md-4">
                <input type="date" class="form-control" placeholder="mm/dd/yyyy">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Filtrar por palabra clave">
            </div>
        </div>
    </div>
    <div class="container-a">
        <div class="holiday">
            <img src="images/pdf-icon.png" alt="" style="width: 30px; height: 30px;">
            <div class="holiday-info">
                <strong>01/01/2019</strong>
                <span>Confraternização Universal</span>
            </div>
            <i class="bi bi-trash"></i>
        </div>

        <div class="holiday">
            <i class="bi bi-calendar3"></i>
            <div class="holiday-info">
                <strong>25/04/2019</strong>
                <span>Tiradentes</span>
            </div>
            <i class="bi bi-trash"></i>
        </div>

        <div class="holiday">
            <i class="bi bi-calendar3"></i>
            <div class="holiday-info">
                <strong>01/05/2019</strong>
                <span>Dia do Trabalhador</span>
            </div>
            <i class="bi bi-trash"></i>
        </div>

        <div class="holiday">
            <i class="bi bi-calendar3"></i>
            <div class="holiday-info">
                <strong>07/09/2019</strong>
                <span>Independência</span>
            </div>
            <i class="bi bi-trash"></i>
        </div>

        <div class="holiday">
            <i class="bi bi-calendar3"></i>
            <div class="holiday-info">
                <strong>12/10/2019</strong>
                <span>Nossa Senhora Aparecida</span>
            </div>
            <i class="bi bi-trash"></i>
        </div>

        <div class="holiday">
            <i class="bi bi-calendar3"></i>
            <div class="holiday-info">
                <strong>02/11/2019</strong>
                <span>Finados</span>
            </div>
            <i class="bi bi-trash"></i>
        </div>

        <div class="holiday">
            <i class="bi bi-calendar3"></i>
            <div class="holiday-info">
                <strong>15/11/2019</strong>
                <span>Proclamação da República</span>
            </div>
            <i class="bi bi-trash"></i>
        </div>

        <div class="holiday">
            <i class="bi bi-calendar3"></i>
            <div class="holiday-info">
                <strong>25/12/2019</strong>
                <span>Natal</span>
            </div>
            <i class="bi bi-trash"></i>
        </div>
    </div>

    <script>
        let link = document.getElementsByClassName("link-li");

        let curentValue = 1;

        function activeLink(){
            for(l of link){
                l.classList.remove("active");
            }
            event.target.classList.add("active");
            currentValue = event.target.value;
        }

        function backBtn(){
            if(currentValue > 1){
                for(l of link){
                    l.classList.remove("active");
                }
                currentValue--;
                link[currentValue-1].classList.add("active");
            }
        }

        function nextBtn(){
            if(currentValue < 6){
                for(l of link){
                    l.classList.remove("active");
                }
                currentValue++;
                link[currentValue-1].classList.add("active");
            }
        }

    </script>

@endsection
