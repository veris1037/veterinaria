const container = document.getElementById('container')
const URL = 'http://localhost/login_vero/'

async function deleteItem(id) {
    const itemsRespose = await fetch(`${URL}api/user.php?action=delete&id=${id}`)
    const res = await itemsRespose.json()

    console.log(res)

    if (res.status == 200) {
        Swal.fire({
            title: "Ok",
            text: "Eliminado correctamente",
            icon: "success"
        });
        container.innerHTML = ''
        loadItems()
    } else {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Algo salió mal"
          });
    }
}