<script>
    export default ({
        name: 'NavLink',
        props: ['url', 'text']
    })
</script>

<template>
    <a :href="url" class="nav-link"> {{ text }} </a>
</template>

<style>
    .nav-link {
        display: flex;
        justify-content: center;
    }
</style>