function updateSize() {
    document.getElementById('pre_title').style.fontSize = document.getElementById('size').value + "px";
    document.getElementById('title').style.fontSize = document.getElementById('title_size').value + "px";
    document.getElementById('section1_pre_title').style.fontSize = document.getElementById('section1_pre_title_size').value + "px";
    document.getElementById('section1_title').style.fontSize = document.getElementById('section1_title_size').value + "px";

}

function updateColor() {
    document.getElementById('pre_title').style.color = document.getElementById('color').value;
    document.getElementById('title').style.color = document.getElementById('title_color').value;
    document.getElementById('section1_pre_title').style.color = document.getElementById('section1_pre_title_color').value;
    document.getElementById('section1_title').style.color = document.getElementById('section1_title_color').value;
}

var fonts = ["Montez", "Lobster", "Josefin Sans", "Shadows Into Light", "Pacifico", "Amatic SC", "Orbitron", "Rokkitt", "Righteous", "Dancing Script", "Bangers", "Chewy", "Sigmar One", "Architects Daughter", "Abril Fatface", "Covered By Your Grace", "Kaushan Script", "Gloria Hallelujah", "Satisfy", "Lobster Two", "Comfortaa", "Cinzel", "Courgette"];
var string = "";
var select = document.getElementById("select");
var select_for_title = document.getElementById("select_for_title");
var select_section1_pre_title = document.getElementById('select_section1_pre_title');

for (var a = 0; a < fonts.length; a++) {
    let opt = document.createElement('option');
    opt.value = opt.innerHTML = fonts[a];
    opt.style.fontFamily = fonts[a];
    select.add(opt);
}

for (var a = 0; a < fonts.length; a++) {
    let opt = document.createElement('option');
    opt.value = opt.innerHTML = fonts[a];
    opt.style.fontFamily = fonts[a];
    select_for_title.add(opt);
}

for (var a = 0; a < fonts.length; a++) {
    let opt = document.createElement('option');
    opt.value = opt.innerHTML = fonts[a];
    opt.style.fontFamily = fonts[a];
    select_section1_pre_title.add(opt);
}

for (var a = 0; a < fonts.length; a++) {
    let opt = document.createElement('option');
    opt.value = opt.innerHTML = fonts[a];
    opt.style.fontFamily = fonts[a];
    select_section1_title.add(opt);
}

function fontChange() {
    var x = document.getElementById("select").selectedIndex;
    var y = document.getElementById("select").options;
    document.body.insertAdjacentHTML("beforeend", "<style> .text{ font-family:'" + y[x].text + "';}" +
        "#select{font-family:'" + y[x].text + "';</style>");
}

fontChange();

function fontTitleChange() {
    var x = document.getElementById("select_for_title").selectedIndex;
    var y = document.getElementById("select_for_title").options;
    document.body.insertAdjacentHTML("beforeend", "<style> .title{ font-family:'" + y[x].text + "';}" +
        "#select_for_title{font-family:'" + y[x].text + "';</style>");
}

fontTitleChange();

function fontSection1PreTitleChange() {
    var x = document.getElementById("select_section1_pre_title").selectedIndex;
    var y = document.getElementById("select_section1_pre_title").options;
    document.body.insertAdjacentHTML("beforeend", "<style> .section1_pre_title{ font-family:'" + y[x].text + "';}" +
        "#select_section1_pre_title{font-family:'" + y[x].text + "';</style>");
}

fontSection1PreTitleChange();

function fontSection1TitleChange() {
    var x = document.getElementById("select_section1_title").selectedIndex;
    var y = document.getElementById("select_section1_title").options;
    document.body.insertAdjacentHTML("beforeend", "<style> .section1_title{ font-family:'" + y[x].text + "';}" +
        "#select_section1_title{font-family:'" + y[x].text + "';</style>");
}

fontSection1TitleChange();