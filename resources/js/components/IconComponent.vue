<template>
    <span :class="cssClasses" aria-hidden="true"></span>
</template>

<script>
    export default {
        name: "IconComponent",
        props: ['img'],
        computed: {
            cssClasses: function () {
                return 'glyphicon glyphicon-'+this.img;
            }
        }
    }
</script>
