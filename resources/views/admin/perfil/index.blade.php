@extends('layouts._include.admin.body')

@section('conteudo')
    <main>
        <section class="profile-header">
            <div>
                <img src="https://via.placeholder.com/100" alt="Foto do Perfil" class="profile-avatar">
            </div>
            <div class="user-info">
                <h1>{{ Auth::user()->name }}</h1>
                <button class="cta">Seguir</button>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, libero? Quidem ullam impedit similique sint reiciendis officiis iure dicta a, sunt, facilis architecto consectetur veritatis dolorum placeat, ratione commodi laborum!
                </p>
            </div>
            <hr>
        </section>
        <section class="publicar_edit">
            <div class="publicar">
                <form action="{{ route('publicar.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Token CSRF obrigatório -->
                    
                    <div class="parte">
                        <!-- O input escondido -->
                        <input type="file" class="arquivo" id="vc_file" name="vc_file">
                
                        <!-- O label estilizado -->
                        <label for="vc_file" class="arquivo-label">Upload de imagem/vídeo</label>
                    </div>
                    <div class="parte">
                        <label for="lt_conteudo" class="espaco">Descrição</label>
                        <textarea name="lt_conteudo" class="texto_input" id="lt_conteudo" rows="4" cols="50" placeholder="Escreva algo..."></textarea>
                    </div>
                    <button type="submit" class="btn1">Enviar</button>
                </form>
            </div>
        </section>
        <section class="profile-stats">
            <div class="stat">
                <strong>120</strong>
                <span>Publicações</span>
            </div>
            <div class="stat">
                <strong>1,500</strong>
                <span>Seguidores</span>
            </div>
            <div class="stat">
                <strong>980</strong>
                <span>Seguindo</span>
            </div>
        </section>

        <section class="user-posts">
            <h2>Minhas Publicações</h2>
            @foreach ($publicacaos as $publicacao)
                @if ($publicacao->vc_formato === 'video')
                    <!-- Publicação de vídeo -->
                    <div class="post">
                        <div class="post-header">
                            <img src="https://via.placeholder.com/40" alt="Perfil do usuário" class="profile-pic">
                            <span class="username">{{ $publicacao->nome_user }}</span>
                        </div>
                        <video controls>
                            <source src="{{ asset($publicacao->vc_file) }}" type="video/mp4">
                            Seu navegador não suporta a exibição de vídeos.
                        </video>
                        <p class="caption">{{ $publicacao->lt_conteudo }}</p>
                        <div class="post-actions">
                            <button class="action-button">
                                <i class="fas fa-thumbs-up"></i> Curtir
                            </button>
                            <span class="like-count">12 curtidas</span>
                        </div>
                    </div>
                @elseif ($publicacao->vc_formato === 'imagem')
                    <!-- Publicação de foto -->
                    <div class="post">
                        <div class="post-header">
                            <img src="https://via.placeholder.com/40" alt="Perfil do usuário" class="profile-pic">
                            <span class="username">{{ $publicacao->nome_user }}</span>
                        </div>
                        <img class="img_post" src="{{asset($publicacao->vc_file) }}" alt="Publicação de foto">
                        <p class="caption">{{ $publicacao->lt_conteudo }}</p>
                        <div class="post-actions">
                            <button class="action-button">
                                <i class="fas fa-thumbs-up"></i> Curtir
                            </button>
                            <span class="like-count">45 curtidas</span>
                        </div>
                    </div>
                @else
                    <!-- Publicação de texto -->
                    <div class="post">
                        <div class="post-header">
                            <img src="https://via.placeholder.com/40" alt="Perfil do usuário" class="profile-pic">
                            <span class="username">{{ $publicacao->nome_user }}</span>
                        </div>
                        <p>
                            <strong>Reflexão do dia:</strong> {{ $publicacao->lt_conteudo }}
                        </p>
                        <div class="post-actions">
                            <button class="action-button">
                                <i class="fas fa-thumbs-up"></i> Curtir
                            </button>
                            <span class="like-count">30 curtidas</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </section>
    </main>
@endsection
