function checkForm(el) {
    let y = el.y.value;
    let r = el.r.value;
    if (checkR(r) & checkY(y)) return true;
    return false;

}

function printErr(text,id) {
    document.getElementById(id).innerHTML = text;
    document.getElementById(id).style.color='red';
}

function checkY(y) {
    if (y == '') {
        printErr('Заполните поле','yError');
        return false;
    }else if (new RegExp('^[0-5]$').test(y) || new RegExp('^-[1-5]$').test(y)) {
        document.getElementById('yError').innerHTML = '';
        return true;
    }else {
        printErr('Некоректное значение','yError');
        return false;
    }
}

function checkR(r) {
    if (r == '') {
        printErr('Заполните поле','rError');
        return false;
    }
    else {
        document.getElementById('rError').innerHTML = '';
        return true;
    }
}