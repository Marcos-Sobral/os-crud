<template>
    <header>
        <nav id="nav">
            <Link href="/crud/principal"><Logo class="img-logo" /></Link>
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
                    <!-- Settings Dropdown -->
                    <div class="">
                        <Dropdown>
                            <template #trigger>
                                <span class="">
                                    <button type="button" class="">
                                        <i class="fa-solid fa-user"></i>
                                    </button>
                                </span>
                            </template>

                            <template #content>
                                <DropdownLink :href="route('logout')" method="post" as="button">
                                    Log Out
                                </DropdownLink>
                            </template>
                        </Dropdown>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <main>
      <slot />
    </main>
</template>

<script setup>
import Logo from '@/Components/Logo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import { Link } from '@inertiajs/inertia-vue3'
</script>
