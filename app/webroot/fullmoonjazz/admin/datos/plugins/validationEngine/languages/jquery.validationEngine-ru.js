(function($){
    $.fn.validationEngineLanguage = function(){
	};
    $.validationEngineLanguage = {
        newLang: function(){
            $.validationEngineLanguage.allRules = {
                "required": { // Add your regex rules here, you can take telephone as an example
                    "regex": "none",
                    "alertText": "* ÐÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼Ð¾ Ð·Ð°Ð¿Ð¾Ð»Ð½Ð¸Ñ‚ÑŒ",
                    "alertTextCheckboxMultiple": "* Ð’Ñ‹ Ð´Ð¾Ð»Ð¶Ð½Ñ‹ Ð²Ñ‹Ð±Ñ€Ð°Ñ‚ÑŒ Ð²Ð°Ñ€Ð¸Ð°Ð½Ñ‚",
                    "alertTextCheckboxe": "* ÐÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼Ð¾ Ð¾Ñ‚Ð¼ÐµÑ‚Ð¸Ñ‚ÑŒ"
                },
                "minSize": {
                    "regex": "none",
                    "alertText": "* ÐœÐ¸Ð½Ð¸Ð¼ÑƒÐ¼ ",
                    "alertText2": " ÑÐ¸Ð¼Ð²Ð¾Ð»Ð°(Ð¾Ð²)"
                },
                "maxSize": {
                    "regex": "none",
                    "alertText": "* ÐœÐ°ÐºÑÐ¸Ð¼ÑƒÐ¼ ",
                    "alertText2": " ÑÐ¸Ð¼Ð²Ð¾Ð»Ð°(Ð¾Ð²)"
                },
				"groupRequired": {
                    "regex": "none",
                    "alertText": "* You must fill one of the following fields"
                },
                "min": {
                    "regex": "none",
                    "alertText": "* ÐœÐ¸Ð½Ð¸Ð¼Ð°Ð»ÑŒÐ½Ð¾Ðµ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ "
                },
                "max": {
                    "regex": "none",
                    "alertText": "* ÐœÐ°ÐºÑÐ¸Ð¼Ð°Ð»ÑŒÐ½Ð¾Ðµ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ "
                },
                "past": {
                    "regex": "none",
                    "alertText": "* Ð”Ð°Ñ‚Ð° Ð´Ð¾ "
                },
                "future": {
                    "regex": "none",
                    "alertText": "* Ð”Ð°Ñ‚Ð° Ð¾Ñ‚ "
                },	
                "maxCheckbox": {
                    "regex": "none",
                    "alertText": "* ÐÐµÐ»ÑŒÐ·Ñ Ð²Ñ‹Ð±Ñ€Ð°Ñ‚ÑŒ ÑÑ‚Ð¾Ð»ÑŒÐºÐ¾ Ð²Ð°Ñ€Ð¸Ð°Ð½Ñ‚Ð¾Ð²"
                },
                "minCheckbox": {
                    "regex": "none",
                    "alertText": "* ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð²Ñ‹Ð±ÐµÑ€Ð¸Ñ‚Ðµ ",
                    "alertText2": " Ð¾Ð¿Ñ†Ð¸ÑŽ(Ð¸Ð¸)"
                },
                "equals": {
                    "regex": "none",
                    "alertText": "* ÐŸÐ¾Ð»Ñ Ð½Ðµ ÑÐ¾Ð²Ð¿Ð°Ð´Ð°ÑŽÑ‚"
                },
                "creditCard": {
                    "regex": "none",
                    "alertText": "* ÐÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ Ð½Ð¾Ð¼ÐµÑ€ ÐºÑ€ÐµÐ´Ð¸Ñ‚Ð½Ð¾Ð¹ ÐºÐ°Ñ€Ñ‚Ñ‹"
                },
                "phone": {
                    // credit: jquery.h5validate.js / orefalo
                    "regex": /^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/,
                    "alertText": "* ÐÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ñ‹Ð¹ Ñ„Ð¾Ñ€Ð¼Ð°Ñ‚ Ñ‚ÐµÐ»ÐµÑ„Ð¾Ð½Ð°"
                },
                "email": {
                    // Shamelessly lifted from Scott Gonzalez via the Bassistance Validation plugin http://projects.scottsplayground.com/email_address_validation/
                    "regex": /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
                    "alertText": "* ÐÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ Ñ„Ð¾Ñ€Ð¼Ð°Ñ‚ email"
                },
                "integer": {
                    "regex": /^[\-\+]?\d+$/,
                    "alertText": "* ÐÐµ Ñ†ÐµÐ»Ð¾Ðµ Ñ‡Ð¸ÑÐ»Ð¾"
                },
                "number": {
                    // Number, including positive, negative, and floating decimal. credit: orefalo
                    "regex": /^[\-\+]?(([0-9]+)([\.,]([0-9]+))?|([\.,]([0-9]+))?)$/,
                    "alertText": "* ÐÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð¾Ðµ Ñ‡Ð¸ÑÐ»Ð¾ Ñ Ð¿Ð»Ð°Ð²Ð°ÑŽÑ‰ÐµÐ¹ Ñ‚Ð¾Ñ‡ÐºÐ¾Ð¹"
                },
                "date": {
                    "regex": /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/,
                    "alertText": "* ÐÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð°Ñ Ð´Ð°Ñ‚Ð° (Ð´Ð¾Ð»Ð¶Ð½Ð¾ Ð±Ñ‹Ñ‚ÑŒ Ð² Ð”Ð”.MM.Ð“Ð“Ð“Ð“ Ñ„Ð¾Ñ€Ð¼Ð°Ñ‚Ðµ)"
                },
                "ipv4": {
                	"regex": /^((([01]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))[.]){3}(([0-1]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))$/,
                    "alertText": "* ÐÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ñ‹Ð¹ IP-Ð°Ð´Ñ€ÐµÑ"
                },
                "url": {
                    "regex": /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i,
                    "alertText": "* ÐÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ñ‹Ð¹ URL"
                },
                "onlyNumberSp": {
                    "regex": /^[0-9\ ]+$/,
                    "alertText": "* Ð¢Ð¾Ð»ÑŒÐºÐ¾ Ñ‡Ð¸ÑÐ»Ð°"
                },
                "onlyLetterSp": {
                    "regex": /^[a-zA-Z\u0400-\u04FF\ \']+$/,
                    "alertText": "* Ð¢Ð¾Ð»ÑŒÐºÐ¾ Ð±ÑƒÐºÐ²Ñ‹"
                },
                "onlyLetterNumber": {
                    "regex": /^[0-9a-zA-Z\u0400-\u04FF]+$/,
                    "alertText": "* Ð—Ð°Ð¿Ñ€ÐµÑ‰ÐµÐ½Ñ‹ ÑÐ¿ÐµÑ†Ð¸Ð°Ð»ÑŒÐ½Ñ‹Ðµ ÑÐ¸Ð¼Ð²Ð¾Ð»Ñ‹"
                },
                // --- CUSTOM RULES -- Those are specific to the demos, they can be removed or changed to your likings
                "ajaxUserCall": {
                    "url": "ajaxValidateFieldUser",
                    // you may want to pass extra data on the ajax call
                    "extraData": "name=eric",
                    "alertText": "* Ð­Ñ‚Ð¾Ñ‚ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ ÑƒÐ¶Ðµ Ð·Ð°Ð½ÑÑ‚",
                    "alertTextLoad": "* ÐŸÑ€Ð¾Ð²ÐµÑ€ÐºÐ°, Ð¿Ð¾Ð´Ð¾Ð¶Ð´Ð¸Ñ‚Ðµ..."
                },
                "ajaxNameCall": {
                    // remote json service location
                    "url": "ajaxValidateFieldName",
                    // error
                    "alertText": "* Ð­Ñ‚Ð¾ Ð¸Ð¼Ñ ÑƒÐ¶Ðµ Ð·Ð°Ð½ÑÑ‚Ð¾",
                    // if you provide an "alertTextOk", it will show as a green prompt when the field validates
                    "alertTextOk": "* Ð­Ñ‚Ð¾ Ð¸Ð¼Ñ Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð¾",
                    // speaks by itself
                    "alertTextLoad": "* ÐŸÑ€Ð¾Ð²ÐµÑ€ÐºÐ°, Ð¿Ð¾Ð´Ð¾Ð¶Ð´Ð¸Ñ‚Ðµ..."
                },
                "validate2fields": {
                    "alertText": "* ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð²Ð²ÐµÐ´Ð¸Ñ‚Ðµ HELLO"
                }
            };
            
        }
    };
    $.validationEngineLanguage.newLang();
})(jQuery);

