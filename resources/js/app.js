import './bootstrap';

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
