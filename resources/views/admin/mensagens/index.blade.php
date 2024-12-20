@extends('layouts._include.admin.body')
@section('conteudo')
<!-- Área principal -->
<div class="direita">
    <div class="mensagens">
        <!-- Barra de contatos -->
        <div class="contatos">
            <div class="pesquisa">
                <input type="text" placeholder="Pesquisar contatos...">
            </div>
            <ul class="lista-contatos">
                <li>
                    <img src="/img/Novus _ Logo Design.jpg" alt="Perfil">
                    <span>Textador_remoto123</span>
                </li>
                <li>
                    <img src="/img/Novus _ Logo Design.jpg" alt="Perfil">
                    <span>Textador_remoto123</span>
                </li>
                <li>
                    <img src="/img/Novus _ Logo Design.jpg" alt="Perfil">
                    <span>Designer_inova</span>
                </li>
                <li>
                    <img src="/img/Novus _ Logo Design.jpg" alt="Perfil">
                    <span>Dev_estrela</span>
                </li>
            </ul>
        </div>
        <!-- Caixa de mensagens -->
        <div class="caixa-mensagens">
            <!-- Com quem conversa -->
            <div class="topo">
                <img src="/img/Novus _ Logo Design.jpg" alt="Perfil">
                <span>Textador_remoto123</span>
            </div>
            <!-- fim Com quem conversa -->
             <!-- a conversa -->
            <div class="mensagens-historico">
                <div class="mensagem recebida">
                    <p>Olá! Tudo bem?</p>
                </div>
                <div class="mensagem enviada">
                    <p>Sim, e você?</p>
                </div>
                <div class="mensagem recebida">
                    <p>Também! Preciso de ajuda com um design.</p>
                </div>
            </div>
            <!--fim a conversa -->
            <!-- caixa de entrada -->
            <div class="enviar-mensagem">
                <input type="text" placeholder="Digite sua mensagem...">
                <button>
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
            <!-- fim caixa de entrada -->
        </div>
    </div>
</div>
@endsection