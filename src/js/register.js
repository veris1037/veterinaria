const formRegister = document.getElementById('formRegister')

formRegister.addEventListener('submit', async (e) => {
    e.preventDefault()
    const formData = new FormData(formRegister)
    formData.append('action', 'register')

    const response = await fetch('../api/user.php', {
        method: 'POST',
        body: formData
    })
    const res = await response.json()

    console.log(res)
})