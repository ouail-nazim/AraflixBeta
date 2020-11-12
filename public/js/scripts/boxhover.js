const show=element=>{
    element.style.opacity=1;
    element.previousSibling.previousElementSibling.style.opacity=0.2;
}
const hide=element=>{
    element.style.opacity=0;
    element.previousSibling.previousElementSibling.style.opacity=1;
}

const showlist=element=>{
    console.log(element.childNodes[3].classList.toggle('hide'));
}
