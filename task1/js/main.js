function empt(i, word) {
    if(document.getElementById(i).value == ''){
        alert('Input ' + word + '!');
        return false;
    }
    return true;
}
function srt(i, regs) {
    var reg =  new RegExp(regs);
    if(reg.test(document.getElementById(i).value)){
        alert('ERROR DATA!');
        return  false;
    }
    return true;
}
function searching() {
    var valid = true;
    valid = empt('sumb', 'sumbol');
    if(!valid) return valid;
    valid = srt('sumb', '[^A-Za-z]+');
    return valid;
}
function adds() {
    var valid = true;
    valid = empt('name', 'name');
    if(!valid) return valid;
    valid = srt('name', '[^A-Za-z A-Za-z]+');
    if(!valid) return valid;
    valid = empt('country', 'country');
    if(!valid) return valid;
    valid = srt('country', '[^A-Za-z A-Za-z]+');
    if(!valid) return valid;
    valid = empt('founded', 'founded');
    if(!valid) return valid;
    valid = srt('founded', '[^0-9]+');
    if(!valid) return valid;
    valid = empt('president', 'president');
    if(!valid) return valid;
    valid = srt('president', '[^A-Za-z A-Za-z]+');
    if(!valid) return valid;
    valid = empt('revenue', 'revenue');
    if(!valid) return valid;
    valid = srt('founded', '[^0-9]+');
    if(!valid) return valid;
    valid = empt('honours', 'honours');
    if(!valid) return valid;
    valid = srt('founded', '[^0-9]+');
    if(!valid) return valid;
    return valid;
}
