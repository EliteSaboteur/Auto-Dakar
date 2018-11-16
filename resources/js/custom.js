/**
 * Created by Intern on 11/12/2018.
 */

var unitati = ['unu', 'doi', 'trei', 'patru', 'cinci', 'șase', 'șapte', 'opt', 'nouă'];
var zecimale = ['', 'două', 'trei', 'patru', 'cinci', 'șai', 'șapte', 'opt', 'nouă'];
var zeci = ['una ', 'două ', 'trei ', 'patru ', 'cinci ', 'șase ', 'șapte ', 'opt ', 'nouă ', 'zece ',
    'unsprezece ', 'doisprezece ', 'treisprezece ', 'paisprezece ', 'cincisprezece ', 'șaisprezece ', 'șaptesprezece ',
    'optsprezece ', 'nouăsprezce '];
var sute = ['una', 'două', 'trei', 'patru', 'cinci', 'șase', 'șapte', 'opt', 'nouă'];
$("button").click(function () {
    var value = $("#valoare").val().split('.');
    var lei = value[0];
    var bani = value[1];

    var strValue = translate(lei.length, lei);

    $(".val").html(strValue+' LEI și '+translate(bani.length, bani)+' BANI');
//            alert(strValue)
});

function translate(length, value) {
    var strValue = '';
    for (i = 1; i <= length; i++) {
        currentVal = value.charAt(value.length - 1);
        switch (i) {
            case 1 :
                if (currentVal != '0') {
                    nextVal = value.charAt(value.length - 2);
                    if (nextVal == '0' || nextVal == '1') {
                        strValue = zeci[parseInt(nextVal + currentVal) - 1];
                        i++;
                        value = value.slice(0, -1);
                    } else {
                        strValue = ' și ' + unitati[parseInt(currentVal) - 1];
                    }
                }
                break;//unitati
            case 2 :
                if (currentVal != '0') {
                    strValue = zecimale[parseInt(currentVal) - 1] + 'zeci' + strValue;
                }
                break;//zeci
            case 3 :
                if (currentVal != '0') {
                    if (currentVal == '1') {
                        strValue = 'una sută ' + strValue;
                    } else {
                        strValue = sute[parseInt(currentVal) - 1] + ' sute ' + strValue;
                    }
                }
                break;//sute
            case 4 :
                if (i == length) {
                    if (currentVal == '1') {
                        strValue = 'una mie ' + strValue;
                        break;
                    }
                } else {
                    strValue = ' mii ' + strValue;
                }
                nextVal = value.charAt(value.length - 2);
                if (nextVal == '0' || nextVal == '1') {
                    strValue = zeci[parseInt(nextVal + currentVal) - 1] + strValue;
                    i++;
                    value = value.slice(0, -1);
                } else {
                    strValue = ' și ' + unitati[parseInt(currentVal) - 1] + strValue;
                }
                break;//mii
            case 5 :
                if (currentVal != '0') {
                    strValue = zecimale[parseInt(currentVal) - 1] + 'zeci' + strValue;
                }
                break;//zeci de mii
            case 6 :
                if (sute[parseInt(currentVal) - 1] !== 'undefined') {

                    strValue = sute[parseInt(currentVal) - 1] + " sută " + strValue;

                }
                break;//sute de mii
        }
        value = value.slice(0, -1);
    }
    return strValue;
}
