function goToSection(section){

    document.querySelector("#" + section).scrollIntoView({
        behavior: "smooth"
    });
}