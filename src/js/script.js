const personagens = document.querySelectorAll('.personagem');

personagens.forEach(personagem => {
    personagem.addEventListener('mouseenter', () => {

        if (window.innerWidth < 450) {
            window.scrollTo({ top: 0, bahavior: 'smooth' });
        }

        const jobPersonagem = personagem.getAttribute('data-job');
        const personagemSelecionado = document.querySelector('.selecionado');
        const idPersonagem = personagem.attributes.id.value;
        const imagempersonagemPequena = document.querySelector(`.${idPersonagem}`);

        if (personagemSelecionado) {
            personagemSelecionado.classList.remove('selecionado');
            const idPersonagemSelecionado = personagemSelecionado.attributes.id.value;
            const imagemPersonagemSelecionado = document.querySelector(`.${idPersonagemSelecionado}`);
            imagemPersonagemSelecionado.src = `./src/imagem/job-normal/${personagemSelecionado.getAttribute('data-job')}.png`;
        }

        personagem.classList.add('selecionado');
        imagempersonagemPequena.src = `./src/imagem/job-active/${jobPersonagem}.png`;
        const imagempersonagemGrande = document.querySelector('.personagem-grande');
        imagempersonagemGrande.src = `./src/imagem/job-large/${jobPersonagem}.png`;

        const nomePersonagem = document.getElementById('nome-personagem');
        nomePersonagem.innerText = personagem.getAttribute('data-nome');

        const descricaoPersonagem = document.getElementById('descricao-personagem');
        descricaoPersonagem.innerText = personagem.getAttribute('data-desc');
    });
});
