function clsPrettyTime(unixTime) {
    let datetime = new Date((unixTime) * 1000);
    let today = new Date();
    // var today = today.getTime();
    // console.log("TODAY - " + today);
    let test = parseInt(today - datetime);
    let monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    if (test < 60000) {
        let datetimeScreen = "Just Now";
        return datetimeScreen;
    } else if (test < 3600000) {
        let datetimeScreen = parseInt(test / 60000) + " minutes ago";
        return datetimeScreen;
    } else if (test < 86400000) {
        let datetimeScreen = parseInt(test / 3600000) + " hours ago";
        return datetimeScreen;
    } else if (test < 604800000) {
        let datetimeScreen = parseInt(test / 86400000) + " days ago";
        return datetimeScreen;
    } else {
        let datetimeScreen = datetime.getDate() + " " + monthNames[datetime.getMonth()] + " " + datetime.getFullYear();
        return datetimeScreen;
    }
}

function updateTime() {
    let datetimeScreenOutput = document.getElementById('dtOut');
    datetimeScreenOutput.textContent = clsPrettyTime(unixTime);
}

let intervalID = window.setInterval(updateTime, 1000);
