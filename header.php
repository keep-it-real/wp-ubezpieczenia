<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubezpieczenia</title>
    <?php wp_head() ?>
</head>
<body>
    <header>  
        <div class="hamburgerMenu">
	    <div class="hamburger top"></div>
	    <div class="hamburger"></div>
	    <div class="hamburger bottom"></div>
	</div>
        <nav>
            <a href="#" class="logo">
                <div class="leaf">
                    <div class="small"></div>
                    <div class="big"></div>
                </div> 
                <h2><span>twoje</span>finanse</h2>
                <p>ubezpieczenia</p>
            </a> 
            <ul>
                <li><a href="#">o nas</a></li>
                <li><a href="#">oferta</a></li>
                <li><a href="#">towarzystwa ubezpieczeń</a></li>
                <li><a href="#">dołącz do nas</a></li>
                <li><a href="#">przydatne materiały</a></li>
                <li><a href="#">oddziały</a></li>
            </ul>
        </nav>
        <section>
            <div class="overlay"></div>
            <div class="container">
                <div class="text">
                    <h1>Ubezpieczenie majątkowe</h1>
                    <p>Skontaktuj się z nami i skorzystaj<br> ze specjalnej oferty!</p>
                </div>
                <form>
                    <h4>Podaj daje kontaktowe, a my przygotujemy najlepszą ofertę</h4>
                    <input type="text" placeholder="Imię i nazwisko" id="name" name="name"><br>
                    <input type="email" placeholder="Adres e-mail" id="email" name="email"><br>
                    <input type="tel" placeholder="Nr telefonu" id="phone" name="phone"><br>
                    <input type="text" placeholder="Miejscowość" id="city" name="city">
                    <input type="text" placeholder="Kod pocztowy" id="zipcode"><br>
                    <div>
                        <input type="checkbox" id="rules" name="rules">
                        <label for="rules">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</label><br>
                    </div>
                    <input type="submit" value="Wyślij" id="submit">  
                </form> 
            </div>
        </section>
    </header>  
