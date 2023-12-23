import './bootstrap';
import '/resources/js/laravel.js'

function wa(noPonsel, message = '') {
    let url = `https://api.whatsapp.com/send/?phone=${noPonsel}`;
    if (message != '')
    {
        url += `&text=${encodeURIComponent(message)}`;
    }

    let wa = window.open(url, '_blank');
    wa.focus();
}

window.wa = wa;

function stringToDate(date, format = "dd/mm/yyyy") {
    const regex = /\W/g;
    const dateSplit = date.split("");
    const formatSplit = format.split("");

    var dateDelimiter = null;
    var formatDelimiter = null;

    dateSplit.forEach((str) => {
        if (str.match(regex))
        {
            dateDelimiter = str.match(regex)[0];
            return;
        }
    });

    formatSplit.forEach((str) => {
        if (str.match(regex))
        {
            formatDelimiter = str.match(regex)[0];
            return;
        }
    });

    if (dateDelimiter)
    {
        var formatLowerCase = format.toLowerCase();

        var formatItems = formatLowerCase.split(formatDelimiter);
        var dateItems = date.split(dateDelimiter);

        var monthIndex = formatItems.indexOf("mm");
        var dayIndex = formatItems.indexOf("dd");
        var yearIndex = formatItems.indexOf("yyyy");

        var month = parseInt(dateItems[monthIndex]);
        month -= 1;


        console.log('day', dateItems[dayIndex])
        console.log('month', month)
        console.log('year', dateItems[yearIndex])

        return new Date(dateItems[yearIndex], month, dateItems[dayIndex]);
    }


    return date;
}

window.stringToDate = stringToDate;


function deleteLinked(url, token) {
    var form =
        $('<form>', {
            'method': 'POST',
            'action': url
        });

    var token =
        $('<input>', {
            'type': 'hidden',
            'name': '_token',
            'value': token
        });

    var hiddenInput =
        $('<input>', {
            'name': '_method',
            'type': 'hidden',
            'value': 'DELETE'
        });

    form.append(token, hiddenInput).appendTo('body');
    form.submit()
}

window.deleteLinked = deleteLinked;
