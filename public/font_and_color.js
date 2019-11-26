function updateh1family() {
    var selector = document.getElementById('selecth1FontFamily');
    var family = selector.options[selector.selectedIndex].value;
    var h1 = document.getElementById('text')
    h1.style.fontFamily = family;
}

function updateSize() {
    document.getElementById('text').style.fontSize = document.getElementById('size').value + "px";
}

function updateColor() {
    document.getElementById('text').style.color = document.getElementById('color').value;
}