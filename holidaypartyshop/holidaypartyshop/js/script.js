const optionsButton = document.querySelector('.options');
const sidebar = document.querySelector('.sidebar');

optionsButton.addEventListener('click', () => {
  sidebar.style.right = '10px'; // Move a div para dentro da tela
});

// Opcional: fechar a div quando clicar fora dela
document.addEventListener('click', (event) => {
  if (!sidebar.contains(event.target) && !optionsButton.contains(event.target)) {
    sidebar.style.right = '-250px';
  }
});

const elementosSecTema = document.getElementsByClassName('secTema');

for (let i = 0; i < elementosSecTema.length; i++) {
  elementosSecTema[i].addEventListener('click', () => {
    location.reload();
  });
}


const produtos = [
  {
      nome: 'cabeças de abobora',
      preco: 10.99,
      quantidade: 10,
      imagem: 'deco1.jpg',
      desc: '*descrição bla bla bla*',
      tema: 'halloween',
    },
  {
      nome: 'ornamentação de Halloween',
      preco: 15.99,
      quantidade: 1,
      imagem: 'deco2.jpg',
      desc: '*descrição bla bla bla*',
      tema: 'halloween',
    },
  {
      nome: 'fantasmas',
      preco: 10.00,
      quantidade: 4,
      imagem: 'deco3.jpg',
      desc: '*descrição bla bla bla*',
      tema: 'halloween',
    },
  {
      nome: 'Velas',
      preco: 15.00,
      quantidade: 3,
      imagem: 'deco1n.jpg',
      desc: '*descrição bla bla bla*',
      tema: 'natal',
    },
  {
      nome: 'guirlanda',
      preco: 5.50,
      quantidade: 1,
      imagem: 'deco2n.jpg',
      desc: '*descrição bla bla bla*',
      tema: 'natal',
    },
  {
      nome: 'treco de natal',
      preco: 25.00,
      quantidade: 3,
      imagem: 'deco3n.jpg',
      desc: '*descrição bla bla bla*',
      tema: 'natal',
    },
  {
      nome: 'trco de ano novo',
      preco: 10.00,
      quantidade: 3,
      imagem: 'deco1a.jpg',
      desc: '*descrição bla bla bla*',
      tema: 'anoNovo',
    },
  {
      nome: 'balões',
      preco: 5.50,
      quantidade: 1,
      imagem: 'deco2a.jpg',
      desc: '*descrição bla bla bla*',
      tema: 'anoNovo',
    },
  {
      nome: 'jarros',
      preco: 25.00,
      quantidade: 3,
      imagem: 'deco3a.jpg',
      desc: '*descrição bla bla bla*',
      tema: 'anoNovo',
    },
];