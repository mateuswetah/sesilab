function escondePersonagens() {
    
    /**
     * Adiciona evento de clique aos seletores para salvar no localStorage o personagem selecionado
     */
    for ( let i = 1; i <= 4; i++ ) {
        const seletorPersonagem = document.querySelector('.wp-element-button[title="Personagem ' + i + '"]');
        if ( seletorPersonagem )
            seletorPersonagem.addEventListener('click', () => localStorage.setItem('personagemSelecionado', i) );
    }

    /**
     * Procura por imagens que sejam de personagens e ajusta o tamanho delas
     */
    const personagens = document.querySelectorAll('.caminho-personagens > img');
    for ( let i = 0; i < personagens.length; i++ ) {
        personagens[i].style.height = personagens[i].height + 'px';
        personagens[i].style.width = personagens[i].height + 'px';

        /**
         * Verifica no localStorage qual o personagem que está selecionado
         */
        const personagemSelecionado = parseInt( localStorage.getItem('personagemSelecionado') );
        if ( personagemSelecionado && !isNaN(personagemSelecionado) ) {
            personagens[i].style.objectPosition = '-' + ( (personagemSelecionado - 1) * personagens[i].height) + 'px 0';        
        }
    }
}
escondePersonagens();