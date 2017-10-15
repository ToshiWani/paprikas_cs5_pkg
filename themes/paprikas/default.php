<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Bootstrap 101 Template</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">



    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/node_modules/vegas/dist/vegas.css">

    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/style.css">

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="toppage">
    <div class="toppage__header" ><!-- Placeholder for the photo --></div>
    <div class="toppage__picture-border"><!-- Nothing --></div>

    <div class="toppage__logo">
        <div class="col-xs-8 col-xs-offset-2">
            <img src="<?= $view->getThemePath() ?>/img/paprikas-logo.png" class="img-responsive center-block">
        </div>
    </div>
</div>


<div class="container">

    <div class="row">
        <div class="col-xs-12">


                    <h1 class="h1 text-center">Welcome!</h1>
                    <p class="h1 text-center">Üdvözöljük!</p>
                    <p class="lead text-center">Welcome to the only Hungarian Restaurant in the Lehigh Valley, Pennsylvania.</p>
                    <p>
                        Welcome to the only Authentic Hungarian Restaurant in the Lehigh Valley, Eastern Pennsylvania. We opened our doors in 1999 and ever since then we have been serving our friends and neighbours some finest Hungarian cuisine's in the Northeast of the United States.
                    </p>



                    <p>
                        Our menu features some of the most popular Hungarian cuisine's that are recognized throughout the world. The menu includes featured dishes such as Chicken Paprikas served with dumpling noodles (Nokedli), Stuffed Cabbage, Beef Paprikas served over dumpling noodles (Nokedli), Goulash Leves, Cabbage Noodles, Cottage Cheese Noodles and our world famous Breaded Porkcops. For dessert we offer homemade Palacsinta (Crepes) with a vasr variety of fillings such as Apricot, Prune Levar, Cottage Cheese and many other traditional fillings. The mentioned entrees are just a small sample of our exciting dishes that we offer at Paprikas Restaurant.
                    </p>
                    <p>
                        Since Paprikas is a family owned and operated restaurant, all of the home cooked meals are prepared by Anya and Apa team. We welcome you to stop by, so you can taste some of the finest Hungarian home cooked meals that we have to offer here at Paprikas Restaurant.
                    </p>
                    <p>
                        Feel free to BYOB your favorite wine to enjoy with out fine cuisine's since we do not have a liquor/beer license.
                    </p>



                <p class="lead text-center">
                    Hamarosan Talalkozunk!
                </p>
                <p class="lead text-center">
                    See You Soon!
                </p>

            <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
            <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
            <ul class="juicer-feed" data-feed-id="paprikas_restaurant" data-style="polaroid">
                <h1 class="referral"><a href="https://www.juicer.io">Powered by Juicer</a></h1>
            </ul>



        </div>

        </div>
    </div>
</div>






<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="<?= $view->getThemePath() ?>/node_modules/vegas/dist/vegas.js"></script>

<script>
    $(function(){
        $('.toppage__header').vegas({
            slides:[
                {src: '<?= $view->getThemePath() ?>/img/spices.jpg'}
            ]
        })
    })
</script>

</body>
</html>