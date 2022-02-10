// For Switch Active
let active = false;
const image = document.querySelector(".switch-image");

document.querySelector(".switch-active").addEventListener("click", () => {
    active = !active;
    if (active) {
        image.src = "../images/switch-active.svg";
    }

    else {
        image.src = "../images/switch.svg";
    };
});

