function back(numberofpics,project) {

    // Calculate what picture to go to (if currently at 1, then go to the last)
    let number = Number(document.getElementById('content').getAttribute('class'));
    number = number > 1 ? number - 1 : numberofpics;

    // Add zero before numbers below 10
    let number_with_zero = number < 10 ? '0' + number : number;

    // Figure out the path to the picture
    let picname = getImagePath(project) + '' + number_with_zero + '.jpg';

    // Change attributes src & class to match new values
    document.getElementById('content').setAttribute('src',picname);
    document.getElementById('content').setAttribute('class',number);
    document.getElementById('project_title').innerHTML = getProjectTitle(project);

    // Use AJAX to load the text
    let textPath = getTextPath(project);
    loadText(number_with_zero, textPath);

    fixImageSize();

}

function next(numberofpics,project) {

    // Calculate what picture to go to (if currently at 1, then go to the last)
    let number = Number(document.getElementById('content').getAttribute('class'));
    number = number < numberofpics ? number + 1 : 1;

    // Add zero before numbers below 10
    let number_with_zero = number < 10 ? '0' + number : number;

    // Figure out the path to the picture
    let picname = getImagePath(project) + '' + number_with_zero + '.jpg';

    // Change attributes src & class to match new values
    document.getElementById('content').setAttribute('src',picname);
    document.getElementById('content').setAttribute('class',number);
    document.getElementById('project_title').innerHTML = getProjectTitle(project);

    // Use AJAX to load the text
    let textPath = getTextPath(project);
    loadText(number_with_zero, textPath);

    fixImageSize();

}

function getImagePath(project) {
    let path = '';
    switch (project) {
        case 1: path = 'images/afm/A_FREE_MAN_0';                   break;
        case 2: path = 'images/ei/ENKELE IDEEEN_0';                 break;
        case 3: path = 'images/iajass/I_AM_JUST_A_SCENIC_SPOT_0';   break;
        case 4: path = 'images/overzichten/overzichten0';           break;
        case 5: path = 'images/twgnb/TWGNB0';                       break;
    }
    return path;
}

function getTextPath(project) {
    let path = '';
    switch (project) {
        case 1: path = 'text/afm/afm';                  break;
        case 2: path = 'text/ei/ei';                    break;
        case 3: path = 'text/iajass/iajass';            break;
        case 4: path = 'text/overzichten/overzichten';  break;
        case 5: path = 'text/twgnb/twgnb';              break;
    }
    return path;
}

function getProjectTitle(project) {
    let projectTitle = '';
    switch (project) {
        case 1: projectTitle = 'A free man';                            break;
        case 2: projectTitle = 'Enkele idee&euml;n';                     break;
        case 3: projectTitle = 'I am just a scenic spot';               break;
        case 4: projectTitle = 'Overzichten';                           break;
        case 5: projectTitle = 'That\'s when good neighbours become';   break;
    }
    return projectTitle;
}

function loadText(number_with_zero, textPath) {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("text").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", textPath + "" + number_with_zero + ".txt", true);
    xhttp.send();
}

function intro(project) {
    let path = '';
    switch (project) {
        case 1: path = 'afm'; break;
        case 2: path = 'ei'; break;
        case 3: path = 'iajass'; break;
        case 5: path = 'twgnb'; break;
    }
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("introtext").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "text/intro/" + path + ".txt", true);
    xhttp.send();
}

function toggleMenu() {
    var menu = document.getElementById('menu');
    var hamburger = document.getElementById('hamburger');
    var project_title = document.getElementById('project_title');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
        project_title.style.display = 'block';
        hamburger.setAttribute('src','icons/cross.png');
    } else {
        menu.style.display = 'block';
        project_title.style.display = 'none';
        hamburger.setAttribute('src','icons/hamburger.png');
    }
}





