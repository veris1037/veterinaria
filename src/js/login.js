const formLogin = document.getElementById('formLogin')

formLogin.addEventListener('submit', async (e) => {
    e.preventDefault()
    const formData = new FormData(formLogin)
    formData.append('action', 'login')

    const response = await fetch('../api/user.php', {
        method: 'POST',
        body: formData
    })
    const res = await response.json()

    if (res.status == 200) {
        window.location.href = 'http://localhost/login_vero/'
    }
})