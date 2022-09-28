<template>
    <header>
        <nav id="nav">
            <Link href="" id="nav-title-icon"><i class="fa-solid fa-suitcase"></i>Minhas Malas</Link>
            <ul id="nav-menu-ul">
                <li id="nav-menu-li">
                    <Link href="/crud/about">Sobre<i class="fa-solid fa-magnifying-glass"></i></Link>
                </li>
                <li id="nav-menu-li">
                    <Link href="/crud/register">Criar<i class="fa-solid fa-cart-shopping"></i></Link>
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