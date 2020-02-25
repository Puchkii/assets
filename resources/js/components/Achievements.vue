<template>
    <div>
        <h1 class="font-normal text-grey-darkest leading-none mb-8">
            Your Achievements
        </h1>

        <ul>
            <li>
                v-for="achievement in achievements"
                v-text="achievement.name"
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return { Achievements: []};
        },
        created() {
            axios.get('http://assets.test/ api/achievements')
            .then(response => {
                this.Achievements = response.data;
            })
        }
    };
</script>
