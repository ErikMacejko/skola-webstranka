// Vytvorim si novy element <link> pomocou .createElement
var link = document.createElement('link');

// nastavim atributy link elementu cize rel type a href kde odkazem cestu na moje responzivne CSSko
link.rel = 'stylesheet';
link.type = 'text/css';
link.href = 'css/1600px.css';

// Chcem ho dat do HTML, pomocou .getElementsByTagName si vyberiem  <head> a priradim tam link s CCSkom
document.getElementsByTagName('HEAD')[0].appendChild(link);


// POSTUP OPAKUJEM PRE KAZDE CSS 

var link = document.createElement('link');

link.rel = 'stylesheet';
link.type = 'text/css';
link.href = 'css/1300px.css';

document.getElementsByTagName('HEAD')[0].appendChild(link);

var link = document.createElement('link');

link.rel = 'stylesheet';
link.type = 'text/css';
link.href = 'css/900px.css';

document.getElementsByTagName('HEAD')[0].appendChild(link);

var link = document.createElement('link');

link.rel = 'stylesheet';
link.type = 'text/css';
link.href = 'css/700px.css';

document.getElementsByTagName('HEAD')[0].appendChild(link);