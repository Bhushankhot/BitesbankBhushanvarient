function alrtCls(){
    let para = document.getElementsByClassName('alrt');
    console.log(para);
    for(let i=0;i<para.length;i++)
    if(para[i].style.display != 'none'){
    para[i].style.display = 'none';
    }
}
function fadeIn(){
    let para = document.getElementsByClassName('alrt');
    for(let i=0;i<para.length;i++)
    para[i].style.display = 'none';
}
setTimeout(fadeIn, 9900);