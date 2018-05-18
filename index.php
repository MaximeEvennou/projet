<!DOCTYPE html>
<html>
    <head>
        <title>Mon Site</title>
        <meta charset="UTF-8">

        <style>
        
            body {
                height: 100%;
                width: 95%;
                background:linen;
                background: linear-gradient(to bottom, rgba(250,240,230,0.5));
                padding-left: 2rem;
                padding-right: 2rem;
            }
 

            p { 
                font-size: 30px;
                color: black;
                text-align: center;
            }
            .first:hover{
                color: red;
            }
            
            p:hover{
                color: fuchsia; 

                font-weight: bold;
                font-size: 50px;
            }
            .container{
                color: gold;
                text-align: center;
                background: lightgrey ;
                padding-top: 10rem;
                height:600px;
                padding-bottom:10rem;
            }
            .city h2{
                color: gold;
                text-align: center;
            }
            .city p{
                color: white;
                text-align: center;
            }
            footer{
                background: black;
                color: gold;
                text-align: center;
                font-size: 11px;
                height:50px;
            }
            .footer{
                vertical-align: center;
            }
           

        </style>
    </head>



    <body class= "body">

        <p>Hello !!!</p>
    </div>

    <div class="container">
         <p class="first" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia enim provident a quis corporis, veritatis, nihil minima rem fugit nulla numquam dolores soluta veniam. Necessitatibus debitis tempore, aliquam officia ullam possimus officiis repellat magni incidunt error beatae facere nisi hic omnis dolore aspernatur inventore fugiat! Sint, ullam repudiandae eum impedit cum voluptas eos neque ab delectus voluptatibus architecto dolor cupiditate maxime fugit nulla suscipit facilis, libero tempora beatae necessitatibus sunt minus exercitationem deserunt! Voluptatum ratione debitis doloremque temporibus doloribus ipsum inventore repudiandae, quasi laudantium adipisci ducimus nesciunt nostrum! Assumenda officia quia eveniet cumque laboriosam exercitationem nam sint inventore ipsa accusantium maiores rem velit est, deleniti libero labore architecto nulla? Sunt aut quidem eaque sequi suscipit nostrum itaque nobis non accusantium enim, accusamus dignissimos officiis modi perferendis pariatur magnam porro qui asperiores architecto repellat? Pariatur magnam quibusdam officia sint, tempora vero impedit repellat inventore? Reprehenderit, nobis eum? Voluptatum laudantium harum quis, labore possimus rerum corporis vel blanditiis itaque nesciunt quasi laboriosam animi ipsa alias voluptatibus eligendi cumque eum voluptate obcaecati maxime quae. Iste obcaecati voluptate, sequi, consectetur ab ipsum voluptatem minus iure, perferendis laboriosam excepturi quaerat repudiandae alias? Perferendis omnis deleniti explicabo nam! Voluptas ex optio maiores quisquam error tempore sed!
         </p>
    </div>

    <div class="city">
        <h2>London</h2>
            <p>London is the capital of England.</p>

        <h2>Paris</h2>
            <p>Paris is the capital of France.</p>

        <h2>Tokyo</h2>
        <p>Tokyo is the capital of Japan.</p>
    </div>

    <footer>
        &copy; Created by J-C, Rachma & Maxime
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('.container').one("mouseenter",function(){
                alert('Bienvenue sur mon site');
                $(this).text('Oui moi aussi je ne comprends pas le latin').show().delay(5000).hide(2000); 
            });
                       
       });
    </script>

    </body>
</html>