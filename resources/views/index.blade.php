@extends('layouts._include.admin.body')

@section('conteudo')
    <main>
        <section class="hero">
            <h1>O espaço dos criadores começa aqui</h1>
            <button class="cta">Junte-se Agora</button>
        </section>

        <section class="content">
            @foreach ($publicacaos as $publicacao)
                @if ($publicacao->vc_formato === 'video')
                    <!-- Publicação de vídeo -->
                    <div class="post">
                        <div class="post-header">
                            <img src="https://via.placeholder.com/40" alt="Perfil do usuário" class="profile-pic">
                            <span class="username">{{ $publicacao->nome_user }}</span>
                        </div>
                        <video controls>
                            <source src="{{ $publicacao->vc_file }}" type="video/mp4">
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
                        <img class="img_post" src="{{asset($publicacao->vc_file)}}" alt="Publicação de foto">
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
