const contactfix = document.querySelector('.contact_fix')
const contactall = document.querySelector('.contact_all')
const contactitemclose = document.querySelector('.contact_item_close')


contactfix.onclick = function(){
    contactall.style.display = 'block'
    contactfix.style.display = 'none'

}
contactitemclose.onclick = function(){
    contactall.style.display = 'none'
    contactfix.style.display = 'block'
}