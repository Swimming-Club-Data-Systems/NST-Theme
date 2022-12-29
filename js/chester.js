/*
 * Chester.JS
 * Supports features for our wordpress site
 * Copyright Chester-le-Street ASC 2017
 * GNU License
 */

/* Show the pretty time */

function prettyTime() {
  let datetime = new Date(document.getElementById('time').dateTime);
  let today = new Date();
  let datePublished = new Date(datetime.getFullYear(), datetime.getMonth(), datetime.getDate());
  let dateToday = new Date(today.getFullYear(), today.getMonth(), today.getDate());
  let test = parseInt(today-datetime);
  let testDays = parseInt(dateToday-datePublished);
  let monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

  let datetimeScreen = "";
  if ( test < 0 ) {
    datetimeScreen = "just now";
  }
  else if ( test < 60000 ) {
    datetimeScreen = Math.floor(test/1000) + " seconds ago";
  }
  else if ( test < 120000 ) {
    datetimeScreen = "1 minute ago";
  }
  else if ( test < 3600000 ) {
    datetimeScreen = parseInt(test/60000) + " minutes ago";
  }
  else if ( test < 7200000 ) {
    datetimeScreen = "1 hour ago";
  }
  else if ( test < 86400000 ) {
    datetimeScreen = parseInt(test/3600000) + " hours ago";
  }
  else if ( test < 172800000 && (today.getDate()-datetime.getDate() === 1) ) {
    datetimeScreen = "1 day ago";
  }
  else if ( testDays <= 604800000 ) {
    datetimeScreen = Math.ceil((dateToday-datePublished)/86400000) + " days ago";
  }
  else {
    datetimeScreen = datetime.getDate()+ " " + monthNames[datetime.getMonth()]+ " " + datetime.getFullYear();
  }
  let datetimeScreenOutput = document.getElementById('dtOut');
  datetimeScreenOutput.textContent = datetimeScreen;
}

if (document.getElementById('time') !== null) {
  let intervalID = window.setInterval(prettyTime, 1000);
}