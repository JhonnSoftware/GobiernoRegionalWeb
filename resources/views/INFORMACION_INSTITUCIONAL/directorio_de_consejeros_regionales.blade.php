@extends('layouts.layout')

@section('title', 'Directorio de Consejeros Regionales')

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

        .container {
             display: flex;
             align-items: center;
             justify-content: center;
             max-width: 1000px;
             margin: 50px auto;
             background: #fff;
             padding: 20px;
         }

        .logo img {
            width: 400px;
            height: 550px;
            border-radius: 15px;
        }

        .divider {
            width: 2px;
            background-color: #ccc;
            height: 500px;
            margin: 0 60px;
        }

        .mensaje {
            max-width: 600px;
        }

        .mensaje h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .mensaje p {
            font-size: 16px;
            color: #333;
            line-height: 1.6;
        }
        /*parte1 */

.outer{
    height: 150vh;
    background: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap; /* Permite que los elementos se acomoden si no hay espacio */
    gap: 20px;
}

.outer .content {
        margin-bottom: 20px;    
        display: flex;
        align-items: center; /* Asegura que la imagen y el texto estén alineados */
        justify-content: start;
        width: 500px; /* Asegura un ancho uniforme */
        height: 270px; /* Ajusta según sea necesario */
        background: #fff;
        padding: 15px;
        border-radius: 12px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.content .image-box {
    flex-shrink: 0;
    width: 200px;
    height: 232px;
    border-radius: 12px;
    background: #b86666;
    padding: 3px;
    overflow: hidden;
}

.content .image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.content .details {
    margin-left: 20px;
    flex: 1; /* Permite que el texto ocupe el espacio disponible */
}

.content .details .name {
    font-size: 20px;
    font-weight: bold;
}

.content .details p {
    font-size: 14px;
    margin: 5px 0;
}
.outer .content:hover {
    transform: translateY(-10px); /* Hace que se levante */
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3); /* Aumenta la sombra para el efecto de elevación */
}
    </style>

    <div class="banner">
        <h1>DIRECTORIO DE CONSEJEROS<br>REGIONALES</h1>
    </div>

    <div class="outer">
        <div class="content">
            <div class="image-box">
                <img src="images/1725202423_Presidente Consejo Regional -Rafael Anderson Gonzáles Ureta.png">
            </div>
            <div class="details">
                <div class="name">Consejero Regional Junin</div>
                <div class="title">Presidente del Consejo Regional</div>
                <div class="job">Rafael Anderson Gonzales Ureta</div>
                <p>correo: rgonzalesu@regionjunin.gob.pe
                <br>inicio de cargo: 01/01/2023 
                </p>

            </div>
            
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202518_Consejero Regional por Chupaca - Yoni Ángel Balbin Peña.png ">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Chupaca</div>
                    
                    <div class="job">Yoni Angel Balbin Peña</div>
                    <p>correo:ybalbin@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023 
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202588_Consejero Regional por Yauli - Luis Demetrio Basaldúa Rodríguez.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Yauli</div>
                    
                    <div class="job">Luis Demetrio Basaldua Rodríguez</div>
                    <p>correo:lbasaldua@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023 
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202676_Consejero Regional por Tarma - Luis Morales Nieva.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Tarma</div>
                    
                    <div class="job">Luis Fernando Morales Nieva</div>
                    <p>correo:lmorales@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023 
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202780_Consejera Regional por Satipo - Maribel Edith Valencia Mejía.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Satipo</div>
                    
                    <div class="job">Maribel Edith Valencia Mejía</div>
                    <p>correo: mvalencia@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023 
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202729_Consejera Regional por Satipo - Maritza López Cristina.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Satipo</div>
                    
                    <div class="job">Maritza Lopez Cristina</div>
                    <p>correo: mlopez@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023 
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202810_Consejero Regional por Chanchamayo - Ismael Nicodemus Robles Cortéz.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Chanchamayo</div>
                    
                    <div class="job">Ismael Nicodemus Robles Cortéz</div>
                    <p>correo: irobles@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023 
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202841_Consejero Regional por Chanchamayo - Yoner Ambicho Aquino.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Chanchamayo</div>
                    
                    <div class="job">Yoner Ambicho Aquino</div>
                    <p>correo: yambicho@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023 
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202972_Consejero Regional por Jauja - Hernan Rojas De La Cruz.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Jauja</div>
                    
                    <div class="job">Hernan Rojas De La Cruz</div>
                    <p>correo: hrojas@regionjunin.gob.pe
                    <br>inicio de cargo: 09/02/2024
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202872_Consejera Regional por Huancayo - Kely Flores Mas.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Huancayo</div>
                    
                    <div class="job">Keli Flores Mas</div>
                    <p>correo: kflores@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202904_Consejera Regional por Huancayo - Lucero Beatriz Huamancaja Castillo.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Huancayo</div>
                    
                    <div class="job">Lucero Beatriz Huamancaja Castillo</div>
                    <p>correo: lhuamancaja@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202937_Consejera Regional por Huancayo - Norma lidia Valdivia Gutiérrez.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Huancayo</div>
                    
                    <div class="job">Norma Lidia Valdivia Gutiérrez</div>
                    <p>correo: nvaldivia@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023
                    </p>
    
                </div>
        </div>
        <div class="content">
                <div class="image-box">
                    <img src="images/1725202998_Consejera Regional por Concepción - María Martina Maldonado Doria.png">
                </div>
                <div class="details">
                    <div class="name">Consejero Regional Concepcion</div>
                    
                    <div class="job">Marí­a Martina Maldonado Doria</div>
                    <p>correo: mmaldonado@regionjunin.gob.pe
                    <br>inicio de cargo: 01/01/2023
                    </p>
    
                </div>
        </div>
    </div>  
@endsection
