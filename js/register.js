let buttonRegister = document.querySelector('.buttonRegister');
let a = document.createElement('a');


let svgElement = document.querySelector('svg');
let dataUrl = svgElement.toDataURL();
console.log(dataUrl);

buttonRegister.addEventListener('click',function(){
    let xmlSource = new XMLSerializer().serializeToString(svgElement)
    let encodedData = window.btoa(xmlSource);
    xmlSource = `<?xml version="1.0" standalone="no"?>\r\n${xmlSource}`;
    a.setAttribute('href', 'data:image/svg+xml;charset=utf-8,' + encodeURIComponent(encodedData))


})