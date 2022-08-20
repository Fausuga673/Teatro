const td = document.getElementsByTagName('td');

for (let i = 0; i != td.length; i++) {

    td[i].className += 'font-weight-bold ';
    if (td[i].textContent == "R") td[i].className += 'bg-primary';
    if (td[i].textContent == "V") td[i].className += 'bg-success';

}