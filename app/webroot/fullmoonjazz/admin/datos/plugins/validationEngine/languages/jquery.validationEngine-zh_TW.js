(function($){
    $.fn.validationEngineLanguage = function(){
    };
    $.validationEngineLanguage = {
        newLang: function(){
            $.validationEngineLanguage.allRules = {
                "required": { // Add your regex rules here, you can take telephone as an example
                    "regex": "none",
                    "alertText": "* æ­¤æ¬„ä½ä¸å¯ç©ºç™½",
                    "alertTextCheckboxMultiple": "* è«‹é¸æ“‡ä¸€å€‹é …ç›®",
                    "alertTextCheckboxe": "* æ‚¨å¿…éœ€å‹¾é¸æ­¤æ¬„ä½",
                    "alertTextDateRange": "* æ—¥æœŸç¯„åœæ¬„ä½éƒ½ä¸å¯ç©ºç™½"
                },
                "dateRange": {
                    "regex": "none",
                    "alertText": "* ç„¡æ•ˆçš„ ",
                    "alertText2": " æ—¥æœŸç¯„åœ"
                },
                "dateTimeRange": {
                    "regex": "none",
                    "alertText": "* ç„¡æ•ˆçš„ ",
                    "alertText2": " æ™‚é–“ç¯„åœ"
                },
                "minSize": {
                    "regex": "none",
                    "alertText": "* æœ€å°‘ ",
                    "alertText2": " å€‹å­—å…ƒ"
                },
                "maxSize": {
                    "regex": "none",
                    "alertText": "* æœ€å¤š ",
                    "alertText2": " å€‹å­—å…ƒ"
                },
				"groupRequired": {
                    "regex": "none",
                    "alertText": "* ä½ å¿…éœ€é¸å¡«å…¶ä¸­ä¸€å€‹æ¬„ä½"
                },
                "min": {
                    "regex": "none",
                    "alertText": "* æœ€å°å€¼ç‚º "
                },
                "max": {
                    "regex": "none",
                    "alertText": "* æœ€å¤§å€¼ç‚º "
                },
                "past": {
                    "regex": "none",
                    "alertText": "* æ—¥æœŸå¿…éœ€æ—©æ–¼ "
                },
                "future": {
                    "regex": "none",
                    "alertText": "* æ—¥æœŸå¿…éœ€æ™šæ–¼ "
                },	
                "maxCheckbox": {
                    "regex": "none",
                    "alertText": "* æœ€å¤šé¸å– ",
                    "alertText2": " å€‹é …ç›®"
                },
                "minCheckbox": {
                    "regex": "none",
                    "alertText": "* è«‹é¸å– ",
                    "alertText2": " å€‹é …ç›®"
                },
                "equals": {
                    "regex": "none",
                    "alertText": "* æ¬„ä½å…§å®¹ä¸ç›¸ç¬¦"
                },
                "creditCard": {
                    "regex": "none",
                    "alertText": "* æ— æ•ˆçš„ä¿¡ç”¨å¡å·ç "
                },
                "phone": {
                    // credit: jquery.h5validate.js / orefalo
                    "regex": /^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{3,20})((x|ext|extension)[ ]?[0-9]{1,4})?$/,
                    "alertText": "* ç„¡æ•ˆçš„é›»è©±è™Ÿç¢¼"
                },
                "email": {
                    // Shamelessly lifted from Scott Gonzalez via the Bassistance Validation plugin http://projects.scottsplayground.com/email_address_validation/
                    "regex": /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
                    "alertText": "* Invalid email address"
                },
                "integer": {
                    "regex": /^[\-\+]?\d+$/,
                    "alertText": "* ä¸æ˜¯æœ‰æ•ˆçš„æ•´æ•¸"
                },
                "number": {
                    // Number, including positive, negative, and floating decimal. credit: orefalo
                    "regex": /^[\-\+]?(([0-9]+)([\.,]([0-9]+))?|([\.,]([0-9]+))?)$/,
                    "alertText": "* ç„¡æ•ˆçš„æ•¸å­—"
                },
                "date": {
                    "regex": /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/,
                    "alertText": "* ç„¡æ•ˆçš„æ—¥æœŸï¼Œæ ¼å¼å¿…éœ€ç‚º YYYY-MM-DD"
                },
                "ipv4": {
                    "regex": /^((([01]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))[.]){3}(([0-1]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))$/,
                    "alertText": "* ç„¡æ•ˆçš„ IP ä½å€"
                },
                "url": {
                    "regex": /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i,
                    "alertText": "* Invalid URL"
                },
                "onlyNumberSp": {
                    "regex": /^[0-9\ ]+$/,
                    "alertText": "* åªèƒ½å¡«æ•¸å­—"
                },
                "onlyLetterSp": {
                    "regex": /^[a-zA-Z\ \']+$/,
                    "alertText": "* åªæŽ¥å—è‹±æ–‡å­—æ¯å¤§å°å¯«"
                },
                "onlyLetterNumber": {
                    "regex": /^[0-9a-zA-Z]+$/,
                    "alertText": "* ä¸æŽ¥å—ç‰¹æ®Šå­—å…ƒ"
                },
                // --- CUSTOM RULES -- Those are specific to the demos, they can be removed or changed to your likings
                "ajaxUserCall": {
                    "url": "ajaxValidateFieldUser",
                    // you may want to pass extra data on the ajax call
                    "extraData": "name=eric",
                    "alertText": "* æ­¤åç¨±å·²ç¶“è¢«å…¶ä»–äººä½¿ç”¨",
                    "alertTextLoad": "* æ­£åœ¨ç¢ºèªåç¨±æ˜¯å¦æœ‰å…¶ä»–äººä½¿ç”¨ï¼Œè«‹ç¨ç­‰ã€‚"
                },
				"ajaxUserCallPhp": {
                    "url": "phpajax/ajaxValidateFieldUser.php",
                    // you may want to pass extra data on the ajax call
                    "extraData": "name=eric",
                    // if you provide an "alertTextOk", it will show as a green prompt when the field validates
                    "alertTextOk": "* æ­¤å¸³è™Ÿåç¨±å¯ä»¥ä½¿ç”¨",
                    "alertText": "* æ­¤å¸³è™Ÿåç¨±å·²ç¶“è¢«å…¶ä»–äººä½¿ç”¨",
                    "alertTextLoad": "* æ­£åœ¨ç¢ºèªå¸³è™Ÿåç¨±æ˜¯å¦æœ‰å…¶ä»–äººä½¿ç”¨ï¼Œè«‹ç¨ç­‰ã€‚"
                },
                "ajaxNameCall": {
                    // remote json service location
                    "url": "ajaxValidateFieldName",
                    // error
                    "alertText": "* æ­¤åç¨±å¯ä»¥ä½¿ç”¨",
                    // if you provide an "alertTextOk", it will show as a green prompt when the field validates
                    "alertTextOk": "* æ­¤åç¨±å·²ç¶“è¢«å…¶ä»–äººä½¿ç”¨",
                    // speaks by itself
                    "alertTextLoad": "* æ­£åœ¨ç¢ºèªåç¨±æ˜¯å¦æœ‰å…¶ä»–äººä½¿ç”¨ï¼Œè«‹ç¨ç­‰ã€‚"
                },
				 "ajaxNameCallPhp": {
	                    // remote json service location
	                    "url": "phpajax/ajaxValidateFieldName.php",
	                    // error
	                    "alertText": "* æ­¤åç¨±å·²ç¶“è¢«å…¶ä»–äººä½¿ç”¨",
	                    // speaks by itself
	                    "alertTextLoad": "* æ­£åœ¨ç¢ºèªåç¨±æ˜¯å¦æœ‰å…¶ä»–äººä½¿ç”¨ï¼Œè«‹ç¨ç­‰ã€‚"
	                },
                "validate2fields": {
                    "alertText": "* è«‹è¼¸å…¥ HELLO"
                },
	            //tls warning:homegrown not fielded 
                "dateFormat":{
                    "regex": /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$|^(?:(?:(?:0?[13578]|1[02])(\/|-)31)|(?:(?:0?[1,3-9]|1[0-2])(\/|-)(?:29|30)))(\/|-)(?:[1-9]\d\d\d|\d[1-9]\d\d|\d\d[1-9]\d|\d\d\d[1-9])$|^(?:(?:0?[1-9]|1[0-2])(\/|-)(?:0?[1-9]|1\d|2[0-8]))(\/|-)(?:[1-9]\d\d\d|\d[1-9]\d\d|\d\d[1-9]\d|\d\d\d[1-9])$|^(0?2(\/|-)29)(\/|-)(?:(?:0[48]00|[13579][26]00|[2468][048]00)|(?:\d\d)?(?:0[48]|[2468][048]|[13579][26]))$/,
                    "alertText": "* ç„¡æ•ˆçš„æ—¥æœŸæ ¼å¼"
                },
                //tls warning:homegrown not fielded 
				"dateTimeFormat": {
	                "regex": /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])\s+(1[012]|0?[1-9]){1}:(0?[1-5]|[0-6][0-9]){1}:(0?[0-6]|[0-6][0-9]){1}\s+(am|pm|AM|PM){1}$|^(?:(?:(?:0?[13578]|1[02])(\/|-)31)|(?:(?:0?[1,3-9]|1[0-2])(\/|-)(?:29|30)))(\/|-)(?:[1-9]\d\d\d|\d[1-9]\d\d|\d\d[1-9]\d|\d\d\d[1-9])$|^((1[012]|0?[1-9]){1}\/(0?[1-9]|[12][0-9]|3[01]){1}\/\d{2,4}\s+(1[012]|0?[1-9]){1}:(0?[1-5]|[0-6][0-9]){1}:(0?[0-6]|[0-6][0-9]){1}\s+(am|pm|AM|PM){1})$/,
                    "alertText": "* ç„¡æ•ˆçš„æ—¥æœŸæˆ–æ™‚é–“æ ¼å¼",
                    "alertText2": "å¯æŽ¥å—çš„æ ¼å¼ï¼š ",
                    "alertText3": "mm/dd/yyyy hh:mm:ss AM|PM æˆ– ", 
                    "alertText4": "yyyy-mm-dd hh:mm:ss AM|PM"
	            }
            };
            
        }
    };
    $.validationEngineLanguage.newLang();
})(jQuery);
