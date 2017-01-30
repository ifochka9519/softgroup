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
    valid = empt('city', 'city');
    if(!valid) return valid;
    valid = srt('city', '[^A-Za-z A-Za-z]+');
    if(!valid) return valid;
    valid = empt('founded', 'founded');
    if(!valid) return valid;
    valid = srt('founded', '[^0-9]+');
    if(!valid) return valid;
    valid = empt('president1', 'president1');
    if(!valid) return valid;
    valid = srt('president1', '[^A-Za-z A-Za-z]+');
    if(!valid) return valid;
    valid = empt('president2', 'president2');
    if(!valid) return valid;
    valid = srt('president2', '[^A-Za-z A-Za-z]+');
    if(!valid) return valid;
    valid = empt('revenue', 'revenue');
    if(!valid) return valid;
    valid = srt('revenue', '[^0-9]+');
    if(!valid) return valid;
    valid = empt('league', 'league');
    if(!valid) return valid;
    valid = srt('league', '[^A-Za-z A-Za-z]+');
    if(!valid) return valid;
    valid = empt('stadium', 'stadium');
    if(!valid) return valid;
    valid = srt('stadium', '[^A-Za-z A-Za-z]+');
    if(!valid) return valid;
    return valid;
}