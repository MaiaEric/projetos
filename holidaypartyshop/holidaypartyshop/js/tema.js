// Função para obter a data atual no formato 'YYYY-MM-DD'
function obterDataAtualFormatada() {
    const hoje = new Date();
    const ano = hoje.getFullYear();
    const mes = (hoje.getMonth() + 1).toString().padStart(2, '0');
    const dia = hoje.getDate().toString().padStart(2, '0');
    return `${ano}-${mes}-${dia}`;
  }
  
  // Função para determinar o tema com base na data atual
  function determinarTemaAtual() {
    const dataAtual = obterDataAtualFormatada();
  
    // Lógica para determinar o tema com base na data
    // Exemplo: Natal de 1º de dezembro a 25 de dezembro, Halloween em outubro, Ano Novo em janeiro
    if (dataAtual >= '2023-12-01' && dataAtual <= '2023-12-25') {
      return 'natal';
    } else if (dataAtual.startsWith('2023-10')) {
      return 'halloween';
    } else if (dataAtual.startsWith('2023-01')) {
      return 'anoNovo';
    } else {
      // Se não estiver próximo de uma data festiva, retorne o tema padrão
      return 'padrao';
    }
  }
  
  // Recupera o tema atual ou o tema padrão se nenhum estiver definido
  const temaAtual = localStorage.getItem('tema') || determinarTemaAtual();
  
  // Aplica o tema atual
  selecionarEstilo(temaAtual);