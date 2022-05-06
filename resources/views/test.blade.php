<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body class="container">

    <img class=" w-25 mx-auto d-block m-5" src="{{URL::asset('/asset/Logo_LDA_Round_black.png')}}" alt="">
    <h1 class="text-center m-5">Quiz #LaDalleAngevine</h1>   
    <div class="container-fluid">
    <div class="w-auto">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="text-center"> Quand a été créé La Dalle Angevine ?</h3>
            </div>
            <div class="modal-body text-center row ">
                <div class=" row "> </div>
                <div class="quiz" id="quiz" data-toggle="buttons"> 
                <label class="col-6 mt-2 element-animation1 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1"> 2012</label> 
                <label class="col-6 mt-2 element-animation2 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2"> 1889</label> 
                <label class="col-6 mt-2 element-animation3 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="3"> 2016</label> 
                <label class="col-6 mt-2 element-animation4 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="4"> 2000 </label> </div>
            </div>
        </div>
    </div>
    <button type="button" class="float-end btn btn-dark start-23 mt-3" onClick="window.location.reload();">#Suivant</button>


</body>
    <div class="container mt-4 w-75 ">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi autem sit quae enim similique recusandae dicta, ab adipisci cumque, cum accusantium veritatis quis ipsa ducimus! Veniam quidem laborum vero magni?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, nostrum error! Delectus beatae harum ipsam facilis necessitatibus? Nam ipsum, ratione est tempore quo repellendus fugit, id repellat cum ducimus voluptas?
        </p>
    </div> 
</body>

</html>