<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../../crm/includes/Header/header.css">
<link rel="stylesheet" href="../../../crm/includes/Header/modal.css">

<header id="a">
    <div class="content_header">
        <div class="header-bg cao" id="cao">
            <div class="nomeFarmacia" style="color: #ffff;">
                <?php
                echo '<h1>' . $username . '</h1>';
                ?>
            </div>
            <div style="color: white;">
                <h1><span style="color: #84f284;">Markting</span> pharma</h1>
            </div>
            <div class="formHeader">
                <form class="formInput">
                    <div class="inputText">
                        <input type="text" placeholder="Pesquisar">
                        <button class="btn-search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search img-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
                <div class="bellImg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-bell-fill" viewBox="0 0 16 16" style="margin-right: 30px;">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                    </svg>
                </div>
                <div>
                    <button class="btnList" onclick="openNav()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="mySidebar" class="sidebar">
                <div class="headerSidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                </div>
                <div class="contentSidebar">
                    <a href="#">Sobre</a>
                    <a href="#">Ultimos Serviços</a>
                    <a href="#">Clientes</a>
                    <a href="#">Médicos</a>
                    <a href="#">Contatos</a>
                    <a href="#">Suporte</a>
                    <a href="#" id="LogOut">Sair</a>
                </div>
            </div>


        </div>
    </div>
    <script>
        const mySideBar = document.getElementById("mySidebar")
        function openNav() {
                mySideBar.style.width = "400px";
            }

            function closeNav() {
                mySideBar.style.width = "0";
            }
    </script>
    <script src="../../../crm/includes/Header/header.js"></script>
</header>