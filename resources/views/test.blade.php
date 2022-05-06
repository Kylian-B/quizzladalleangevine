<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
    <script>
        let choix = true;
        function setColor() {
            let property = document.getElementsByClassName('verbaeb')[0];
            if (choix == true) {
                property.style.backgroundColor = "blue"
                choix = false;        
            }
            else {
                property.style.backgroundColor = "green"
                choix = true;
            }
        }
    </script>
</head>

<body class="container">

    <img class=" w-25 mx-auto d-block m-5" src="{{URL::asset('/asset/Logo_LDA_Round_black.png')}}" alt="">
    <h1 class="text-center m-5">Quiz #LaDalleAngevine</h1>   
    <div class="container-fluid">
        <div class="w-auto">
            <div class="modal-content">
                @foreach ($quizz as $quiz)
                <div class="modal-header ">
                    <h3 class="text-center">{{ $quiz->question }}</h3>
                </div>
                <div class="modal-body text-center row ">
                    <div class=" row ">
                        <div class="quiz" id="quiz" data-toggle="buttons">
                            <div id="reponse">
                            <label  id="verbaeb" class="verbaeb col-6 mt-2 element-animation1 btn btn-lg btn-danger btn-block" onClick= "setColor()"><span
                                    class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input
                                    type="radio" name="q_answer" value="1">{{ $quiz->correct }}</label>
                            <label  id="verbaeb" class="verbaeb col-6 mt-2 element-animation2 btn btn-lg btn-danger btn-block" onClick= "setColor()"><span
                                    class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input
                                    type="radio" name="q_answer" value="2">{{ $quiz->false1 }}</label>
                            <label class="verbaeb col-6 mt-2 element-animation3 btn btn-lg btn-danger btn-block" onClick= "setColor()"><span
                                    class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input
                                    type="radio" name="q_answer" value="3">{{ $quiz->false2 }}</label>
                            <label class="verbaeb col-6 mt-2 element-animation4 btn btn-lg btn-danger btn-block"onClick= "setColor()"><span
                                    class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input
                                    type="radio" name="q_answer" value="4">{{ $quiz->false3 }}</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- <button type="button" class="float-end btn btn-dark start-23 mt-3">#Suivant</button> -->

            <div class="container mt-4 w-75 d-none ">
                <p>{{ $quiz->description }}</p>
            </div>
            @endforeach
</body>

</html>