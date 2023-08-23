//kasus 1
const tUbahWarna = document.getElementById('tUbahWarna');
tUbahWarna.onclick = function(){
        //document.body.style.backgroundColor = 'lightblue';
        //document.body.setAttribute('class','biru-muda');
        document.body.classList.toggle('biru-muda');
}


//kasus 2
const tAcakWarna = document.createElement('button');
const teksTombol = document.createTextNode('acak warna');
tAcakWarna.append(teksTombol);
tAcakWarna.setAttribute('type','button');
tUbahWarna.after(tAcakWarna);

tAcakWarna.addEventListener('click',function(){
    const r = Math.round(Math.random() * 255 + 1);
    const g = Math.round(Math.random() * 255 + 1);
    const b = Math.round(Math.random() * 255 + 1);
    document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
});

//kasus 3 
const sMerah = document.querySelector('input[name=sMerah]');
const sHijau = document.querySelector('input[name=sHijau]');
const sBiru = document.querySelector('input[name=sBiru]');

sMerah.addEventListener('change',function(){
    const r = sMerah.value;
    const g = sHijau.value;
    const b =  sBiru.value;
    document.body.style.backgroundColor= 'rgb('+ r +','+g+','+b+')';
});

sHijau.addEventListener('change',function(){
    const r = sMerah.value;
    const g = sHijau.value;
    const b =  sBiru.value;
    document.body.style.backgroundColor= 'rgb('+ r +','+g+','+b+')';
});

sBiru.addEventListener('change',function(){
    const r = sMerah.value;
    const g = sHijau.value;
    const b =  sBiru.value;
    document.body.style.backgroundColor= 'rgb('+ r +','+g+','+b+')';
});

//kasus 4
//lanjutan kasus 3
document.body.addEventListener('mousemove',function(event){
    //posisi mouse
    //event.clientX
    //ukuran browser
    //console.log(window.innerWidth);
    const xpos = Math.round((event.clientX /  window.innerWidth) * 255);
    const ypos = Math.round((event.clientY /  window.innerHeight) * 255);

    document.body.style.backgroundColor = 'rgb('+xpos+','+ypos+',100)'
});