(function($){
    $.fn.validationEngineLanguage = function(){
    };
    $.validationEngineLanguage = {
        newLang: function(){
            $.validationEngineLanguage.allRules = {
                "required": { // Add your regex rules here, you can take telephone as an example
                    "regex": "none",
                    "alertText": "* Bu alan zorunludur",
                    "alertTextCheckboxMultiple": "* LÃ¼tfen bir seÃ§eneÄŸi iÅŸaretleyiniz",
                    "alertTextCheckboxe": "* Bu onay kutusu zorunludur"
                },
                "minSize": {
                    "regex": "none",
                    "alertText": "* Bu alana en az ",
                    "alertText2": " karakter girmelisiniz "
                },
                "maxSize": {
                    "regex": "none",
                    "alertText": "* Bu alana en fazla ",
                    "alertText2": " karakter girebilirsiniz"
                },
				"groupRequired": {
                    "regex": "none",
                    "alertText": "* You must fill one of the following fields"
                },
                "min": {
                    "regex": "none",
                    "alertText": "* GeÃ§erli en kÃ¼Ã§Ã¼k deÄŸer: "
                },
                "max": {
                    "regex": "none",
                    "alertText": "* GeÃ§erli en yÃ¼ksek deÄŸer: "
                },
                "past": {
                    "regex": "none",
                    "alertText": "* LÃ¼tfen ",
                    "alertText2": " tarihinden daha ileri bir tarih giriniz "
                },
                "future": {
                    "regex": "none",
                    "alertText": "* LÃ¼tfen ",
                    "alertText2": " tarihinden daha geri bir tarih giriniz "

                },	
                "maxCheckbox": {
                    "regex": "none",
                    "alertText": "* En fazla ",
                    "alertText2": " onay kutusu iÅŸaretleyebilirsiniz"
                },
                "minCheckbox": {
                    "regex": "none",
                    "alertText": "* LÃ¼tfen en az ",
                    "alertText2": " onay kutusunu iÅŸaretleyiniz"
                },
                "equals": {
                    "regex": "none",
                    "alertText": "* DeÄŸerler aynÄ± olmalÄ±"
                },
                "creditCard": {
                    "regex": "none",
                    "alertText": "* GeÃ§ersiz kredi kartÄ± numarasÄ±"
                },
                "phone": {
                    // credit: jquery.h5validate.js / orefalo
                    "regex": /^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/,
                    "alertText": "* GeÃ§ersiz telefon numarasÄ±"
                },
                "email": {
                    // Shamelessly lifted from Scott Gonzalez via the Bassistance Validation plugin http://projects.scottsplayground.com/email_address_validation/
                    "regex": /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
                    "alertText": "* GeÃ§ersiz eposta adresi"
                },
                "integer": {
                    "regex": /^[\-\+]?\d+$/,
                    "alertText": "* GeÃ§erli bir tam sayÄ± deÄŸil"
                },
                "number": {
                    // Number, including positive, negative, and floating decimal. credit: orefalo
                    "regex": /^[\-\+]?(([0-9]+)([\.,]([0-9]+))?|([\.,]([0-9]+))?)$/,
                    "alertText": "* GeÃ§erli bir noktalÄ± sayÄ± deÄŸil"
                },
                "date": {
                    "regex": /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/,
                    "alertText": "* GeÃ§ersiz tarih. Tarih YYYY-MM-DD formatÄ±nda olmalÄ±"
                },
                "ipv4": {
                    "regex": /^((([01]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))[.]){3}(([0-1]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))$/,
                    "alertText": "* GeÃ§ersiz IP adresi"
                },
                "url": {
                    "regex": /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i,
                    "alertText": "* GeÃ§ersiz URL"
                },
                "onlyNumberSp": {
                    "regex": /^[0-9\ ]+$/,
                    "alertText": "* Bu alanda sadece rakam olmalÄ±"
                },
                "onlyLetterSp": {
                    "regex": /^[a-zA-Z\ \']+$/,
                    "alertText": "* Bu alanda sadece harf olmalÄ±"
                },
                "onlyLetterNumber": {
                    "regex": /^[0-9a-zA-Z]+$/,
                    "alertText": "* Bu alanda Ã¶zel karakterler olamaz"
                },
                // --- CUSTOM RULES -- Those are specific to the demos, they can be removed or changed to your likings
                "ajaxUserCall": {
                    "url": "ajaxValidateFieldUser",
                    // you may want to pass extra data on the ajax call
                    "extraData": "name=eric",
                    "alertText": "* Bu kullanÄ±cÄ± adÄ± kullanÄ±mda",
                    "alertTextLoad": "* DoÄŸrulanÄ±yor, lÃ¼tfen bekleyiniz"
                },
				"ajaxUserCallPhp": {
                    "url": "phpajax/ajaxValidateFieldUser.php",
                    // you may want to pass extra data on the ajax call
                    "extraData": "name=eric",
                    // if you provide an "alertTextOk", it will show as a green prompt when the field validates
                    "alertTextOk": "* Bu kullanÄ±cÄ± adÄ±nÄ± kullanabilirsiniz",
                    "alertText": "* Bu kullanÄ±cÄ± adÄ± kullanÄ±mda",
                    "alertTextLoad": "* DoÄŸrulanÄ±yor, lÃ¼tfen bekleyiniz"
                },
                "ajaxNameCall": {
                    // remote json service location
                    "url": "ajaxValidateFieldName",
                    // error
                    "alertText": "* Bu isim kullanÄ±mda",
                    // if you provide an "alertTextOk", it will show as a green prompt when the field validates
                    "alertTextOk": "* Bu isim kullanÄ±labilir",
                    // speaks by itself
                    "alertTextLoad": "* DoÄŸrulanÄ±yor, lÃ¼tfen bekleyiniz"
                },
				 "ajaxNameCallPhp": {
	                    // remote json service location
	                    "url": "phpajax/ajaxValidateFieldName.php",
	                    // error
	                    "alertText": "* Bu isim kullanÄ±mda",
	                    // speaks by itself
	                    "alertTextLoad": "* DoÄŸrulanÄ±yor, lÃ¼tfen bekleyiniz"
	                },
                "validate2fields": {
                    "alertText": "* LÃ¼tfen 'HELLO' yazÄ±n"
                }
            };
            
        }
    };
    $.validationEngineLanguage.newLang();
})(jQuery);