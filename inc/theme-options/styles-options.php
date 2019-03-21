<style>
    .Box-Theme-Options{
       width: 95%;
       display:flex;
       justify-content:space-between;
       flex-wrap:wrap;
       background: #fff !important;
       box-sizing: border-box;
       margin:10px;
       background:rgb(255, 107, 107);
    }
    .Box-Theme-Options h2{
        width:100%;
        box-sizing:border-box;
        padding:25px;
        margin-top:0px;
        margin-bottom:0px;
        font-size:2em;
        color:#fff;
        background:rgb(238, 82, 83);
    }
    .Box-Theme-Options-Menu{
        width:20%;
        background: #e0e0e0;
    }
    .Box-Theme-Options-Menu a{
        text-decoration:none;
        outline:0px;
    }
    .Box-Theme-Options-Menu div{
        width:100%;
        font-size:1.2em;
        box-sizing:border-box;
        transition:0.3s;
        -webkit-transition:0.3s;
        -moz-transition:0.3s;
        -o-transition:0.3s;
        -ms-transition:0.3s;
        cursor:pointer;
    }
    .Box-Theme-Options-Menu div:hover{
        background:#444;
    }
    .Box-Theme-Options-Menu div:hover p{
        color:#fff;
    }
    .Box-Theme-Options-Menu div p{
        margin-top:0px;
        margin-bottom:0px;
        width:100%;
        text-align:center;
        padding-top:10px;
        padding-bottom:10px;
        color:#444;
    }
    .Box-Theme-Options-Main{
        display:none;
    }
    .Box-Theme-Options-Main-View{
        width:80%;
        display:flex !important;
        justify-content:space-around;
        flex-wrap:wrap;
    }
    .Box-Theme-Options-Main h3{
        width:80%;
        color:#ee5253;
        font-size:2em;
        font-weight:normal;
        border-bottom:1px solid #eee;
        padding-bottom:10px;
        margin-bottom:0px;
    }
    .Box-Theme-Options-Main-Interna{
        width:80%;
        box-sizing:border-box;
        border: 1px solid #eee;
        margin-top:20px;
        display:flex;
        justify-content:space-around;
        flex-wrap:wrap;
        margin-bottom:20px;
    }
    .Box-Theme-Options-Main-Interna form{
        width:90%;
    }
    .Box-Theme-Options-Main-Interna-Container-Input{
        width:100%;
        border:1px solid #eee;
        padding:10px;
        box-sizing:border-box;
        display:flex;
        justify-content:space-between;
        margin-top:5px;
        margin-bottom:5px;
    }
    .Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras{
        width:100%;
    }
    .Box-Theme-Options-Main-Interna-Container-Input label{
        font-size:0.9em;
        width:50%;
        color:#222;
    }
    .padding-left-label{
        padding-left:5px;
    }
    .Box-Theme-Options-Main-Interna-Container-Input input{
        width:50%;
    }
    .Box-Theme-Options-Main-Interna-Container-Input textarea{
        width:50%;
    }
    .Btn-Enviar{
        width: 100%;
        margin-top: 10px;
        margin-bottom:10px;
        height:55px;
        color:#fff;
        border:none;
        outline:0px;
        background:#ee5253;
        cursor:pointer;
        font-size:1.5em;
        transition:0.3s;
        -webkit-transition:0.3s;
        -moz-transition:0.3s;
        -o-transition:0.3s;
        -ms-transition:0.3s;
    }
    .Btn-Enviar:hover{
        background:#444;
    }
</style>