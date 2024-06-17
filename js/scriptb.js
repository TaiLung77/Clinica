document.getElementById("search-input").addEventListener("keyup", getdocumentos);

function getdocumentos() {
    let inputCP = document.getElementById("search-input").value;
    let lista = document.getElementById("lista");

    let url = "section/getdocumentos.php";
    let formData = new FormData(); // La 'F' en FormData debe ser mayúscula
    formData.append("search-input", inputCP);

    fetch(url, {
        method: "POST",
        body: formData,
        mode: "cors"
    })
    .then(response => response.json()) // Asegúrate de que el servidor devuelve un JSON
    .then(data => {
        lista.style.display = 'block'; // La propiedad correcta es 'display'
        lista.innerHTML = data; // Asegúrate de que 'data' es HTML válido
    })
    .catch(err => console.log(err));
}
