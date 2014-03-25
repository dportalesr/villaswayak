(function($){
    $.fn.validationEngineLanguage = function(){
    };
    $.validationEngineLanguage = {
        newLang: function(){
            $.validationEngineLanguage.allRules = {
                "required": { // Add your regex rules here, you can take telephone as an example
                    "regex": "none",
                    "alertText": "* Tato poloÅ¾ka je povinnÃ¡",
                    "alertTextCheckboxMultiple": "* ProsÃ­m vyberte jednu moÅ¾nost",
                    "alertTextCheckboxe": "* Tato poloÅ¾ka je povinnÃ¡"
                },
                "minSize": {
                    "regex": "none",
                    "alertText": "* MinimÃ¡lnÄ› ",
                    "alertText2": " znaky"
                },
                "maxSize": {
                    "regex": "none",
                    "alertText": "* MaximÃ¡lnÄ› ",
                    "alertText2": " znaky"
                },
				"groupRequired": {
                    "regex": "none",
                    "alertText": "* You must fill one of the following fields"
                },
                "min": {
                    "regex": "none",
                    "alertText": "* MinimÃ¡lnÃ­ hodnota je "
                },
                "max": {
                    "regex": "none",
                    "alertText": "* MaximÃ¡lnÃ­ hodnota je "
                },
                "past": {
                    "regex": "none",
                    "alertText": "* Date prior to "
                },
                "future": {
                    "regex": "none",
                    "alertText": "* Date past "
                },	
                "maxCheckbox": {
                    "regex": "none",
                    "alertText": "* PoÄet vybranÃ½ch poloÅ¾ek pÅ™esÃ¡hl limit"
                },
                "minCheckbox": {
                    "regex": "none",
                    "alertText": "* ProsÃ­m vyberte ",
                    "alertText2": " volbu"
                },
                "equals": {
                    "regex": "none",
                    "alertText": "* Pole se neshodujÃ­"
                },
                "creditCard": {
                    "regex": "none",
                    "alertText": "* NeplatnÃ© ÄÃ­slo kreditnÃ­ karty"
                },
                "CZphone": {
                    // telefonÃ­ ÄÃ­slo
                    "regex": /^([\+][0-9]{1,3}[ \.\-])([0-9]{3}[\-][0-9]{3}[\-][0-9]{3})$/,
                    "alertText": "* NeplatnÃ© telefonÃ­ ÄÃ­slo, zadejte ve formÃ¡tu +420 598-598-895"
                },
                "phone": {
                    // credit: jquery.h5validate.js / orefalo
                    "regex": /^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/,
                    "alertText": "* Invalid phone number"
                },
                "email": {
                    // Shamelessly lifted from Scott Gonzalez via the Bassistance Validation plugin http://projects.scottsplayground.com/email_address_validation/
                    "regex": /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
                    "alertText": "* NeplatnÃ¡ emailovÃ¡ adresa"
                },
                "integer": {
                    "regex": /^[\-\+]?\d+$/,
                    "alertText": "* Zadejte pouze ÄÃ­sla"
                },
                "number": {
                    // Number, including positive, negative, and floating decimal. credit: orefalo
                    "regex": /^[\-\+]?(([0-9]+)([\.,]([0-9]+))?|([\.,]([0-9]+))?)$/,
                    "alertText": "* NeplatnÃ© ÄÃ­slo"
                },
                "CZdate": {
                    // datum ve formÃ¡tu jak se pouÅ¾Ã­vÃ¡ v Är
                    "regex": /^(0[1-9]|[12][0-9]|3[01])[. /.](0[1-9]|1[012])[. /.](19|20)\d{2}$/,
                    "alertText": "* NeplatnÃ© datum, datum musÃ­ bÃ½t ve formÃ¡tu den.mÄ›sÃ­c.rok (dd.mm.rrrr)"
                },
                "date": {
                    // Date in ISO format. Credit: bassistance
                    "regex": /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/,
                    "alertText": "* NeplatnÃ© datum, datum musÃ­ bÃ½t ve formÃ¡tu YYYY-MM-DD"
                },
                "ipv4": {
                    "regex": /^((([01]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))[.]){3}(([0-1]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))$/,
                    "alertText": "* NeplatnÃ¡ IPÂ adresa"
                },
                //ÄeskÃ¡ syntaxe pro rodnÃ© ÄÃ­slo
                "rc": {
                    "regex": /^\d{2}((0[1-9]|1[012])|(5[1-9]|6[012]))(0[1-9]|[12][0-9]|3[01])\/([0-9]{2,4})$/,
                    "alertText": "* NeplatnÃ© rodnÃ© ÄÃ­slo, tvar musÃ­ bÃ½t 895431/4567"
                },
                //poÅ¡tovnÃ­ smÄ›rovacÃ­ ÄÃ­slo
                "psc": {
                    "regex": /^\d{3}[ \.\-]\d{2}$/,
                    "alertText": "* NeplatnÃ© poÅ¡tovnÃ­ smÄ›rovacÃ­ ÄÃ­slo, tvar musÃ­ bÃ½t 456 45"
                },
                "url": {
                    "regex": /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i,
                    "alertText": "* NeplatnÃ½ odkaz"
                },
                "onlyNumberSp": {
                    "regex": /^[0-9\ ]+$/,
                    "alertText": "* Pouze ÄÃ­sla"
                },
                "onlyLetterSp": {
                    "regex": /^[a-zA-Z\ \']+$/,
                    "alertText": "* Pouze pÃ­smena"
                },
                "onlyLetterNumber": {
                    "regex": /^[0-9a-zA-Z]+$/,
                    "alertText": "* Pouze pÃ­smena a ÄÃ­slice"
                },
                // --- CUSTOM RULES -- Those are specific to the demos, they can be removed or changed to your likings
                "ajaxUserCall": {
                    "url": "ajaxValidateFieldUser",
                    // you may want to pass extra data on the ajax call
                    "extraData": "name=eric",
                    "alertText": "* UÅ¾ivatelskÃ© jmÃ©no je jiÅ¾ pouÅ¾ito",
                    "alertTextLoad": "* OvÄ›Å™ovÃ¡nÃ­, prosÃ­m Äekejte"
                },
                "ajaxNameCall": {
                    // remote json service location
                    "url": "ajaxValidateFieldName",
                    // error
                    "alertText": "* UÅ¾ivatelskÃ© jmÃ©no je jiÅ¾ pouÅ¾ito",
                    // if you provide an "alertTextOk", it will show as a green prompt when the field validates
                    "alertTextOk": "* Toto jmÃ©no je k dispozici",
                    // speaks by itself
                    "alertTextLoad": "* OvÄ›Å™ovÃ¡nÃ­, prosÃ­m Äekejte"
                },
                "validate2fields": {
                    "alertText": "* ProsÃ­m napiÅ¡te HELLO"
                }
            };
            
        }
    };
    $.validationEngineLanguage.newLang();
})(jQuery);
