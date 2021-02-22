<template>
    <div class="element-listing p-3 m-2 rounded">
        <slot></slot>
    </div>
</template>

<style scoped>
.element-listing {
    min-height: 60px;
    width: 250px;
    /*-webkit-box-shadow: -2px -2px 6px #383b40, 6px 6px 6px rgb(0 0 0 / 24%);*/
    /*box-shadow: -2px -2px 6px #383b40, 6px 6px 6px rgb(0 0 0 / 24%);*/
    cursor: default;
    border-left: 3px solid var(--torre-white);
}
</style>

<script>

export default {
    props: {
        data: Object
    }
}

</script>
