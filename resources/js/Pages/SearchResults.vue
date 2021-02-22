<template>
<div class="bg-torre-black ">
    <table class="torre-shadow">
        <tr v-for="result in results">
            <td>{{ result.objective }}<br>
            {{ result.type }}</td>
        </tr>
    </table>
</div>
</template>

<script>
export default {
    props: {
        results: Array
    }
}
</script>
