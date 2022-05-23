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
    var picname = 'images/afm/A_FREE_MAN_0' + number_with_zero + '.jpg';

    document.getElementById('content').setAttribute('src',picname);
    document.getElementById('content').setAttribute('class',number);

    if (number == "1") {
        document.getElementById('content').setAttribute('style','border: solid 1px');
    } else {
        document.getElementById('content').setAttribute('style','border: solid 0px');
    }

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
    var picname = 'images/afm/A_FREE_MAN_0' + number_with_zero + '.jpg';

    document.getElementById('content').setAttribute('src',picname);
    document.getElementById('content').setAttribute('class',number);

    if (number == "1") {
        document.getElementById('content').setAttribute('style','border: solid 1px');
    } else {
        document.getElementById('content').setAttribute('style','border: solid 0px');
    }

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
    xhttp.open("GET", "../text/afm/afm" + number_with_zero + ".txt", true);
    xhttp.send();
}




