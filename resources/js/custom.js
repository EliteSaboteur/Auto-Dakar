/**
 * Created by Intern on 11/12/2018.
 */

    var sizeMap = ['unități','zeci','sute','mii','zeciDeMii','suteDeMii'];
    var unitati = ['unu','doi','trei','patru','cinci','șase','șapte','opt','nouă'];
    var zece = ['un','doi','trei','pai','cinci','șai','șapte','opt','nouă','zece'];
    var zeci = ['una mie ','două mii ','trei mii ','patru mii ','cinci mii ','șase mii ','șapte mii ','opt mii ','nouă mii ','zece mii ',
        'unsprezece mii ','doisprezece mii ','treisprezece mii ','paisprezece mii ','cincisprezece mii ','șaisprezece mii ','șaptesprezece mii ',
        'optsprezece mii','nouăsprezce mii'];
    var sute = ['una','două','trei','patru','cinci','șase','șapte','opt','nouă'];
    $("button").click(function(){
        var value = $("#valoare").val().split('.');
        var lei = value[0];
        var bani = value[1];

        alert(bani +'|'+ lei.length);
        var strValue = translate(lei.length,lei);
//            alert(strValue)
    });

    function translate(length,value)
    {
        var strValue = '';
        for(i = length; i > 0;i--)
        {
            currentVal = value.charAt(i-1);
            switch(i){
                case 1 : break;//unitati
                case 2 : break;//zeci
                case 3 : break;//sute
                case 4 : break;//mii
                case 5 : if(currentVal == '0' || currentVal == '1')
                            {
                                if(value.charAt(i-2)==0){strValue = strValue + 'mii '}
                                else{
                                    var combinedVal = parseInt(currentVal+value.charAt(i-2))-1;
                                    strValue = strValue + zeci[combinedVal-1];
                                }

                            }else{
                                strValue = strValue + sute[currentVal-1]+" zeci ";
                            }
                        break;//zeci de mii
                case 6 : if(!sute.indexOf(currentVal-1) === -1){strValue = sute[currentVal-1] + " sută ";}
                        break;//sute de mii
            }
            //currentVal = value %10

            //if (currentVal != 0){
            //    if(i+1!=length){strValue = ' și '+unitati[currentVal-1] + strValue }else{strValue = unitati[currentVal-1]+strValue}
            //}
            //value = Math.floor(value / 10);
            value = value.slice(0,-1);
//sdf
        }
        return strValue;
    }
