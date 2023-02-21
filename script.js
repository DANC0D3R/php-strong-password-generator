let slider = document.querySelector(".slider");
let output = document.querySelector("#sliderValue");
output.innerHTML = slider.value;

// Visualizzazione numero caratteri selezionati con lo slider
slider.addEventListener("input", function(){
    output.innerHTML = this.value;
});