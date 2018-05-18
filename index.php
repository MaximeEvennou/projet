<!DOCTYPE html>
<html>
    <head>
        <title>Mon Site</title>
        <meta charset="UTF-8">

        <style>
        
            body {
                background: linear-gradient(silver, black);
            }
            p { 
                font-size: 80px;
                color: silver;
                text-align: center;
            }
            p:hover{
                color: gold; 
                font-weight: bold;
                font-size: 100px;
            }
            .container{
                color: gold;
                text-align: center;
                background: black;
                padding: 60px;
            }
            footer{
                background: black;
                color: gold;
                text-align: center;
            }

        </style>
    </head>

    <body>
        <p>Hello !!!</p>

    <div class="container">
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia enim provident a quis corporis, veritatis, nihil minima rem fugit nulla numquam dolores soluta veniam. Necessitatibus debitis tempore, aliquam officia ullam possimus officiis repellat magni incidunt error beatae facere nisi hic omnis dolore aspernatur inventore fugiat! Sint, ullam repudiandae eum impedit cum voluptas eos neque ab delectus voluptatibus architecto dolor cupiditate maxime fugit nulla suscipit facilis, libero tempora beatae necessitatibus sunt minus exercitationem deserunt! Voluptatum ratione debitis doloremque temporibus doloribus ipsum inventore repudiandae, quasi laudantium adipisci ducimus nesciunt nostrum! Assumenda officia quia eveniet cumque laboriosam exercitationem nam sint inventore ipsa accusantium maiores rem velit est, deleniti libero labore architecto nulla? Sunt aut quidem eaque sequi suscipit nostrum itaque nobis non accusantium enim, accusamus dignissimos officiis modi perferendis pariatur magnam porro qui asperiores architecto repellat? Pariatur magnam quibusdam officia sint, tempora vero impedit repellat inventore? Reprehenderit, nobis eum? Voluptatum laudantium harum quis, labore possimus rerum corporis vel blanditiis itaque nesciunt quasi laboriosam animi ipsa alias voluptatibus eligendi cumque eum voluptate obcaecati maxime quae. Iste obcaecati voluptate, sequi, consectetur ab ipsum voluptatem minus iure, perferendis laboriosam excepturi quaerat repudiandae alias? Perferendis omnis deleniti explicabo nam! Voluptas ex optio maiores quisquam error tempore sed!
    </div>
    <footer>
        &copy; Create by EVENNOU Maxime
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