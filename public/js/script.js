function showSidebar() {
    const sidebar = document.getElementById('sidebar')
    sidebar.style.display = 'flex'
}

function closeSidebar() {
    const sidebar = document.getElementById('sidebar')
    sidebar.style.display = 'none'
}

addEventListener("DOMContentLoaded", () => {
    const navbarProfile = document.getElementById("navbar-profile")

    const userMenuButton = document.getElementById('user-menu-button')
    userMenuButton.addEventListener("mouseenter", () => {
        navbarProfile.classList.remove('hidden')
        navbarProfile.classList.add('absolute')
        navbarProfile.addEventListener('mouseenter', () => {
            navbarProfile.classList.remove('hidden')
            navbarProfile.classList.add('absolute')
        })
    })
    userMenuButton.addEventListener("mouseleave", () => {
        navbarProfile.classList.remove('absolute')
        navbarProfile.classList.add('hidden')
        navbarProfile.addEventListener("mouseleave", () => {
            navbarProfile.classList.remove('absolute')
            navbarProfile.classList.add('hidden')
        })
    })
})
