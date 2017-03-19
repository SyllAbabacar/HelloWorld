var dictionary = {
    de: {
        save: 'Spare',
        same_price: 'Gleicher preis',
        more: 'MEHR',
        shipping: 'Versand',
        freeShipping: 'Kostenloser Versand',
        problems_with_these_results: 'Gibt es Beanstandungen zu den Ergebnissen?'
    },
    en: {
        save: 'Save',
        same_price: 'Same price',
        more: 'MORE',
        shipping: 'Shipping',
        freeShipping: 'Free Shipping',
        problems_with_these_results: 'Problems with these results?'
    },
    es: {
        save: 'Guardar',
        same_price: 'Mismo precio',
        more: 'MÁS',
        shipping: 'Envío',
        freeShipping: 'Envío Gratuito',
        problems_with_these_results: '¿Hay reclamaciones con respecto a los resultados?'
    },
    pt: {
        save: 'Economizar',
        same_price: 'Mesmo preço',
        more: 'MAIS CARO',
        shipping: 'Envio',
        freeShipping: 'Envio grátis',
        problems_with_these_results: 'Problemas com estes resultados?'
    },
    fr: {
        save: 'Sauvegarder',
        same_price: 'Même prix',
        more: 'PLUS',
        shipping: 'Envoi',
        freeShipping: 'Envoi Gratuit',
        problems_with_these_results: 'Est-ce que vous souhaitez soumettre des réclamations au sujet de ces résultats?'
    },
    it: {
        save: 'Salva',
        same_price: 'Allo stesso prezzo',
        more: 'PIÙ ALTO',
        shipping: 'Spedizione',
        freeShipping: 'Spedizione Gratuita',
        problems_with_these_results: 'Ci sono reclami sui risultati?'
    },
    pl: {
        save: 'Oszczędzaj',
        same_price: 'Taka sama cena',
        more: 'WIĘCEJ',
        shipping: 'Wysyłka',
        freeShipping: 'Wysyłka gratis',
        problems_with_these_results: 'Problemy z tymi wynikami?'
    },
    ru: {
        save: 'Экономия',
        same_price: 'Tа же цена',
        more: 'БОЛЬШЕ',
        shipping: 'Доставка',
        freeShipping: 'Бесплатная доставка',
        problems_with_these_results: 'Возникли проблемы с этими результатами?'
    },
    nl: {
        save: 'Bewaar',
        same_price: 'Zelfde prijs',
        more: 'MEER',
        shipping: 'Verzending',
        freeShipping: 'Gratis verzending',
        problems_with_these_results: 'Problemen met deze resultaten?'
    },
    no: {
        save: 'Spar',
        same_price: 'Samme pris',
        more: 'MER',
        shipping: 'Frakt',
        freeShipping: 'Gratis frakt',
        problems_with_these_results: 'Problemer med disse resultatene?'
    },
    sv: {
        save: 'Spara',
        same_price: 'Samma pris',
        more: 'MER',
        shipping: 'Frakt',
        freeShipping: 'Fri frakt',
        problems_with_these_results: 'Problem med dessa resultat?'
    },
    tr: {
        save: 'Tasarruf et',
        same_price: 'Ayni fi̇yat',
        more: 'DAHA',
        shipping: 'Kargo',
        freeShipping: 'Ücretsiz kargo',
        problems_with_these_results: 'Bu sonuçlarla ilgili problemler mi var?'
    }
};

var storage = {
    get: function(key, defaultValue) {
        if (localStorage[key]) {
            try {
                return JSON.parse(localStorage[key]);
            } catch (ex) {
            }
        }
        if (defaultValue === undefined) {
            return null;
        }
        return defaultValue;
    },
    set: function(key, newValue) {
        localStorage[key] = JSON.stringify(newValue);
    },
    remove: function(key) {
        if (localStorage[key]) {
            delete localStorage[key];
        }
    }
};

var language = (function() {
    var detectedLanguage = storage.get('detectedLanguageV2', null);

    if (detectedLanguage) {
        return detectedLanguage;
    }

    detectedLanguage = 'en';

    // list from http://msdn.microsoft.com/en-us/library/windows/apps/jj657969.aspx
    var supportedLanguages = {
        de: ['de', 'de-de', 'de-ch', 'de-at', 'de-lu', 'de-li'],
        es: ['es', 'es-es', 'es-ar', 'es-bo', 'es-cl', 'es-co', 'es-cr', 'es-do', 'es-ec', 'es-gt', 'es-hn', 'es-mx', 'es-ni', 'es-pa', 'es-pe', 'es-pr', 'es-py', 'es-sv', 'es-uy', 'es-ve'],
        fr: ['fr', 'fr-fr', 'fr-be', 'fr-ca', 'fr-ch', 'fr-lu'],
        it: ['it', 'it-it', 'it-ch'],
        pt: ['pt', 'pt-br', 'pt-pt'],
        ru: ['ru', 'ru-ru'],
        pl: ['pl', 'pl-pl'],
        nl: ['nl', 'nl-nl', 'nl-be'],
        no: ['nb', 'nb-no', 'nn', 'nn-no', 'no', 'no-no'],
        sv: ['sv', 'sv-se', 'sv-fi'],
        tr: ['tr', 'tr-tr']
    };

    var navigatorLanguage = ((navigator.language) ? navigator.language : navigator.userLanguage).toLowerCase();
    for (var languageCode in supportedLanguages) {
        if (supportedLanguages[languageCode].indexOf(navigatorLanguage) > -1) {
            detectedLanguage = languageCode;
            break;
        }
    }

    storage.set('detectedLanguageV2', detectedLanguage);
    return detectedLanguage;
})();

var userLanguage = dictionary[language];
