const form = document.getElementById("form");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    const nama = document.querySelector("#nama.input input");
    const email = document.querySelector("#email.input input");
    const errorMessage1 = document.querySelector("#nama");
    const errorMessage2 = document.querySelector("#email");

    const error_old = document.querySelectorAll(".error");
    error_old.forEach(error => error.remove());
    
    if(nama.value === "") {
        const p = document.createElement("p");
        p.setAttribute("class", "error");
        p.innerHTML = "NAMANYA DIISI!";
        errorMessage1.appendChild(p);
    }
    if(email.value === "") {
        const p = document.createElement("p");
        p.setAttribute("class", "error");
        p.innerHTML = "EMAILNYA DIISI!";
        errorMessage2.appendChild(p);
    }
    console.log(nama.value);
    console.log(email.value);
});
