(function($){
    $.fn.validationEngineLanguage = function(){
    };
    $.validationEngineLanguage = {
        newLang: function(){
            $.validationEngineLanguage.allRules = {
                "required": { // Add your regex rules here, you can take telephone as an example
                    "regex": "none",
                    "alertText": "* Ø§ÛŒÙ† ÙÛŒÙ„Ø¯ Ø¶Ø±ÙˆØ±ÛŒ Ø§Ø³Øª",
                    "alertTextCheckboxMultiple": "* Ù„Ø·ÙØ§ ÛŒÚ© Ú¯Ø²ÛŒÙ†Ù‡ Ø±Ø§ Ø§Ù†ØªØ®Ø§Ø¨ Ú©Ù†ÛŒØ¯",
                    "alertTextCheckboxe": "* Ø§ÛŒÙ† Ú†Ú© Ø¨Ø§Ú©Ø³ Ø¶Ø±ÙˆØ±ÛŒ Ø§Ø³Øª",
                    "alertTextDateRange": "* Ù‡Ø± Ø¯Ùˆ ÙÛŒÙ„Ø¯â€ŒÙ‡Ø§ÛŒ Ø¨Ø§Ø²Ù‡â€ŒÛŒ ØªØ§Ø±ÛŒØ®ÛŒ Ø¶Ø±ÙˆØ±ÛŒ Ù‡Ø³ØªÙ†Ø¯"
                },
                "dateRange": {
                    "regex": "none",
                    "alertText": "* Ø¨Ø§Ø²Ù‡â€ŒÛŒ ØªØ§Ø±ÛŒØ®ÛŒ ",
                    "alertText2": "Ù†Ø§Ù…Ø¹ØªØ¨Ø±"
                },
                "dateTimeRange": {
                    "regex": "none",
                    "alertText": "* Ø¨Ø§Ø²Ù‡â€ŒÛŒ Ø²Ù…Ø§Ù†ÛŒ",
                    "alertText2": "Ù†Ø§Ù…Ø¹ØªØ¨Ø±"
                },
                "minSize": {
                    "regex": "none",
                    "alertText": "* Ø­Ø¯Ø§Ù‚Ù„ ",
                    "alertText2": " Ø­Ø±Ù Ø¶Ø±ÙˆØ±ÛŒ Ø§Ø³Øª"
                },
                "maxSize": {
                    "regex": "none",
                    "alertText": "* Ø­Ø¯Ø§Ú©Ø«Ø± ",
                    "alertText2": " Ø­Ø±Ù ÙˆØ§Ø±Ø¯ Ú©Ù†ÛŒØ¯"
                },
				"groupRequired": {
                    "regex": "none",
                    "alertText": "* Ø´Ù…Ø§ Ø¨Ø§ÛŒØ¯ ÛŒÚ©ÛŒ Ø§Ø² ÙÛŒÙ„Ø¯â€ŒÙ‡Ø§ÛŒ Ø²ÛŒØ± Ø±Ø§ Ù¾Ø± Ú©Ù†ÛŒØ¯"
                },
                "min": {
                    "regex": "none",
                    "alertText": "* Ú©Ù…ØªØ±ÛŒÙ† Ù…Ù‚Ø¯Ø§Ø± Ù…Ø¹ØªØ¨Ø± ",
					"alertText2": " Ø§Ø³Øª"
                },
                "max": {
                    "regex": "none",
                    "alertText": "* Ø¨ÛŒØ´â€ŒØªØ±ÛŒÙ† Ù…Ù‚Ø¯Ø§Ø± Ù…Ø¹ØªØ¨Ø± ",
					"alertText2": "Ø§Ø³Øª"
                },
                "past": {
                    "regex": "none",
                    "alertText": "* ØªØ§Ø±ÛŒØ®â€ŒÙ‡Ø§ÛŒ Ù‚Ø¨Ù„ Ø§Ø² "
                },
                "future": {
                    "regex": "none",
                    "alertText": "* ØªØ§Ø±ÛŒØ®â€ŒÙ‡Ø§ÛŒ Ø¨Ø¹Ø¯ Ø§Ø² "
                },	
                "maxCheckbox": {
                    "regex": "none",
                    "alertText": "* Ø¨ÛŒØ´â€ŒØªØ±ÛŒÙ† Ú¯Ø²ÛŒÙ†Ù‡â€ŒÛŒ Ù‚Ø§Ø¨Ù„ Ø§Ù†ØªØ®Ø§Ø¨ ",
                    "alertText2": " Ø§Ø³Øª"
                },
                "minCheckbox": {
                    "regex": "none",
                    "alertText": "* Ù„Ø·ÙØ§ ",
                    "alertText2": " Ù…ÙˆØ±Ø¯ Ø§Ù†ØªØ®Ø§Ø¨ Ú©Ù†ÛŒØ¯"
                },
                "equals": {
                    "regex": "none",
                    "alertText": "* ÙÛŒÙ„Ø¯ Ù†Ø§Ù…Ø¹ØªØ¨Ø± Ø§Ø³Øª"
                },
                "creditCard": {
                    "regex": "none",
                    "alertText": "Ø´Ù…Ø§Ø±Ù‡ Ú©Ø§Ø±Øª Ø§Ø¹ØªØ¨Ø§Ø±ÛŒ Ø§Ø´ØªØ¨Ø§Ù‡"
                },
                "phone": {
                    // credit: jquery.h5validate.js / orefalo
                    "regex": /^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/,
                    "alertText": "* Ø´Ù…Ø§Ø±Ù‡ ØªÙ„ÙÙ† Ù…Ø¹ØªØ¨Ø± ÙˆØ§Ø±Ø¯ Ú©Ù†ÛŒØ¯"
                },
                "email": {
                    // Shamelessly lifted from Scott Gonzalez via the Bassistance Validation plugin http://projects.scottsplayground.com/email_address_validation/
                    "regex": /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
                    "alertText": "* Ù†Ø´Ø§Ù†ÛŒ Ø§Ù„Ú©ØªØ±ÙˆÙ†ÛŒÚ©ÛŒ Ù…Ø¹ØªØ¨Ø± ÙˆØ§Ø±Ø¯ Ú©Ù†ÛŒØ¯"
                },
                "integer": {
                    "regex": /^[\-\+]?\d+$/,
                    "alertText": "* Ø¹Ø¯Ø¯ Ù…Ø¹ØªØ¨Ø± ÙˆØ§Ø±Ø¯ Ú©Ù†ÛŒØ¯"
                },
                "number": {
                    // Number, including positive, negative, and floating decimal. credit: orefalo
                    "regex": /^[\-\+]?(([0-9]+)([\.,]([0-9]+))?|([\.,]([0-9]+))?)$/,
                    "alertText": "* Ø¹Ø¯Ø¯ Ø§Ø¹Ø´Ø§Ø±ÛŒ Ù…Ø¹ØªØ¨Ø± ÙˆØ§Ø±Ø¯ Ú©Ù†ÛŒØ¯"
                },
                "date": {
                    "regex": /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/,
                    "alertText": "* ØªØ§Ø±ÛŒØ® Ø¨Ø§ÛŒØ¯ Ø¨Ù‡ Ø´Ú©Ù„ Ø³Ø§Ù„/Ù…Ø§Ù‡/Ø±ÙˆØ²"
                },
                "ipv4": {
                    "regex": /^((([01]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))[.]){3}(([0-1]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))$/,
                    "alertText": "* IP Ù…Ø¹ØªØ¨Ø± ÙˆØ§Ø±Ø¯ Ú©Ù†ÛŒØ¯"
                },
                "url": {
                    "regex": /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i,
                    "alertText": "* Ù†Ø´Ø§Ù†ÛŒ Ù…Ø¹ØªØ¨Ø± ÙˆØ§Ø±Ø¯ Ú©Ù†ÛŒØ¯"
                },
                "onlyNumberSp": {
                    "regex": /^[0-9\ ]+$/,
                    "alertText": "* ÙÙ‚Ø· Ø§Ø¹Ø¯Ø§Ø¯"
                },
                "onlyLetterSp": {
                    "regex": /^[a-zA-Z\ \']+$/,
                    "alertText": "* ÙÙ‚Ø· Ø­Ø±ÙˆÙ Ø§Ù†Ú¯Ù„ÛŒØ³ÛŒ"
                },
                "onlyLetterNumber": {
                    "regex": /^[0-9a-zA-Z]+$/,
                    "alertText": "* ÙÙ‚Ø· Ø§Ø¹Ø¯Ø§Ø¯ Ùˆ Ø­Ø±ÙˆÙ Ø§Ù†Ú¯Ù„ÛŒØ³ÛŒ ÙˆØ§Ø±Ø¯ Ú©Ù†ÛŒØ¯"
                },
                // --- CUSTOM RULES -- Those are specific to the demos, they can be removed or changed to your likings
                "ajaxUserCall": {
                    "url": "ajaxValidateFieldUser",
                    // you may want to pass extra data on the ajax call
                    "extraData": "name=eric",
                    "alertText": "* Ø§ÛŒÙ† Ù†Ø§Ù…â€ŒÚ©Ø§Ø±Ø¨Ø±ÛŒ ØªÚ©Ø±Ø§Ø±ÛŒ Ø§Ø³Øª",
                    "alertTextLoad": "* Ø¯Ø±Ø­Ø§Ù„ Ø§Ø¹ØªØ¨Ø§Ø± Ø³Ù†Ø¬ÛŒØŒ Ù„Ø·ÙØ§ ØµØ¨Ø± Ú©Ù†ÛŒØ¯"
                },
				"ajaxUserCallPhp": {
                    "url": "phpajax/ajaxValidateFieldUser.php",
                    // you may want to pass extra data on the ajax call
                    "extraData": "name=eric",
                    // if you provide an "alertTextOk", it will show as a green prompt when the field validates
                    "alertTextOk": "* Ø§ÛŒÙ† Ù†Ø§Ù… Ú©Ø§Ø±Ø¨Ø±ÛŒ Ø¢Ø²Ø§Ø¯ Ø§Ø³Øª",
                    "alertText": "* Ø§ÛŒÙ† Ù†Ø§Ù…â€ŒÚ©Ø§Ø±Ø¨Ø±ÛŒ ØªÚ©Ø±Ø§Ø±ÛŒ Ø§Ø³Øª",
                    "alertTextLoad": "* Ø¯Ø±Ø­Ø§Ù„ Ø§Ø¹ØªØ¨Ø§Ø± Ø³Ù†Ø¬ÛŒØŒ Ù„Ø·ÙØ§ ØµØ¨Ø± Ú©Ù†ÛŒØ¯"
                },
                "ajaxNameCall": {
                    // remote json service location
                    "url": "ajaxValidateFieldName",
                    // error
                    "alertText": "* Ø§ÛŒÙ† Ù†Ø§Ù… Ù¾ÛŒØ´â€ŒØªØ± Ø«Ø¨Øª Ø´Ø¯Ù‡ Ø§Ø³Øª",
                    // if you provide an "alertTextOk", it will show as a green prompt when the field validates
                    "alertTextOk": "* Ø§ÛŒÙ† Ù†Ø§Ù… Ø¢Ø²Ø§Ø¯ Ø§Ø³Øª",
                    // speaks by itself
                    "alertTextLoad": "* Ø¯Ø±Ø­Ø§Ù„ Ø§Ø¹ØªØ¨Ø§Ø± Ø³Ù†Ø¬ÛŒØŒ Ù„Ø·ÙØ§ ØµØ¨Ø± Ú©Ù†ÛŒØ¯"
                },
				 "ajaxNameCallPhp": {
	                    // remote json service location
	                    "url": "phpajax/ajaxValidateFieldName.php",
	                    // error
	                    "alertText": "* Ø§ÛŒÙ† Ù†Ø§Ù… ØªÚ©Ø±Ø§Ø±ÛŒ Ø§Ø³Øª",
	                    // speaks by itself
	                    "alertTextLoad": "* Ø¯Ø±Ø­Ø§Ù„ Ø§Ø¹ØªØ¨Ø§Ø± Ø³Ù†Ø¬ÛŒØŒ Ù„Ø·ÙØ§ ØµØ¨Ø± Ú©Ù†ÛŒØ¯"
	                },
                "validate2fields": {
                    "alertText": "* Ù„Ø·ÙØ§ Ù…Ù‚Ø¯Ø§Ø± HELLO Ø±Ø§ ÙˆØ§Ø±Ø¯ Ú©Ù†ÛŒØ¯"
                },
	            //tls warning:homegrown not fielded 
                "dateFormat":{
                    "regex": /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$|^(?:(?:(?:0?[13578]|1[02])(\/|-)31)|(?:(?:0?[1,3-9]|1[0-2])(\/|-)(?:29|30)))(\/|-)(?:[1-9]\d\d\d|\d[1-9]\d\d|\d\d[1-9]\d|\d\d\d[1-9])$|^(?:(?:0?[1-9]|1[0-2])(\/|-)(?:0?[1-9]|1\d|2[0-8]))(\/|-)(?:[1-9]\d\d\d|\d[1-9]\d\d|\d\d[1-9]\d|\d\d\d[1-9])$|^(0?2(\/|-)29)(\/|-)(?:(?:0[48]00|[13579][26]00|[2468][048]00)|(?:\d\d)?(?:0[48]|[2468][048]|[13579][26]))$/,
                    "alertText": "* ØªØ§Ø±ÛŒØ® Ù†Ø§Ù…Ø¹ØªØ¨Ø±"
                },
                //tls warning:homegrown not fielded 
				"dateTimeFormat": {
	                "regex": /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])\s+(1[012]|0?[1-9]){1}:(0?[1-5]|[0-6][0-9]){1}:(0?[0-6]|[0-6][0-9]){1}\s+(am|pm|AM|PM){1}$|^(?:(?:(?:0?[13578]|1[02])(\/|-)31)|(?:(?:0?[1,3-9]|1[0-2])(\/|-)(?:29|30)))(\/|-)(?:[1-9]\d\d\d|\d[1-9]\d\d|\d\d[1-9]\d|\d\d\d[1-9])$|^((1[012]|0?[1-9]){1}\/(0?[1-9]|[12][0-9]|3[01]){1}\/\d{2,4}\s+(1[012]|0?[1-9]){1}:(0?[1-5]|[0-6][0-9]){1}:(0?[0-6]|[0-6][0-9]){1}\s+(am|pm|AM|PM){1})$/,
                    "alertText": "* ØªØ§Ø±ÛŒØ® Ù†Ø§Ù…Ø¹ØªØ¨Ø± Ø§Ø³Øª ÛŒØ§ Ø´Ú©Ù„ Ù…Ø¹ØªØ¨Ø±ÛŒ Ù†Ø¯Ø§Ø±Ø¯",
                    "alertText2": "Ø´Ú©Ù„â€ŒÙ‡Ø§ÛŒ Ù…ÙˆØ±Ø¯ Ù…Ø¹ØªØ¨Ø±: ",
                    "alertText3": "mm/dd/yyyy hh:mm:ss AM|PM or ", 
                    "alertText4": "yyyy-mm-dd hh:mm:ss AM|PM"
	            }
            };
            
        }
    };

    $.validationEngineLanguage.newLang();
    
})(jQuery);