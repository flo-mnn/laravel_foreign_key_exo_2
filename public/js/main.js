let colorPreview = document.querySelector('#colorPreview');
let colorInput = document.querySelector('#colorInput');
let changeColorPreview = () => {
    let options = colorInput.querySelectorAll('option');
    let selectedColor;
    for (let i = 0; i < options.length; i++) {
        if (options[i].value === colorInput.value) {
            selectedColor = options[i].innerText;
        };
    }; 
    colorPreview.style.backgroundColor = `${selectedColor}`;
}
colorInput.addEventListener('input',changeColorPreview);
colorInput.addEventListener('keydown',changeColorPreview);