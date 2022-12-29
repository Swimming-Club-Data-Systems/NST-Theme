let dropCookie = true;                      // false disables the Cookie, allowing you to style the banner
let cookieDuration = 112;                    // Number of days before the cookie expires, and the banner reappears
let cookieName = 'complianceCookie';        // Name of our cookie
let cookieValue = 'on';                     // Value of cookie

const removeMe = () => {
    let element = document.getElementById('cookie-law');
    element.parentNode.removeChild(element);

    // Only removes notice on click - We must get consent
    createCookie(cookieName, cookieValue, cookieDuration); // Create the cookie
}

function createDiv() {
    let bodytag = document.getElementsByTagName('body')[0];
    let div = document.createElement('div');
    div.setAttribute('id', 'cookie-law');
    div.innerHTML = '<div class="container"><p>We use cookies for accounts, user tracking and third party social media content. By continuing we assume your permission to use cookies, as detailed in our <a class="alert-link" href="https://www.chesterlestreetasc.co.uk/policies/cookies/" rel="nofollow" title="Cookie Policy">cookie policy</a>.</p><a id="remove-me-link" href="#" class="alert-link">Continue</a></div>';
    // Be advised the Close Banner 'X' link requires jQuery

    // bodytag.appendChild(div); // Adds the Cookie Law Banner just before the closing </body> tag
    // or
    bodytag.insertBefore(div, bodytag.firstChild); // Adds the Cookie Law Banner just after the opening <body> tag

    document.getElementsByTagName('body')[0].className += ' cookiebanner'; //Adds a class to the <body> tag when the banner is visible
    document.getElementById("remove-me-link").addEventListener("click", removeMe);
}


function createCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    if (dropCookie) {
        document.cookie = name + "=" + value + expires + ";domain=." + window.location.hostname + ";path=/";
    }
}

function checkCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}

window.onload = function () {
    if (checkCookie(cookieName) !== cookieValue) {
        createDiv();
    }
}