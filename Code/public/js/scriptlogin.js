function show() {
    if (document.getElementById("dropdown").style.display === "none") {
        document.getElementById("dropdown").style.display = "block";
    } else if (
        document.getElementById("dropdown").style.display === "block"
    ) {
        document.getElementById("dropdown").style.display = "none";
    }
}