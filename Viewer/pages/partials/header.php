<?php

if(isset($_COOKIE['logado'])){
    echo "
    <script>
    let meuperfil = 'meu-perfil';
    let Home = 'home';
    let meusanuncios = 'meus-anuncios';
    let settings = 'configuracoes';
    </script>
    <header>
    <div class='container-logo'><a href='../home'><img src='../Viewer/img/github.png' alt='logo'></a></div>
    <div class='container-site' style='cursor: default;'><h1>".$_SESSION['site']."</h1></div><section>
    <div class='settings'><img title='Configurações' onclick='header(settings)' src='../Viewer/img/engine.png' alt='#'></div>
    
    <div class='container-dropdown'>
    <div class='menu' id='perfil'><ul><li>".$_COOKIE['logado']."</li><li><span style='font-size: 10pt'>R$ ".mysqli_fetch_assoc($users->getUserByName($_COOKIE['logado']))['Credits']."</span></li></ul> 
    
    </div>
        <form action='../Controller/Router.php' method='POST' class='container-form_dropdown'>
            <button type='button' onclick='header(meuperfil)' name='meu-perfil' class='menu'>Perfil</button>
            <button type='button' onclick='header(Home)' name='home' class='menu'>Home</button>
            <input type='submit' value='Logout' name='submit' class='menu'>
        </form>
    </div>
    </section>
</header>";
} else {
    $site = $_SESSION['site'];
    echo "
    <script>
    let login = 'login';
    let register = 'cadastrar-usuario';
    </script>
    <header>
    <div class='container-logo'><a href='../home'><img src='../Viewer/img/github.png' alt='logo'></a></div>
    <div class='container-site' style='cursor: default;'><h1>".$site."</h1></div>
    <div class='container-dropdown'>
        <div>
            <input type='submit' onclick='header(login)' value='Logar' class='menu'>
        </div>
    </div>
</header>";
}