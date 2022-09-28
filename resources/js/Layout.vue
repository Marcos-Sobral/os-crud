<template>
    <header>
        <nav id="nav">
            <Link href="/crud/principal" id="nav-title-icon"><img src="../../public/assets/img/Malas/logo/santamalas.png" alt="" class="img-logo"></Link>
            <ul id="nav-menu-ul">
                <li id="nav-menu-li">
                    <Link href="">Como funciona ? |</Link>
                </li>
                <li id="nav-menu-li">
                    <Link href="/crud/principal/ver">Comprar |</Link>
                </li>
                <li id="nav-menu-li">
                    <Link href="/crud/about">Sobre |</Link>
                </li>
                <li id="nav-menu-li">
                    <Link href="/crud/register">Criar</Link>
                </li>
                <li id="nav-menu-li">
                    <Link href=""><i class="fa-solid fa-bars"></i></Link>
                </li>
            </ul>
        </nav>
    </header>
    <main>
      <slot />
    </main>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default{
        components: {
            Link,
        }
    }
</script>

<style>

</style>