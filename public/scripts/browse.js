// For active Button
document.getElementById("btn-container").addEventListener("click", event => {
    const button = event.target.classList.contains("rounded-btn");
    if (event.target.classList.contains("rounded-btn-active")) {
        event.target.className = "rounded-btn";
    }

    else if (button) {
        event.target.classList.add("rounded-btn-active");
    };
});