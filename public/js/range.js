
var  input_left = document.getElementById("input_left");
var input_right = document.getElementById("input_right");

var thumb_left = document.querySelector(".slider > .thumb.left");
var thumb_right = document.querySelector(".slider > .thumb.right");
var range = document.querySelector(".slider > .range");

var set_left_value = () => {
    const _this = input_left;
    const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

    _this.value = Math.min(parseInt(_this.value), parseInt(input_right.value) - 1);

    const percent = ((_this.value - min) / (max - min)) * 100;
    thumb_left.style.left = percent + "%";
    range.style.left = percent + "%";
};

var set_right_value = () => {
    const _this = input_right;
    const [min, max] = [parseInt(_this.min), parseInt(_this.max)];

    _this.value = Math.max(parseInt(_this.value), parseInt(input_left.value) + 1);

    const percent = ((_this.value - min) / (max - min)) * 100;
    thumb_right.style.right = 100 - percent + "%";
    range.style.right = 100 - percent + "%";
};

input_left.addEventListener("input", set_left_value);
input_right.addEventListener("input", set_right_value);

function left_slider(value) {
    document.getElementById('left_value').innerHTML = value;
}
function right_slider(value) {
    document.getElementById('right_value').innerHTML = value;
}
