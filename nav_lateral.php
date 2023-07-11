<?php
include('../conf/settings.conf');
?>
<style>
    .nav_lateral {
        background-color: <?php echo "$bg_color"; ?>;
        width: 50px;
        position: absolute;
        height: calc(100% + 110px);
        left: -10px;
        margin-top: -40px;
        transition: all 0.5s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .nav_lateral a {
        text-decoration: none;
        color: #fff;
        padding: 10px 15px;
        display: block;
        font-size: 16px;
    }

    .nav_lateral a:hover {
        background-color: rgba(0, 0, 0, 0.4);
        padding: 10px 20px;
        transition: all 0.3s;
        position: relative;
    }

    .nav_lateral a:hover::after {
        content: '';
        position: absolute;
        right: -10px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid rgba(0, 0, 0, 0.4);
    }

    #chec {
        display: none;
    }

    #chec:checked~.nav_lateral {
        width: 250px;
    }

    #div1 {
        display: block;
        width: 50px;
        font-size: 24px;
        text-align: center;


    }

    #div2 {
        display: none;
        white-space: nowrap;
        animation: slideIn 0.5s forwards;
    }

    @keyframes slideIn {
        0% {
            transform: translateX(-40%);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>

<input type="checkbox" id="chec">
<div class="nav_lateral">
    <div id="div1">
        <a href="site.php" title="Home"><i class="fa fa-home"></i></a>
        <a href="?main=relatorio&action=view" title="Relatório"><i class="fa fa-newspaper-o"></i></a>
        <a href="?main=cliente&action=consulta_cli" title="Cadastrar Paciente"><i class="fa fa-book"></i></a>
        <a href="?main=cadastro&action=form" title="Cadastrar Conta"><i class="fa fa-plus-circle"></i></a>
        <a href="?main=cadastro&action=desp" title="Cadastrar Despesas"><i class="fa fa-money"></i></a>
        <a href="?main=editar&action=form" title="Editar Conta"><i class="fa fa-edit"></i></a>
    </div>
    <div id="div2">
        <a href="site.php"><i class="fa fa-home" style="padding: 0px 5px 0px 0px; width:15px;"></i> Home</a>
        <a href="?main=relatorio&action=view"><i class="fa fa-newspaper-o" style="padding: 0px 5px 0px 0px; width:15px;"></i> Relatório</a>
        <a href="?main=cliente&action=consulta_cli"><i class="fa fa-book" style="padding: 0px 5px 0px 0px; width:15px;"></i> Cadastrar Paciente</a>
        <a href="?main=cadastro&action=form"><i class="fa fa-plus-circle" style="padding: 0px 5px 0px 0px; width:15px;"></i> Cadastrar Conta</a>
        <a href="?main=cadastro&action=desp"><i class="fa fa-money" style="padding: 0px 5px 0px 0px; width:15px;"></i> Cadastrar Despesas</a>
        <a href="?main=editar&action=form"><i class="fa fa-edit" style="padding: 0px 5px 0px 0px; width:15px;"></i> Editar Conta</a>
    </div>
</div>

<script>
    var checkbox = document.getElementById('chec');
    var div1 = document.getElementById('div1');
    var div2 = document.getElementById('div2');

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            div1.style.display = 'none';
            div2.style.display = 'block';
        } else {
            div1.style.display = 'block';
            div2.style.display = 'none';
        }
    });
</script>