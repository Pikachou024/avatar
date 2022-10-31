const svg =document.querySelector('#svg');
let form = document.querySelector('#submit-form');
let formDownload = document.querySelector('#downloadAvatar');


form.addEventListener('submit', async function (event) {
    event.preventDefault();
    // const link = event.currentTarget;
    const response = await fetch(form.action+'?ajax=true', { method: 'POST', body: new FormData(form) });
    const data = await response.text();
    svg.innerHTML = data;
})

formDownload.addEventListener('submit', async function (event) {
    event.preventDefault();

    const response = await fetch(formDownload.action, { method: 'POST', body: new FormData(formDownload) });
    const data = await response.text();
    alert(data);
})
