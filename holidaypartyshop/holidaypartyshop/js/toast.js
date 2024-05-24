function showToast() {
    // Criar elemento de toast
    var toast = document.createElement('div');
    toast.className = 'toast';
    toast.textContent = 'Bem vindo!';

    // Adicionar toast ao container
    document.getElementById('toast-container').appendChild(toast);

    // Adicionar classe para iniciar a transição
    setTimeout(function () {
        toast.classList.add('fade-out');
    }, 2500); 

    // Remover toast após a transição
    setTimeout(function () {
        toast.remove();
    }, 3500); 
}
