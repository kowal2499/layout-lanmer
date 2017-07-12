<?php

    $menu = array(
        array("name" => "O nas", "link" => "", "submenu" => array()),
        array("name" => "Oferta", "link" => "", "submenu" => array(
                array("name" => "Zabiegi na twarz", "link" => "", "submenu" => array(
                        array("name" => "Meder Beauty Science", "link" => "", "submenu" => array()),
                        array("name" => "Laseroterapia", "link" => "", "submenu" => array()),
                        array("name" => "Wypełnianie zmarszczek", "link" => "", "submenu" => array()),
                        array("name" => "Mezoterapia", "link" => "", "submenu" => array())
                        )),
                array("name" => "Kosmetyka upiększająca", "link" => "", "submenu" => array()),
                array("name" => "Zabiegi na ciało SPA", "link" => "", "submenu" => array()),
                array("name" => "Zabiegi anticellulitowe", "link" => "", "submenu" => array()),
                array("name" => "Masaż", "link" => "", "submenu" => array()),
                array("name" => "Stylizacja paznokci", "link" => "", "submenu" => array()),
                array("name" => "Wieczór panieński", "link" => "", "submenu" => array())
            )),
        array("name" => "Eksperci", "link" => "", "submenu" => array()),
        array("name" => "Nowości", "link" => "", "submenu" => array()),
        array("name" => "Blog", "link" => "", "submenu" => array())
    );

    function drawMenu($items) {

        foreach ($items as $menuItem) {

            if (!empty($menuItem["submenu"])) {
                echo "<li class=\"dropdown\">";
                echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                echo $menuItem["name"];
                echo " <span class=\"caret\"></span>";
                echo "</a>";
                echo "<ul class=\"dropdown-menu\">";
                drawMenu($menuItem["submenu"]);
                echo "</ul>";
                echo "</li>";
            } else {
                echo "<li>";
                echo "<a href='".$menuItem["link"]."'>";
                echo $menuItem["name"];
                echo "</a>";
                echo "</li>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

    <title>LANMER Layout</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Google webfonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin-ext" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div id="front">
        <section id="hero">

            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="vert">
                            <img src="img/lanmer-logo.png" alt="Lanmer logo">

                            <nav class="navbar">
                                <ul class="nav navbar-nav">
                                    <?php
                                        drawMenu($menu[1]["submenu"]);
                                    ?>
                                </ul>
                            </nav>

                        </div>
                    </div>

                    <div class="col-sm-8">
                        <nav class="navbar" id="sticky">
                            <div id="horiz">
                                <ul class="nav navbar-nav">
                                    <?php
                                        drawMenu($menu);
                                    ?>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>

        </section><!-- #hero -->

        <div class="container">
            <section id="body">
                <article>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta perspiciatis nobis aut deleniti, corrupti sunt asperiores nulla. Voluptate aperiam facere adipisci, in vel iste porro pariatur nemo animi. Quae temporibus fugiat soluta, ullam praesentium suscipit, sequi maiores neque vitae, dolor repudiandae itaque sint tenetur numquam quas recusandae officiis culpa doloribus!
                </article>
                <article>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quos tempore. Minima laborum id laudantium, esse tempora minus perferendis molestias eos. Id soluta reprehenderit quidem quia voluptatibus commodi totam, doloremque ipsam illo fugit porro, debitis autem veniam exercitationem corrupti distinctio! Doloremque quis assumenda quam dolore laboriosam illum totam labore voluptatum!
                </article>
                <article>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ipsam nam cumque doloribus quia esse optio laboriosam, magnam, sed quidem nesciunt. Consequuntur eligendi delectus ab, explicabo vitae magnam, vero at nihil illo aperiam accusamus, ea velit dolore odit consectetur distinctio minima maiores ut eius. Adipisci aspernatur quaerat earum vero vitae?
                </article>
                <article>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium voluptas molestiae aspernatur cumque consequatur quibusdam facilis cum laboriosam qui, alias soluta aliquam sunt, unde libero. Autem minima magnam deleniti dolorum sint perspiciatis totam! Veritatis at, dolorum itaque quibusdam similique voluptas nihil rem neque! Fugit ipsam quo nesciunt laboriosam accusamus autem?
                </article>
                <article>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, ipsa. Voluptate officiis praesentium numquam ex consequuntur fugiat libero fugit non aspernatur labore eaque nulla incidunt cupiditate illum nihil, unde itaque voluptatum aliquid voluptas perspiciatis? Culpa nostrum, hic porro aliquam, totam vero libero aspernatur impedit molestiae, architecto facilis unde sapiente a!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa est, sunt inventore officia reiciendis ducimus illum enim quis quaerat autem aut sit ut aspernatur expedita praesentium, animi tempora nihil nesciunt neque nulla repudiandae sed perferendis beatae explicabo. Similique nulla perferendis illum ex repudiandae architecto fugiat temporibus nostrum excepturi eligendi vero dolores quia, ad voluptate aut est nihil pariatur delectus atque vitae impedit incidunt velit nemo. Voluptas tenetur similique veniam minus necessitatibus quaerat facilis provident laboriosam quam beatae explicabo nam recusandae odit sint perferendis illo perspiciatis eius suscipit atque, facere. Natus fugiat doloremque, voluptate veniam voluptas nesciunt minus ipsa illo impedit inventore soluta alias, ipsum nihil dolor, perferendis dignissimos cumque. Quod soluta perspiciatis dolore. Atque vero, adipisci hic fugiat repellat delectus, explicabo perspiciatis consequatur aut aspernatur similique accusamus itaque dicta ullam voluptatum sequi aperiam rem esse porro facere est quod iure. Itaque dolorem debitis velit expedita facere mollitia, fugit quas at enim quaerat corporis ipsa explicabo, blanditiis nostrum commodi, vero illo in. Ab rerum explicabo eum tempore amet quaerat perspiciatis, cumque aut aperiam ad. Molestias accusantium quam neque dicta, ratione. Consectetur, inventore dolores blanditiis dolor minus dicta impedit in consequatur vel numquam, earum deleniti reprehenderit fuga molestiae doloribus natus esse quasi quidem incidunt explicabo, fugiat magnam quisquam, vitae. Similique reprehenderit velit aliquam qui laborum iste, necessitatibus nostrum repudiandae quos eaque, sequi nulla delectus obcaecati facere aperiam. Harum hic voluptate quibusdam fugiat laboriosam officiis repudiandae alias rerum eum, dolorem a temporibus blanditiis. Temporibus, accusamus incidunt deserunt, repudiandae ipsam qui optio deleniti ullam, sed consectetur molestias distinctio, voluptatem aspernatur perspiciatis quaerat. Ex maiores id beatae blanditiis temporibus dicta quos quisquam doloremque perferendis quam. Accusantium, consequuntur maiores nihil modi libero facere exercitationem enim ipsum laudantium cupiditate suscipit, nemo, odio, error non deleniti. Maxime, itaque eum laboriosam natus magnam libero blanditiis quos veniam repellendus deleniti, magni ducimus asperiores minima! Illum autem, odit inventore rem, rerum ratione dolor possimus eveniet aperiam doloribus vel beatae dolorum odio, aut deleniti et, quos eos natus facere voluptatem? Officia placeat voluptas veritatis aspernatur dignissimos a nemo molestiae fugit blanditiis, accusamus libero, officiis ducimus velit consectetur. Et voluptatem dicta rem, quae laudantium id veniam! Voluptatum ut ratione corrupti. Quae voluptatibus esse, dolore aut fuga eaque excepturi eos magni porro iusto. Dolorum quod quos iste quisquam ratione doloribus ipsum perspiciatis. Sapiente, impedit nihil corrupti aspernatur, dolorem aperiam! Excepturi dignissimos placeat molestias enim sapiente qui veniam perferendis nostrum praesentium iusto incidunt nam laudantium necessitatibus distinctio repudiandae amet deleniti facere, soluta iste quidem adipisci reiciendis nisi aperiam temporibus! Illo eos nesciunt nostrum unde, natus quaerat inventore illum voluptatibus necessitatibus, in iste harum esse facere perferendis omnis est sint quo, vitae dolores assumenda consequatur iure sapiente cum nulla! Assumenda quae dolores praesentium veniam, recusandae porro? Velit ad possimus voluptatum perspiciatis officia iste temporibus ipsam amet suscipit, et consequatur incidunt dolore ipsa quas ducimus blanditiis doloribus nostrum, deserunt aliquid itaque. Itaque, qui asperiores delectus quidem consequuntur dolorem incidunt quia voluptatem, perspiciatis provident, rerum nulla reprehenderit tempore quibusdam eius doloribus a eveniet eligendi amet possimus voluptate praesentium quas iste? Debitis explicabo, consequuntur aliquid reprehenderit soluta iusto odit voluptatibus minima voluptate porro voluptates consequatur veniam libero aliquam vel unde, ex consectetur neque atque ipsam eius. Sunt odit minus possimus officia vitae doloremque laudantium tempore dolores dolorem quia, eaque ut atque fugit voluptatum dolor rem. Culpa a ut, officiis, reprehenderit magnam iure quae nisi, vel quasi cum eligendi consequatur quo repudiandae. Laudantium similique, autem voluptas iusto fugit recusandae, nesciunt fuga harum, qui praesentium sit! Commodi rerum aut voluptate a pariatur facere adipisci dignissimos nulla. Repellat delectus adipisci similique consequatur vero optio beatae eaque nihil laboriosam perferendis, quas dicta assumenda atque, natus rem. Excepturi quae, explicabo, in doloremque sed fugit illum recusandae voluptatibus ex nihil alias ad, cum id suscipit ea nulla quas. Ipsum neque error dolores odit voluptate eaque voluptatibus saepe repellendus doloremque natus, est quo libero ipsa iste provident qui vero consectetur unde mollitia labore repellat. Voluptates perferendis nihil veritatis beatae sed laborum magnam sapiente sint mollitia nostrum commodi eaque iusto atque, id. Labore consequuntur repellendus ratione deleniti earum assumenda minima animi iste odit commodi molestias repellat est praesentium, quibusdam, vitae. Ex quod ullam saepe ad tempora quis eos aliquam officia, nulla modi aspernatur animi veritatis totam accusamus necessitatibus dicta est recusandae consequuntur libero. Maxime animi praesentium ad vel ea, debitis tenetur quae, maiores, consequuntur, qui adipisci. Repellat officiis vitae laborum enim similique libero odit reprehenderit debitis labore, aspernatur unde, neque qui possimus, alias eligendi eius magni eos repellendus dolorum optio doloremque inventore? A aliquam at, odit qui explicabo veniam delectus nostrum! Labore sint ratione odio, magni possimus dolore consectetur nostrum nobis repellendus facilis cupiditate rem aliquid dignissimos tenetur deserunt et minus, cumque quos fugiat illo assumenda dolor velit obcaecati eum! Dicta ipsa iusto unde, minus labore eum beatae omnis libero. Mollitia officia sunt perspiciatis fuga deleniti repellendus sapiente, quisquam, nostrum ab tempore asperiores laborum rem eveniet consectetur eum, odio praesentium aut cumque ipsa aspernatur sint a! Vero molestias dolores ratione fuga qui, nobis rem harum atque officia nam vel voluptatem expedita laudantium, quia modi mollitia adipisci. Ipsam quo voluptatum dolores ipsum, impedit illum fugiat, et sed quisquam ipsa unde modi corporis soluta, voluptate magni inventore nulla dolore temporibus molestias atque nemo cum. Alias illo animi, id et fuga quidem quo corporis perferendis ratione eum laudantium magni enim, quos sunt, iste. Laboriosam, officia, voluptate voluptates maxime, ad, architecto recusandae amet quos ea illum doloremque. Debitis, corrupti ipsam recusandae. At dolore ducimus vel necessitatibus voluptates rem saepe reiciendis, provident. Tempora ad temporibus doloremque voluptatum, accusamus minima nostrum cumque accusantium minus hic suscipit similique nam quos fugit, enim laudantium quod nemo nulla ipsam corrupti illo dolorem autem alias! Quidem dolores consequatur ea laborum eum omnis nostrum? Porro officia dicta deleniti repudiandae ab saepe omnis cupiditate fuga. Veniam quisquam odio tenetur repellat sed, deleniti nostrum ipsum perferendis architecto saepe recusandae possimus velit molestias beatae sunt, ipsa asperiores atque quibusdam! Quam cumque possimus eos et, quibusdam, similique debitis ex fuga? Quis iste repudiandae error corrupti doloremque laboriosam, tenetur quos consequuntur asperiores dignissimos!
                </article>
            </section>
        </div> <!-- container -->

        <footer>
            <div class="container">
                <article>
                    <!--<div class="content">-->
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, eaque doloremque tenetur exercitationem aliquid aut sapiente. Ut, architecto veniam nulla nisi impedit doloribus cum corrupti tempore rerum odio vitae quas aliquam, molestiae suscipit, soluta ipsam necessitatibus. Aperiam possimus quas adipisci accusamus, vero eveniet ab numquam, vitae asperiores perferendis quos, saepe sint pariatur dolores. Cupiditate odit architecto iusto laboriosam, debitis fugit fuga vero at sunt ducimus, ab sint asperiores animi consectetur ipsa ad quo, soluta officia est nostrum doloribus ut ullam. Mollitia laborum nesciunt est distinctio soluta id dignissimos libero ratione laudantium perspiciatis voluptatibus nihil placeat ipsam fuga, inventore, totam sed.
                    <!--</div>-->
                </article>
            </div>
        </footer>

    </div>

    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
