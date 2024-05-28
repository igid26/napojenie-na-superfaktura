

var ajaxurl = 'spracovanie-dat.php';

jQuery(document).ready(function ($) {
    let itemCount = 1;

    $('#addItemButton').on('click', function () {
        const newItemRow = `
                    <tr>
                        <td><input type="text" name="nazov-polozky" placeholder="Názov položky" required></td>
                        <td><input type="number" name="suma-polozky" placeholder="Suma položky" required></td>
                        <td><input type="text" name="cas-polozky" placeholder="Čas položky"></td>
                    </tr>
                `;
        $('.moja-tabulka tbody').append(newItemRow);
        itemCount++;
    });

    $('#btnVytvorFakturu').on('click', function () {
        var formData = {
            nazov_spolecnosti_dpdavatel: $('#nazov-spolocnosti-dpdavatel').val(),
            ulica_dodavatel: $('#ulica-dodavatel').val(),
            cislo_dodavatel: $('#cislo-dodavatel').val(),
            psc_dodavatel: $('#psc-dodavatel').val(),
            mesto_dodavatel: $('#mesto-dodavatel').val(),
            ico_dodavatel: $('#ico-dodavatel').val(),
            dic_dodavatel: $('#dic-dodavatel').val(),
            ic_dph_dodavatel: $('#ic-dph-dodavatel').val(),
            iban_dodavatel: $('#iban-dodavatel').val(),
            vs_dodavatel: $('#vs-dodavatel').val(),
            sp_dodavatel: $('#sp-dodavatel').val(),
            email_dodavatel: $('#e-mail-dodavatel').val(),
            telefon_dodavatel: $('#telefon-dodavatel').val(),
            web_dodavatel: $('#web-dodavatel').val(),
            nazov_klient_final: $('#nazov-klient-final').val(),
            ulica_klient_final: $('#ulica-klient-final').val(),
            cislo_klient_final: $('#cislo-klient-final').val(),
            psc_klient_final: $('#psc-klient-final').val(),
            mesto_klient_final: $('#mesto-klient-final').val(),
            ico_klient_final: $('#ico-klient-final').val(),
            dic_klient_final: $('#dic-klient-final').val(),
            ic_dph_klient_final: $('#ic-dph-klient-final').val(),
            datum_vystavenia: $('#datum-vystavenia').val(),
            datum_dodania: $('#datum-dodania').val(),
            datum_splatnosti: $('#datum-splatnosti').val()
        };

        var noveRadkyData = [];

        $('.moja-tabulka tbody tr').each(function (index) {
            var novyRadekData = {
                nazov_polozky: $(this).find('[name="nazov-polozky"]').val(),
                cas_polozky: $(this).find('[name="cas-polozky"]').val(),
                suma_polozky: $(this).find('[name="suma-polozky"]').val()
            };
            noveRadkyData.push(novyRadekData);
        });

        formData['tabulka'] = noveRadkyData;

        console.log(formData);

        var postData = {
            data: formData
        };

        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: postData,
            success: function (response) {
                alert('Faktúra bola úspešne vytvorená!');
                console.log(response);
            },
            error: function (error) {
                alert('Došlo k chybe pri vytváraní faktúry.');
                console.log(error.responseText);
            }
        });
    });
});