<template>
    <Layout> 
      <div v-if="$page.props.flash.success" class="alert">
        {{ $page.props.flash.success }}
      </div>
        
    </Layout>
    <main>
        <div class="title-menu">
            <h3>Itens</h3>
            <h3>9 Produtos</h3>
        </div>
        <hr class="mt-10">
        <div class="grid-container">
            <div id="grid-item-main-4">
                <img src="../../../public/assets/img/Malas/1.jpg" alt="" class="img-main">
                <div id="mt-20">
                    Mala de Viagem Média Cosmopolita Yins Brasil YS21160RO-M com Rodas Duplas Giro 360°
                    <p>R$<b class="title-preco-main">50,00</b></p>
                    <div class="text-center">
                        <button type="submit" class="button-main button-main:hover">Ver produto</button>
                    </div>
                </div>
            </div>
            <div id="grid-item-main-5">
                <img src="../../../public/assets/img/Malas/2.jpg" alt="" class="img-main">
                <div id="mt-20">
                    Mala de Viagem Média Tonin Sevilha 1949 com Rodas Giro 360° em ABS - Azul
                    <p>R$<b id="title-preco-main"> 50,00</b></p>
                    <div class="text-center">
                        <button type="submit" class="button-main button-main:hover">Ver produto</button>
                    </div>
                </div>
            </div>
            <div id="grid-item-main-6">
                <img src="../../../public/assets/img/Malas/3.jpg" alt="" class="img-main">
                <div id="mt-20">
                    Mala de Viagem Pequena Yins Brasil YS21067RO-P com Rodas Giro 360°
                    <p>R$<b id="title-preco-main"> 50,00</b></p>
                    <div class="text-center">
                        <button type="submit" class="button-main button-main:hover">Ver produto</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div id="grid-item-main-4">
                <img src="../../../public/assets/img/Malas/4.jpg" alt="" class="img-main">
                <div id="mt-20">
                    Mala de Viagem Média Yins Brasil YS21055CH com Rodas Giro 360° em ABS - Champagne
                    <p>R$<b id="title-preco-main"> 50,00</b></p>
                    <div class="text-center">
                        <button type="submit" class="button-main button-main:hover">Ver produto</button>
                    </div>
                </div>
            </div>
            <div id="grid-item-main-5">
                <img src="../../../public/assets/img/Malas/5.jpg" alt="" class="img-main">
                <div id="mt-20">
                    Mala de Viagem Média Yins Brasil YS21067A-M com Rodas Giro 360° em ABS - Azul
                    <p>R$<b id="title-preco-main"> 50,00</b></p>
                    <div class="text-center">
                        <button type="submit" class="button-main button-main:hover">Ver produto</button>
                    </div>
                </div>
            </div>
            <div id="grid-item-main-6">
                <img src="../../../public/assets/img/Malas/6.jpg" alt="" class="img-main">
                <div id="mt-20">
                    Mala de Viagem Pequena Tonin Boreal com Rodas Giro 360° em ABS - Preto
                    <p>R$<b id="title-preco-main"> 50,00</b></p>
                    <div class="text-center">
                        <button type="submit" class="button-main button-main:hover">Ver produto</button>
                    </div>
                </div>
            </div>
        </div> 
        <div class="grid-container">
            <div id="grid-item-main-4">
                <img src="../../../public/assets/img/Malas/7.jpg" alt="" class="img-main">
                <div id="mt-20">
                    Mala Viagem Pequena de Bordo Tonin Valentin Mountain 1205 - Azul Cobalto
                    <p>R$<b id="title-preco-main"> 50,00</b></p>
                    <div class="text-center">
                        <button type="submit" class="button-main button-main:hover">Ver produto</button>
                    </div>
                </div>
            </div>
            <div id="grid-item-main-5">
                <img src="../../../public/assets/img/Malas/8.jpg" alt="" class="img-main">
                <div id="mt-20">
                    Mala de Viagem Média Yins Brasil YS21067VD-M com Rodas Giro 360° em ABS - Verde
                    <p>R$<b id="title-preco-main"> 50,00</b></p>
                    <div class="text-center">
                        <button type="submit" class="button-main button-main:hover">Ver produto</button>
                    </div>
                </div>
            </div>
            <div id="grid-item-main-6">
                <img src="../../../public/assets/img/Malas/9.jpg" alt="" class="img-main">
                <div id="mt-20">
                    Mala de Viagem Média Tonin Virginia 1815 com Rodas Giro 360° em Poliéster - Preta
                    <p>R$<b id="title-preco-main"> 50,00</b></p>
                    <div class="text-center">
                        <button type="submit" class="button-main button-main:hover">Ver produto</button>
                    </div>
                </div>
            </div>
        </div>   
    </main>
    <footer>
        <div  id="rodape-main">
            <nav>
                <div>
                    <ul id="rodape-main-ul">
                        <li><a href="" id="rodape-main-link">Contato</a></li>
                        <li><a href="" id="rodape-main-link">Termo de serviço</a></li>
                        <li><a href="" id="rodape-main-link">Política de privacidade</a></li>
                        <li><a href="" id="rodape-main-link">Cancelamento, troca e reembolso</a></li>
                    </ul>
                </div>
            </nav>
            <div id="mt-20">
                <label for="input">Newsletter</label>
                <input type="email" id="input" placeholder="Digite seu melhor e-mail">
                <button id="btn">Inscrever</button>
            </div>
        </div>
        <hr>

        <div id="rodape-info">
            <div>
                <a href="" id="rodape-info-linkIcon"><i class="fa-brands fa-instagram"></i></a>
                <a href="" id="rodape-info-linkIcon"><i class="fa-brands fa-square-facebook"></i></a>
            </div>
            <div>
                <a href="" id="rodape-info-linkIcon"><i class="fa-brands fa-cc-mastercard"></i></a>
                <a href="" id="rodape-info-linkIcon"><i class="fa-brands fa-cc-visa"></i></a>
                <a href="" id="rodape-info-linkIcon"><i class="fa-brands fa-paypal"></i></a>
            </div>
        </div>
    </footer>
</template>
<script>
    import Layout from "../Layout.vue";
    export default {

        components: { Layout },

        props: {
            name: String
        }
};
</script>
<style>
</style>