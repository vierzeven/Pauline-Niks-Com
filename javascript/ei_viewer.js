function back(numberofpics) {
    var number = document.getElementById('content').getAttribute('class');
    if (number > 1) {
        number--;
    } else {
        number = numberofpics;
    }
    var number_with_zero = number;
    if (number < 10) {
        number_with_zero = '0' + number;
    }
    var picname = '../images/ei/ENKELE IDEEEN_0' + number_with_zero + '.jpg';

    document.getElementById('content').setAttribute('src',picname);
    document.getElementById('content').setAttribute('class',number);
    loadDoc(number_with_zero);
}

function next(numberofpics) {
    var number = document.getElementById('content').getAttribute('class');
    if (number < numberofpics) {
        number++;
    } else {
        number = 1;
    }
    var number_with_zero = number;
    if (number < 10) {
        number_with_zero = '0' + number;
    }
    var picname = '../images/ei/ENKELE IDEEEN_0' + number_with_zero + '.jpg';

    document.getElementById('content').setAttribute('src',picname);
    document.getElementById('content').setAttribute('class',number);
    loadDoc(number_with_zero);
}

function loadDoc(number_with_zero) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("text").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "../text/ei/ei" + number_with_zero + ".txt", true);
    xhttp.send();
}
