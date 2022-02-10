let active = false;

const toggleSwitch = imageId => {
    const image = document.getElementById(imageId);
    active = !active;
    if (active) {
        image.src = "../images/switch-active.svg";
    }

    else {
        image.src = "../images/switch.svg";
    };
};

document.getElementById("switch-btn-1").addEventListener("click", () => {
    toggleSwitch("switch-image-1");
});

document.getElementById("switch-btn-2").addEventListener("click", () => {
    toggleSwitch("switch-image-2");
});

document.getElementById("switch-btn-3").addEventListener("click", () => {
    toggleSwitch("switch-image-3");
});

document.getElementById("switch-btn-4").addEventListener("click", () => {
    toggleSwitch("switch-image-4");
});

document.getElementById("switch-btn-5").addEventListener("click", () => {
    toggleSwitch("switch-image-5");
});

document.getElementById("switch-btn-6").addEventListener("click", () => {
    toggleSwitch("switch-image-6");
});

document.getElementById("switch-btn-7").addEventListener("click", () => {
    toggleSwitch("switch-image-7");
});

document.getElementById("switch-btn-8").addEventListener("click", () => {
    toggleSwitch("switch-image-8");
});

document.getElementById("switch-btn-9").addEventListener("click", () => {
    toggleSwitch("switch-image-9");
});

document.getElementById("switch-btn-10").addEventListener("click", () => {
    toggleSwitch("switch-image-10");
});

document.getElementById("switch-btn-11").addEventListener("click", () => {
    toggleSwitch("switch-image-11");
});

document.getElementById("switch-btn-12").addEventListener("click", () => {
    toggleSwitch("switch-image-12");
});

document.getElementById("switch-btn-13").addEventListener("click", () => {
    toggleSwitch("switch-image-13");
});

document.getElementById("switch-btn-14").addEventListener("click", () => {
    toggleSwitch("switch-image-14");
});

document.getElementById("switch-btn-15").addEventListener("click", () => {
    toggleSwitch("switch-image-15");
});

document.getElementById("switch-btn-16").addEventListener("click", () => {
    toggleSwitch("switch-image-16");
});

document.getElementById("switch-btn-17").addEventListener("click", () => {
    toggleSwitch("switch-image-17");
});

