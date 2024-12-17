function showFollowupForm() {
    const status = document.getElementById('status').value;

    // Realiza una solicitud AJAX al servidor para obtener el formulario de seguimiento
    fetch(`/path/to/your/endpoint?status=${status}`)
        .then(response => response.text())
        .then(html => {
            // Muestra el formulario de seguimiento en el lugar deseado
            document.getElementById('followup-container').innerHTML = html;
        })
        .catch(error => console.error('Error fetching followup form:', error));
}
