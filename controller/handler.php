 <?php 

    class User {

        public $number;

        function __construct($number){
            $this->number = $number;
        }

        function get_number() {
            return $this->number;
        }

        function Fibo($number) {
            if($number == 0)
                return 0;
            else if($number <= 1)
                return 1;
            else
                return ($this->Fibo($number-1) + $this->Fibo($number-2));
        }

        function convertStringToNumber($text) {
            return (int)$text;
        }

    }
    $flagError = false;
    $fibonacciNumber = $_POST['fibonacciNumber'];
    $user = new User($fibonacciNumber); 
    $num = $user->convertStringToNumber($user->get_number());

    if($num <= 33){
        $result = $user->Fibo($num);
    }else{
        $flagError = true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['fibonacciNumber']) && $fibonacciNumber != '' && !$flagError && preg_match('/[a-zA-Z]+/', $num)) {
            echo '<!DOCTYPE html>
            <html lang="en">
            
            <head>
                <title>MOB</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="icon" type="image/x-icon" href="../favicon.ico" />
                <link href="../assets/css/style.css" rel="stylesheet">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            
            </head>
            
            <body>
                <main class="container">
                    <div class="row productAlign">
                        <div class="jumbotron">
                            <h1 class="display-3">Fibonacci Algorithm</h1>
                            <p class="lead">In mathematics, the Fibonacci numbers, commonly denoted Fn, form a sequence, called
                            the Fibonacci sequence, such that each number is the sum of the two preceding ones, starting from 0 and 1.</p>
                            <hr class="my-4">
                            <p>Develop an application with any features like OOP, User interface, Display result, Validation field.</p>
                        </div>
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
                        </span>
                        <h1>Fibonacci</h1>
                        <p class="heading"></p>
                    </div>
                    <div class="comments-container commentAlign">
                        <div class="comment-avatar">
                            <img src="../assets/img/users.png" alt="user" />
                        </div>
                        <div class="comment-box">
                            <div class="comment-head2">
                                <form id="data" action="controller/handler.php" method="post">
                                    <p>Data:</p>
                                    <div class="dataInput">
                                        <input type="text" class="form-control" name="fibonacciNumber" size="11" disabled value='.$result.' /> 
                                        <button type="submit" class="btn btn-primary buttonFibonacci" onClick="history.go(-1);">Back</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </body>
            
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                crossorigin="anonymous"></script>
            <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"
                integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
                crossorigin="anonymous"></script>
            
            </html>';
        } else {
            echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <title>MOB</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="icon" type="image/x-icon" href="../favicon.ico" />
                <link href="../assets/css/style.css" rel="stylesheet">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            
            </head>
            <body>
                <main class="container">
                    <div class="row productAlign">
                        <div class="jumbotron">
                            <h1 class="display-3">Fibonacci Algorithm</h1>
                            <p class="lead">In mathematics, the Fibonacci numbers, commonly denoted Fn, form a sequence, called
                            the Fibonacci sequence, such that each number is the sum of the two preceding ones, starting from 0 and 1.</p>
                            <hr class="my-4">
                            <p>Develop an application with any features like OOP, User interface, Display result, Validation field.</p>
                        </div>
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
                        </span>
                        <h1>Fibonacci</h1>
                        <p class="heading"></p>
                    </div>
                    <div class="comments-container commentAlign">
                        <div class="comment-avatar">
                            <img src="../assets/img/users.png" alt="user" />
                        </div>
                        <div class="comment-box">
                            <div class="comment-head2">
                                <form id="data" action="controller/handler.php" method="post">
                                    <p>Data:</p>
                                    <div class="dataInput">';
                                    if($flagError){
                                        echo '<textarea type="text" disabled name="data" rows="2" cols="35">Number too high.</textarea>';
                                    }else{
                                        echo '<textarea type="text" disabled name="data" rows="2" cols="35">Introduce a number.</textarea>';
                                    }
                                    echo '<button type="submit" class="btn btn-primary buttonFibonacci" onClick="history.go(-1);">Back</button>
                                    </div>
                                </form>
                            </div>
            
                        </div>
                    </div>
                </main>
            </body>
            
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                crossorigin="anonymous"></script>
            <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"
                integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
                crossorigin="anonymous"></script>
            
            </html>';
        }
    }

?>