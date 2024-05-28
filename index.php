<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/skripty.js"></script>
</head>
<body>


    <form action="" method="post" id="invoiceForm">
    <h1>Jednoduchý formulár</h1>

        <section>
            <div id="itemsContainer">
            <table class="moja-tabulka">
                <tbody>
                    <tr>
                        <td><input type="text" name="nazov-polozky" placeholder="Názov položky" </td>
                        <td><input type="text" name="suma-polozky" placeholder="Suma položky" ></td>
                        <td><input type="text" name="cas-polozky" placeholder="Čas položky"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button type="button" id="addItemButton">Pridať položku</button>  
        </section>

        <section class="dodavatel">
            <h2>Dodávateľ</h2>
            <input type="text" name="" id="nazov-spolocnosti-dpdavatel" placeholder="Názov spoločnosti">
            <input type="text" name="" id="ulica-dodavatel" placeholder="Ulica">
            <input type="text" name="" id="cislo-dodavatel" placeholder="Číslo popisné" >
            <input type="text" name="" id="psc-dodavatel" placeholder="PSČ">
            <input type="text" name="" id="mesto-dodavatel" placeholder="Mesto">
            <input type="text" name="" id="ico-dodavatel" placeholder="IČO">
            <input type="text" name="" id="dic-dodavatel" placeholder="DIČ">
            <input type="text" name="" id="ic-dph-dodavatel" placeholder="IČ DPH">
            <input type="text" name="" id="iban-dodavatel" placeholder="IBAN">
            <input type="text" name="" id="vs-dodavatel" placeholder="Variabilný symbol">
            <input type="text" name="" id="sp-dodavatel" placeholder="Špecifický symbol">
            <input type="text" name="" id="e-mail-dodavatel" placeholder="E-mail">
            <input type="text" name="" id="telefon-dodavatel" placeholder="Telefón">
        </section>


        <section class="dodavatel">
            <h2>Odberateľ / Klient</h2>
            <input type="text" name="" id="nazov-klient-final" placeholder="Názov spoločnosti">
            <input type="text" name="" id="ulica-klient-final" placeholder="Ulica" >
            <input type="text" name="" id="cislo-klient-final" placeholder="Číslo popisné" >
            <input type="text" name="" id="psc-klient-final" placeholder="PSČ" >
            <input type="text" name="" id="mesto-klient-final" placeholder="Mesto" >
            <input type="text" name="" id="ico-klient-final" placeholder="IČO" >
            <input type="text" name="" id="dic-klient-final" placeholder="DIČ" >
            <input type="text" name="" id="ic-dph-klient-final" placeholder="IČ DPH" >
            <input type="text" name="" id="datum-vystavenia" placeholder="Dátum vystavenia" value="30.05.2024"> //formát DD.MM.YYYY
            <input type="text" name="" id="datum-dodania" placeholder="Dátum dodania" value="30.05.2024"> //formát DD.MM.YYYY
            <input type="text" name="" id="datum-splatnosti" placeholder="Dátum splatnosti" value="14.06.2024"> //formát DD.MM.YYYY

        </section>

    <button type="submit" id="btnVytvorFakturu">Odoslať</button>


        


    </form>

    
</body>
</html>