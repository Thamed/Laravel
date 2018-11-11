function myFunction() {
    if (document.getElementById("nav").classList.contains("showThis")) {
        document.getElementById("nav").classList.add("nav");
        document.getElementById("nav").classList.remove("showThis");

    } else {
        document.getElementById("nav").classList.remove("nav");
        document.getElementById("nav").classList.add("showThis");
    }
    document.getElementById("box").classList.toggle("box");
    document.getElementById("mi1").classList.toggle("mi1");
    document.getElementById("mi2").classList.toggle("mi2");
    document.getElementById("mi3").classList.toggle("mi3");
}

