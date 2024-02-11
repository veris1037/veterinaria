const form = document.getElementById('form')

async function handleSubmit(e) {
    e.preventDefault();
    const formData = new FormData(form)
    formData.append('action', 'create');

    const response = await fetch('api/citas.php', {
        method: 'POST',
        body: formData
    })
    const res = await response.json()
    if (res.status == 200) {
        Swal.fire({
            title: "Ok",
            text: "Mensaje enviado correctamente",
            icon: "success"
        });
        form.reset();
    } else {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Algo salió mal"
          });
    }
}

form.addEventListener('submit', handleSubmit)
