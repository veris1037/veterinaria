const container = document.getElementById('container')
const URL = 'http://localhost/login_vero/'

async function loadUsers() {
    const userResponse = await fetch(`${URL}api/user.php?action=get-all`)
    const res = await userResponse.json()

    const users = res.data
    const fragment = document.createDocumentFragment()

    users.forEach(user => {
        const userList = createItem(user)
        fragment.append(userList)
    })

    container.append(fragment)
}

function createItem(data) {
    const elementList = document.createElement('div')
    elementList.className = 'w-full h-14 my-2 rounded bg-white shadow-md grid grid-cols-5 items-center justify-items-center py-2'

    const textId = document.createElement('p')
    textId.textContent = data.name

    const name = document.createElement('p')
    name.textContent = data.lastname

    const email = document.createElement('p')
    email.textContent = data.email

    const comment = document.createElement('p')
    comment.textContent = data.phone

    const options = document.createElement('div')
    options.className = 'w-full h-full grid place-items-center'

    const button = document.createElement('button')
    button.innerHTML = `<i class='bx bx-trash'></i>`
    button.className = 'p-2 rounded bg-red-500 text-white'
    button.addEventListener('click', () => { deleteItem(data.id) })

    options.append(button)

    elementList.append(textId)
    elementList.append(name)
    elementList.append(email)
    elementList.append(comment)
    elementList.append(options)

    return elementList
}

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
        loadUsers()
    } else {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Algo salió mal"
          });
    }
}

window.addEventListener('load', () => {
    loadUsers()
})