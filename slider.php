<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIDER</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:#ede6d6;
        }
        .slide-container{
            position: relative;
            width: 800px;
            height: 450px;
            border: 6px solid white;
            box-shadow: 0 0 8px 3px rgba(0,0,0,0.2);
        }
        .slide-container .slides{
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        .slide-container .slides img{
            width: 100%;
            position: absolute;
            height: 100%;
            object-fit: cover;
        }
        .slide-container .slides img:not(.active){
            top: 0;
            left: -100%; 
        }
        span.next, span.prev{
            position: absolute;
            top: 50%;
            font-weight: bold;
            padding: 14px;
            color: #eee;
            font-size: 24px;
            transform: translateY(-50%);
            border-radius: 3px;
            cursor: pointer;
            user-select: none;
            z-index: 1;
        }
        span.next{
            right: 20px;
        }
        span.prev{
            left: 20px;
        }
        span.next:hover, span.prev:hover{
            opacity: 0.8;
            color: #222;
            background-color: #ece7da;
        }
       
        @keyframes next1 {
            from{
                left: 0%
            }to{
                left: -100%;
            }
        }
        @keyframes next2 {
            from{
                left: 100%
            }to{
                left: 0%;
            }
        }

        @keyframes prev1 {
            from{
                left: 0%
            }to{
                left: 100%;
            }
        }
        @keyframes prev2 {
            from{
                left: -100%
            }to{
                left: 0%;
            }
        }
    </style>
</head>
<body>
    <div class="slide-container">
        <div class="slides">
            <img src="garden1.jpg" class="active">
            <img src="garden5.jpg" class="">
            <img src="gard.jpg" class="">
            <img src="photo.jpg" class="">
            <img src="garden++.jpg" class="">
        </div>
        <div class="buttons">
            <span class="next">&#10095;</span>
            <span class="prev">&#10094;</span>
        </div>
        
    </div>
    <script>
        //access the images
        let slideImages = document.querySelectorAll('img');
        //access prev,next
        let next = document.querySelector('.next');
        let prev = document.querySelector('.prev');

        var counter = 0;
        //code for next button
        next.addEventListener('click',slideNext);
        function slideNext(){
            slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
            if(counter >= slideImages.length -1){
                counter = 0;
            }else{
                counter++;
            }
            slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
          
        }
        //code for prev
        prev.addEventListener('click',slidePrev);
        function slidePrev(){
            slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
            if(counter == 0){
                counter = slideImages.length -1;
            }else{
                counter--;
            }
            slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';
           
         }    
           
        
    </script>
</body>
</html>