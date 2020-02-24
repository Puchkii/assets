<template>
    <h1 class="font-normal text-grey-dark leading-none">Loaders And Animations</h1>
</template>

<script>
    export default {
        mounted() {
            lottie.loadAnimation({
                container: this.$refs.lottie,
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '/animations/spinner.json'
            });
        }
    };
</script>
