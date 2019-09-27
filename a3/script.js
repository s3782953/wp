/* Insert your javascript here */

window.onscroll = function() {
  console.log("WinY: "+window.scrollY);
  var articles = document.getElementsByTagName('main')
  [0].getElementsByTagName('article');
  //console.log(articles);
  var navlinks = document.getElementsByTagName('nav')
  [0].getElementsByTagName('a');
  //console.log(navlinks);
  var n = -1;
  while (n < articles.length - 1 && window.scrollY >= articles[n+1].offsetTop) {
    //console.log(articles[n+1].id+": "+articles[n+1].offsetTop)
    n++;
  }
  //console.log(n);
  for (var i = 0; i < navlinks.length; i++) {
    navlinks[i].classList.remove('active');
  }
  if (n < 0) {
    //console.log("no active link");
  }
  else {
    navlinks[n].classList.add('active');
    //console.log(articles[n].id+": "+articles[n].offsetTop)
  }
}

function endGame() {
  var time = [];
  time.push("Sun - 6:00pm");
  time.push("Sat - 6:00pm");
  time.push("Fri - 9:00pm");
  time.push("Thu - 9:00pm");
  time.push("Wed - 9:00pm");
  time.push("Tue - Not Showing");
  time.push("Mon - Not Showing");
  for (var i = 0; i < time.length; i++) {
    console.log("ID "+i+": "+time[i]);
    document.querySelectorAll('.synopsis_buttons')
    [0].getElementsByTagName('button')[i].textContent = time[i];
  }

  document.querySelectorAll('.synopsis_video')
  [0].getElementsByTagName('iframe')[0].src = "https://www.youtube.com/embed/TcMBFSGVi1c";

  document.querySelectorAll('.synopsis_text')
  [0].getElementsByTagName('h2')[0].textContent = "Avengers: EndGame (PG)";

  document.querySelectorAll('.synopsis_text')
  [0].getElementsByTagName('p')[0].textContent = "Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.";
}

function tew() {
  var time = [];
  time.push("Sun - 3:00pm");
  time.push("Sat - 3:00pm");
  time.push("Fri - Not Showing");
  time.push("Thu - Not Showing");
  time.push("Wed - Not Showing");
  time.push("Tue - 6:00pm");
  time.push("Mon - 6:00pm");
  for (var i = 0; i < time.length; i++) {
    console.log("ID "+i+": "+time[i]);
    document.querySelectorAll('.synopsis_buttons')
    [0].getElementsByTagName('button')[i].textContent = time[i];
  }

  document.querySelectorAll('.synopsis_video')
  [0].getElementsByTagName('iframe')[0].src = "https://www.youtube.com/embed/uoDBvGF9pPU";

  document.querySelectorAll('.synopsis_text')
  [0].getElementsByTagName('h2')[0].textContent = "Top End Wedding (M)";

  document.querySelectorAll('.synopsis_text')
  [0].getElementsByTagName('p')[0].textContent = "Lauren and Ned have 10 days to find Lauren's mother who has gone AWOL in the remote far north of Australia so that they can reunite her parents and pull off their dream wedding.";
}

function dumbo() {
  var time = [];
  time.push("Sun - 12:00pm");
  time.push("Sat - 12:00pm");
  time.push("Fri - 6:00pm");
  time.push("Thu - 6:00pm");
  time.push("Wed - 6:00pm");
  time.push("Tue - 12:00pm");
  time.push("Mon - 12:00pm");
  for (var i = 0; i < time.length; i++) {
    console.log("ID "+i+": "+time[i]);
    document.querySelectorAll('.synopsis_buttons')
    [0].getElementsByTagName('button')[i].textContent = time[i];
  }

  document.querySelectorAll('.synopsis_video')
  [0].getElementsByTagName('iframe')[0].src = "https://www.youtube.com/embed/ocWpGdITSR4";

  document.querySelectorAll('.synopsis_text')
  [0].getElementsByTagName('h2')[0].textContent = "Dumbo (PG)";

  document.querySelectorAll('.synopsis_text')
  [0].getElementsByTagName('p')[0].textContent = "Struggling circus owner Max Medici enlists a former star and his two children to care for Dumbo, a baby elephant born with oversized ears. When the family discovers that the animal can fly, it soon becomes the main attraction -- bringing in huge audiences and revitalizing the run-down circus.";
}

function thp() {
  var time = [];
  time.push("Sun - Not Showing");
  time.push("Sat - Not Showing");
  time.push("Fri - 12:00pm");
  time.push("Thu - 12:00pm");
  time.push("Wed - 12:00pm");
  time.push("Tue - 9:00pm");
  time.push("Mon - 9:00pm");
  for (var i = 0; i < time.length; i++) {
    console.log("ID "+i+": "+time[i]);
    document.querySelectorAll('.synopsis_buttons')
    [0].getElementsByTagName('button')[i].textContent = time[i];
  }

  document.querySelectorAll('.synopsis_video')
  [0].getElementsByTagName('iframe')[0].src = "https://www.youtube.com/embed/tXANCJQkUIE";

  document.querySelectorAll('.synopsis_text')
  [0].getElementsByTagName('h2')[0].textContent = "The Happy Prince (R)";

  document.querySelectorAll('.synopsis_text')
  [0].getElementsByTagName('p')[0].textContent = "The Happy Prince by Oscar Wilde is the story of a statue, the Happy Prince, covered with gold and many fine jewels. It sits overlooking the city. One day, a swallow passing through seeks shelter under the statue and discovers the prince is not happy, but sad.";
}
