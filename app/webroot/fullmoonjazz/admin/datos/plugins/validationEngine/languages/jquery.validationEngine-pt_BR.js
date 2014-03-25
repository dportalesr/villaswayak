(function($){
    $.fn.validationEngineLanguage = function(){};
    $.validationEngineLanguage = {
        newLang: function(){
            $.validationEngineLanguage.allRules = {
                "required": {
                    "regex": "none",
                    "alertText": "* Este campo Ã© obrigatÃ³rio",
                    "alertTextCheckboxMultiple": "* Favor selecionar uma opÃ§Ã£o",
                    "alertTextCheckboxe": "* Este checkbox Ã© obrigatÃ³rio",
                    "alertTextDateRange": "* Ambas as datas do intervalo sÃ£o obrigatÃ³rias"
                },
                "dateRange": {
                    "regex": "none",
                    "alertText": "* Intervalo de datas invÃ¡lido"
                },
                "dateTimeRange": {
                    "regex": "none",
                    "alertText": "* Intervalo de data e hora invÃ¡lido"
                },
                "minSize": {
                    "regex": "none",
                    "alertText": "* Permitido o mÃ­nimo de ",
                    "alertText2": " caractere(s)"
                },
                "maxSize": {
                    "regex": "none",
                    "alertText": "* Permitido o mÃ¡ximo de ",
                    "alertText2": " caractere(s)"
                },
				"groupRequired": {
                    "regex": "none",
                    "alertText": "* VocÃª deve preencher um dos seguintes campos"
                },
                "min": {
                    "regex": "none",
                    "alertText": "* Valor mÃ­nimo Ã© "
                },
                "max": {
                    "regex": "none",
                    "alertText": "* Valor mÃ¡ximo Ã© "
                },
                "past": {
                    "regex": "none",
                    "alertText": "* Data anterior a "
                },
                "future": {
                    "regex": "none",
                    "alertText": "* Data posterior a "
                },	
                "maxCheckbox": {
                    "regex": "none",
                    "alertText": "* MÃ¡ximo de ",
                    "alertText2": " opÃ§Ãµes permitidas"
                },
                "minCheckbox": {
                    "regex": "none",
                    "alertText": "* Favor selecionar ",
                    "alertText2": " opÃ§Ã£o(Ãµes)"
                },
                "equals": {
                    "regex": "none",
                    "alertText": "* Os campos nÃ£o correspondem"
                },
                "creditCard": {
                    "regex": "none",
                    "alertText": "* NÃºmero de cartÃ£o de crÃ©dito invÃ¡lido"
                },
                "phone": {
                    "regex": /^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/,
                    "alertText": "* NÃºmero de telefone invÃ¡lido"
                },
                "email": {
                    "regex": /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
                    "alertText": "* EndereÃ§o de email invÃ¡lido"
                },
                "integer": {
                    "regex": /^[\-\+]?\d+$/,
                    "alertText": "* NÃºmero inteiro invÃ¡lido"
                },
                "number": {
                    "regex": /^[\-\+]?(([0-9]+)([\.,]([0-9]+))?|([\.,]([0-9]+))?)$/,
                    "alertText": "* NÃºmero decimal invÃ¡lido"
                },
                "date": {
                    "regex": /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/,
                    "alertText": "* Data invÃ¡lida, deve ser no formato AAAA-MM-DD"
                },
                "ipv4": {
                    "regex": /^((([01]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))[.]){3}(([0-1]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))$/,
                    "alertText": "* EndereÃ§o IP invÃ¡lido"
                },
                "url": {
                    "regex": /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i,
                    "alertText": "* URL invÃ¡lida"
                },
                "onlyNumberSp": {
                    "regex": /^[0-9\ ]+$/,
                    "alertText": "* Apenas nÃºmeros"
                },
                "onlyLetterSp": {
                    "regex": /^[a-zA-Z\ \']+$/,
                    "alertText": "* Apenas letras"
                },
                "onlyLetterNumber": {
                    "regex": /^[0-9a-zA-Z]+$/,
                    "alertText": "* NÃ£o sÃ£o permitidos caracteres especiais"
                },
                "real": {
                	// Brazilian (Real - R$) money format
                	"regex": /^([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/,
                    "alertText": "* NÃºmero decimal invÃ¡lido"
                }
            };
            
        }
    };

    $.validationEngineLanguage.newLang();
    
})(jQuery);
