const svg =document.querySelector('#svg');
let form = document.querySelector('#submit-form');
let avatar= document.querySelector('#avatar');
const buttonRegister = document.querySelector('.buttonRegister')

form.addEventListener('submit', async function (event) {
    event.preventDefault();
    // const link = event.currentTarget;
    const response = await fetch(form.action+'?ajax=true', { method: 'POST', body: new FormData(form) });
    const data = await response.text();
    avatar.value = data;
    // console.log(avatar)
    svg.innerHTML = data;
})

// buttonRegister.addEventListener('click' ,registerSVG)
// function registerSVG(){
//     document.querySelector('#avatar').value=avatar;
//
// }