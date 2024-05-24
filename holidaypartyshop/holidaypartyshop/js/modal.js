const imagemProd = document.getElementById('img');
const nomeProd = document.getElementById('nomeProduto');
const precoProd = document.getElementById('preco');
const descricao = document.getElementById('descricao');
const quantidade = document.getElementById('quant');

// Abre o modal ao clicar no botão
document.querySelectorAll('article').addEventListener('click', modalProduto(produto));

// Fecha o modal quando o usuário clica fora dele
window.onclick = function(event) {
    var modal = document.getElementById('myModal');
    if (event.target === modal) {
        closeModal();
    }
}

function modalProduto(produto) {
    document.getElementById('myModal').style.display = 'block';
    imagemProd.src = `img/produtos/${produto.imagem}`;
    nomeProd.textContent = produto.nome;
    precoProd.textContent = `R$ ${produto.preco}`;
    descricao.textContent = produto.desc;
    quantidade.textContent = produto.quantidade;
}

function closeModal() {
    document.getElementById('myModal').style.display = 'none';
}
