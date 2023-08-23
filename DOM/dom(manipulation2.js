//Dom Manipulation
//buat element baru
const pBaru = document.createElement('p');
const teksBaru = document.createTextNode('Paragraf Baru');
//simpan ke dalam paragraf
pBaru.appendChild(teksBaru);


//simpan pBaru diakhir section A
const sectionA = document.getElementById('a');
sectionA.appendChild(pBaru);


const liBaru = document.createElement('li');
const teksLiBaru = document.createTextNode('ITEM BARU');
liBaru.appendChild(teksLiBaru);

//insertbefore()
const ul = document.querySelector('section#b ul');
const li2 = ul.querySelector('li:nth-child(2)');

ul.insertBefore(liBaru,li2);

//removeChild()
const link =sectionA.getElementsByTagName('a')[0];
sectionA.removeChild(link);

//replace child
const sectionB = document.getElementById('b');
const p4 = sectionB.querySelector('p');

const h2Baru= document.createElement('h2');
const teksH2Baru = document.createTextNode('Judul Buku');

h2Baru.appendChild(teksH2Baru);

sectionB.replaceChild(h2Baru,p4);

pBaru.style.backgroundColor = 'lightblue';
liBaru.style.backgroundColor = 'lightblue';
h2Baru.style.backgroundColor = 'lightblue';

