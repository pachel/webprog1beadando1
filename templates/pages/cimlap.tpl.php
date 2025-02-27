
    <h1>Tanulást Segítő Weboldal – Általános Leírás</h1>


<p class="lead">A tanulást segítő weboldal egy interaktív platform, amely lehetőséget biztosít a felhasználók számára, hogy különböző témákban teszteljék tudásukat. Az oldal fő funkciója, hogy űrlapok segítségével kérdéseket tegyen fel, amelyeket a felhasználók megválaszolhatnak, majd azonnali visszajelzést kapnak a helyességükről. Az alábbiakban bemutatjuk az oldal működését és főbb funkcióit.</p>

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#felhasznaloiFelulet">
                1. Felhasználói Felület
            </button>
        </h2>
        <div id="felhasznaloiFelulet" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item">Az oldal főoldala egy áttekinthető menüt kínál.</li>
                    <li class="list-group-item">Minden témakörhöz külön teszt tartozik.</li>
                    <li class="list-group-item">Tartalmazhat feleletválasztós és igaz/hamis kérdéseket.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kerdesekValaszok">
                2. Kérdések és Válaszok
            </button>
        </h2>
        <div id="kerdesekValaszok" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item">A kérdések véletlenszerűen jelennek meg.</li>
                    <li class="list-group-item">Lehetőség van több válasz megjelölésére.</li>
                    <li class="list-group-item">A rendszer automatikusan ellenőrzi a válaszokat.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ellenorzesErtekeles">
                3. Ellenőrzés és Kiértékelés
            </button>
        </h2>
        <div id="ellenorzesErtekeles" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item">A válaszok beküldése után azonnali visszajelzés történik.</li>
                    <li class="list-group-item">Helytelen válasz esetén magyarázat jelenik meg.</li>
                    <li class="list-group-item">A felhasználók láthatják az elért pontszámokat.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <div class="mt-5">
        <h2>Videós Segédanyagok</h2>
        <?php
        $oszlopok = 3;
        for($i =0;$i<count($megjeleniteni);$i++){
            if($i%$oszlopok == 0){
                echo "\n\t\t<div class='row'>";
            }
            echo "\n\t\t\t<div class=\"col-md-".(12/$oszlopok)."\">
                <h5>".$megjeleniteni[$i]["nev"]."</h5>
                <video class=\"w-100\" controls>
                    <source src=\"".$megjeleniteni[$i]["path"]."\">
                    A böngésződ nem támogatja a videólejátszást.
                </video>
            </div>";
            if($i%$oszlopok == $oszlopok-1 || $i==count($megjeleniteni)-1){
                echo "\n\t\t</div>";
            }
        }
        ?>

        <div class="row">
            <div class="col-md-6">
                <h5>Oktatóvideó YouTube-ról 1.</h5>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube videó" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h5>Oktatóvideó YouTube-ról 2.</h5>
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/1JFAqBIJVUQ?si=Mm7bnfJ18JGSnrfy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div>
                <h2>A weboldal fizikai helye</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d839.4652554904094!2d20.25930526967479!3d46.845100915475236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDbCsDUwJzQyLjQiTiAyMMKwMTUnMzUuOCJF!5e1!3m2!1shu!2shu!4v1740652308654!5m2!1shu!2shu" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
